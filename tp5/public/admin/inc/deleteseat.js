function deleteseat(floor,seat_id){
var httpRequest = new XMLHttpRequest();//第一步：建立所需的对象
	var url = 'http://47.103.121.211/tp5/public/deleteseat/';
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
		
		alert(json);
		}
        };
}
function get(){
var floor=document.getElementById("floor");
  floor = floor.value;
 var seat_id=document.getElementById("seat_id");
  seat_id = seat_id.value;
deleteseat(floor,seat_id);
document.getElementById("floor").value='';
document.getElementById("seat_id").value='';
}


