function checkuserbyname(name){
var httpRequest = new XMLHttpRequest();//第一步：建立所需的对象
	var url = 'http://47.103.121.211/tp5/public/getuserbyname/';
	url = url+name;
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
function checkuserbynum(num){
var httpRequest = new XMLHttpRequest();//第一步：建立所需的对象
	var url = 'http://47.103.121.211/tp5/public/getuserbynum/';
	url = url+num;
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
function getname(){
 var name=document.getElementById("name");
  name = name.value;
console.log(name);
checkuserbyname(name);
document.getElementById("name").value='';
}
function getnum(){
var num=document.getElementById("num");
  num = num.value;
checkuserbynum(num);
document.getElementById("num").value='';
}


