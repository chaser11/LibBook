<?php
namespace app\index\controller;
use think\Db;
class GetUserByNum
{
    public function getuserbynum($num)
    {
       $res = Db::table('user')->where('usernum',$num)->find();
                   
        return  (json_encode($res,JSON_UNESCAPED_UNICODE));
               
         }

         /**
     * 把unicode编码的字符串转为人眼可看的字符串
     * @param $unicode_str
     *
     * @return string
     */
    private function unicodeDecode($unicode_str){
        $unicode_str = str_replace('"', '\"', $unicode_str);
        $unicode_str = str_replace("'", "\'", $unicode_str);
        $json = '{"str":"'.$unicode_str.'"}';
 
        $arr = json_decode($json,true);
 
        if(empty($arr)){
            return '';
        }
 
        return $arr['str'];
    }
}
