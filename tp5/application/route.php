<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
Route::get('Hello/','index/Hello/get');	//定义GET请求路由规则,使用当下目录的index的Hello类的get方法
					//后面参数最好不要重复，否则导致找不到模块，框架问题，误解
Route::get('GetUsers','index/GetUsers/getusers');
Route::get('GetUserCounts','index/GetUserCounts/getusercounts');
Route::get('CheckUser/:cnum/:cname','index/CheckUser/checkuser'); 
Route::get('GetUserByNum/:num','index/GetUserByNum/getuserbynum'); 
Route::get('GetUserByName/:gname','index/GetUserByName/getuserbyname'); 
Route::get('AddUser/:anum/:aname','index/AddUser/add_user'); 
Route::get('DeleteUser/:dnum/:dname','index/DeleteUser/delete_user');  


Route::get('CheckAdmin/[:user]/[:password]','index/CheckAdmin/checkadmin');

Route::get('GetSeats','index/GetSeats/getseats'); 
Route::get('CheckSeat/:floor/:seat_id','index/CheckSeat/checkseat');
Route::get('AddSeat/:afloor/:aseat_id','index/AddSeat/addseat');
Route::get('DeleteSeat/:dfloor/:dseat_id','index/DeleteSeat/deleteseat');
Route::get('ClearSeat/:cfloor/:cseat_id','index/ClearSeat/clearseat');

Route::get('Order/:user_id/:floor/:seat_id/:year/:month/:day/:start_time/:end_time','index/Order/order');
Route::get('CheckOrders/:year/:month/:day','index/CheckOrders/checkorders');
Route::get('Flush/:year/:month/:day/:floor/:time','index/Flush/flush');



return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
