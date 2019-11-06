<?php
namespace app\index\controller;
use think\Db;
class GetUserCounts
{
    public function getusercounts()
    {
        $sql = 'select count(*) from user;';
        $res = Db::query($sql);
        return  (json_encode($res,JSON_UNESCAPED_UNICODE));
                  
    }
}
