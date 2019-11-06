
var httpRequest = new XMLHttpRequest();//第一步：建立所需的对象
        httpRequest.open('GET', 'http://47.103.121.211/tp5/public/getseats', true);//第二步：打开连接  将请求参数写在url中  ps:"./Ptest.php?name=test&nameone=testone"
        httpRequest.send();//第三步：发送请求  将请求参数写在URL中
        /**
         * 获取数据后的处理程序
         */
        httpRequest.onreadystatechange = function () {
            if (httpRequest.readyState == 4 && httpRequest.status == 200) {
                var json = httpRequest.responseText;//获取到json字符串，还需解析
		json = JSON.parse(json);
		var tablehead = "<tr>"+"<th>"+"ID"+"</th>"+"<th>"+"楼层"+"</th>"+"<th>"+"位置ID"+"</th>"+"</tr>"
                var tableData=tablehead
		 //动态增加5个td,并且把data数组的五个值赋给每个td
 		for(var i=0;i<json.length;i++){
  		tableData+="<tr>"+"<td>"+json[i].id+"</td>"+"<td>"+json[i].floor+"</td>"+"<td>"+json[i].seat_id+"</td>"+"</tr>"
 		}
 		
		sessionStorage.setItem('seatcount',json.length);
                $("#userlist").html(tableData)
            }
        };


