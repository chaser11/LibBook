<?php
namespace app\index\controller;
use think\Db;
class ClearSeat
{
    public function clearseat($cfloor,$cseat_id)
    {
		$res = Db::table('orders')->where('floor',$cfloor)->where('seat_id',$cseat_id)->delete();

        if($res) return'ok!';
                   
        return "no orders to be deleted!";

                  
    }
}
