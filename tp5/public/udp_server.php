<?php
//创建Server对象，监听 0.0.0.0:9502端口，类型为SWOOLE_SOCK_UDP
$serv = new swoole_server("0.0.0.0", 9502, SWOOLE_PROCESS, SWOOLE_SOCK_UDP); 

//监听数据接收事件
$serv->on('Packet', function ($serv, $data, $clientInfo) {
    //给客户端发送客户端传过来的$data
    //$serv->sendto($clientInfo['address'], $clientInfo['port'], $data);
    var_dump($clientInfo);
    var_dump($data);
    createNewFile($data);
    include 'cmds.php';
    $serv->sendto($clientInfo['address'], $clientInfo['port'], $cmd);
});

//启动服务器
$serv->start(); 

function createNewFile($data){
$myfile = fopen("data.php", "w") or die("Unable to open file!");
fwrite($myfile, "<?php\necho \"");
fwrite($myfile, $data);
fwrite($myfile, "\";");
fclose($myfile);
}
