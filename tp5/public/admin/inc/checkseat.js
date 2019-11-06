function checkseat(floor,seat_id){
var httpRequest = new XMLHttpRequest();//第一步：建立所需的对象
	var url = 'http://47.103.121.211/tp5/public/checkseat/';
	url = url+floor+'/'+seat_id;
        console.log(url);
        httpRequest.open('GET', url, true);//第二步：打开连接  将请求参数写在url中  ps:"./Ptest.php?name=test&nameone=testone"
        httpRequest.send();//第三步：发送请求  将请求参数写在URL中
        /**
         * 获取数据后的处理程序
         */
        httpRequest.onreadystatechange = function () {
            if (httpRequest.readyState == 4 && httpRequest.status == 200) {
                var json = httpRequest.responseText;//获取到json字符串，还需解析
		 json = JSON.parse(json);
		 var tableData="<tr>"+"<th>"+"用户ID"+"</th>"+"<th>"+"date"+"</th>"+"<th>"+"开始时间"+"</th>"+"<th>"+"结束时间"+"</th>"+"</tr>"
		for(var i=0;i<json.length;i++){
  		tableData+="<tr>"+"<td>"+json[i].user_id+"</td>"+"<td>"+json[i].date+"</td>"+"<td>"+json[i].start_time+"</td>"+"<td>"+json[i].end_time+"</td>"+"</tr>"
 		}
                $("#seatlist").html(tableData)
		}
        };
}
function get(){
var floor=document.getElementById("floor");
  floor = floor.value;
 var seat_id=document.getElementById("seat_id");
  seat_id = seat_id.value;
checkseat(floor,seat_id);
document.getElementById("floor").value='';
document.getElementById("seat_id").value='';
}


