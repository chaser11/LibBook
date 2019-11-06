<?php
namespace app\index\controller;
use think\Db;
class DeleteSeat
{
    public function deleteseat($dfloor,$dseat_id)
    {
	$res = Db::table('seats')->where('floor',$dfloor)->where('seat_id',$dseat_id)->delete();
                    if($res) return'ok!';
                   
        return "cant found this seat";


                  
    }
}
