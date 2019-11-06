<?php
namespace app\index\controller;
use think\Db;
class CheckUser
{
    public function checkuser($cnum,$cname)
    {
        $res = Db::table('user')->where('usernum',$cnum)->where('username',$cname)->find();
        if($res) return  (json_encode($res,JSON_UNESCAPED_UNICODE));
                   
        return 0;
    }
}
