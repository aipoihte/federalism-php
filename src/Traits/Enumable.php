<?php


namespace Aipoihte\Traits;


trait Enumable
{

    public static function getList()
    {
        return collect(self::$list);
    }

    public static function labelify($labels, $get_method='get')
    {
        return collect($labels)->map(function($l) use($get_method){
            return self::$get_method($l)['label'];
        });
    }

    public static function getAll()
    {
        return self::getList();
    }

    public static function get($code,$the_list = null)
    {
        if($the_list){
            $list = $the_list;
        }else{
            $list = self::getList();
        }
        // return $list;
        return collect($list)->filter(function($l) use($code){
            return $l['code'] == $code;
        })->first();
    }

}