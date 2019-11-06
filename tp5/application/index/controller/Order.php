<?php
namespace app\index\controller;
use think\Db;
class Order
{
    public function order($user_id,$floor,$seat_id,$year,$month,$day,$start_time,$end_time)
    {
	$date = $year.'-'.$month.'-'.$day;
	$res = Db::table('orders')
	->where('floor',$floor)
	->where('date',$date)
                 ->where('start_time','<=',$start_time)
	    ->where('end_time','>=',$start_time)
	->where('seat_id','=',$seat_id)
	->select();
	if($res) return "start_time is illicit, seat has been taken!!";
	$res = Db::table('orders')
	->where('floor',$floor)
	->where('date',$date)
                     ->where('start_time','<=',$end_time)
   	 ->where('end_time','>=',$end_time)
	->where('seat_id','=',$seat_id)
	->select();
	if($res) return "end_time is illicit, seat has been taken!!";
	$res = Db::table('orders')
	->where('floor',$floor)
	->where('date',$date)
                     ->where('start_time','>=',$start_time)
   	 ->where('end_time','<=',$end_time)
	->where('seat_id','=',$seat_id)
	->select();
	if($res)  return "between start_time and end_time, seat has been taken!!";


	
	$data = ['user_id' => $user_id,'floor' => $floor, 'seat_id' => $seat_id,'date' => $date, 'start_time' => $start_time, 'end_time' => $end_time];
	Db::name('orders')->data($data)->insert();
        return  'ok';
	}

}
