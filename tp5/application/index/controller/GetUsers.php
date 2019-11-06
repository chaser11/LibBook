<?php
namespace app\index\controller;
use think\Db;
class GetUsers
{
    public function getusers()
    {
          $res = Db::query('select * from user;');
        return  (json_encode($res,JSON_UNESCAPED_UNICODE));
    }
}
