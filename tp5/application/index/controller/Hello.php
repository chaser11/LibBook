<?php
namespace app\index\controller;
use think\Db;
class Hello
{
    public function get()
    {
        $date = date("Y-m-d"); 
	return $date;
    }
}
