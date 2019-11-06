<?php
namespace app\index\controller;
use think\Db;
class GetSeats
{
    public function getseats()
    {
        $res = Db::query('select * from seats;');
       return  (json_encode($res,JSON_UNESCAPED_UNICODE));    
        }
}
