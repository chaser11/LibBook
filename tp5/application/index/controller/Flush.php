<?php
namespace app\index\controller;
use think\Db;
class Flush
{
    public function flush($year,$month,$day,$floor,$time)
    {
        $date = $year.'-'.$month.'-'.$day;
	$res = Db::table('orders')
	->where('floor',$floor)
	->where('date',$date)
	->where('start_time','<',$time)
	->where('end_time','>',$time)
	->field('seat_id')
	->distinct(true)
	->select();
        return  (json_encode($res,JSON_UNESCAPED_UNICODE));
        }
}
