<?php
namespace app\index\controller;
use think\Db;
class DeleteUser
{
    public function delete_user($dnum,$dname)
    {
                 
        $res = Db::table('user')->where('usernum',$dnum)->where('username',$dname)->delete();
                    if($res) return'ok!';
                   
        return "cant found this user";
    }
}
