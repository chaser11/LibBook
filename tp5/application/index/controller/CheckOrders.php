<?php
namespace app\index\controller;
use think\Db;
class CheckOrders
{
    public function checkorders($year,$month,$day)
    {
	$date = $year.'-'.$month.'-'.$day;
	$sql = 'select * from orders where date = \''.$date.'\';';
        $res = Db::query($sql);
        return  (json_encode($res,JSON_UNESCAPED_UNICODE));


    }
}
