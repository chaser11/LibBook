<?php
namespace app\index\controller;
use think\Db;
class AddSeat
{
    public function addseat($afloor,$aseat_id)
    {
	$sql = 'select * from seats where floor ='.$afloor. ' and seat_id ='.$aseat_id .';';
        $res = Db::query($sql);
	if(!$res){
        $data = ['floor' => $afloor, 'seat_id' => $aseat_id];
		   Db::name('seats')->data($data)->insert();
                   return 'ok';
                 }                  
        else return "seat already exist!";

                  
    }
}
