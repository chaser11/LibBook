<?php
namespace app\index\controller;
use think\Db;
class AddUser
{
    public function add_user($anum,$aname)
    {
               $sql = 'select * from user where usernum = '.'\''.$anum.'\';';
                      $res = Db::query($sql);
                    if(!$res){

       		  $data = ['usernum' => $anum, 'username' => $aname];
		   Db::name('user')->data($data)->insert();
                   return 'ok';
                             }                  
                     else return "user already exist!";
    }
}
