<?php
namespace app\index\controller;
use think\Db;
class CheckAdmin
{
    public function checkadmin($user='0',$password='0')
    {
        $res = Db::table('admin')->where('user',$user)->where('password',$password)->find();
	
                    if($res) return json_encode(1,JSON_UNESCAPED_UNICODE);
        
        return json_encode(0,JSON_UNESCAPED_UNICODE);
    }
}
