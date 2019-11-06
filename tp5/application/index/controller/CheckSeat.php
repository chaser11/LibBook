<?php
namespace app\index\controller;
use think\Db;
class CheckSeat
{
    public function checkseat($floor,$seat_id)
    {
                $sql = 'select * from orders where floor ='.$floor. ' and seat_id ='.$seat_id .' order by date desc ;';
        $res = Db::query($sql);
        return  (json_encode($res,JSON_UNESCAPED_UNICODE));
                  
    }
}
