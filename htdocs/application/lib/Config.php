<?php
/**
 * Created by PhpStorm.
 * User: loftus
 * Date: 30.01.18
 * Time: 16:18
 */

namespace application\lib;


trait Config
{
    public static function get ($path = null){
        if($path){
            $config= $GLOBALS['config'];
            $path = explode('/',$path);

            foreach ($path as $bit) {
                //echo $bit;
                if (isset($config[$bit])){
                    $config = $config[$bit];
                }
            }

            return $config;
        }

        return false;
    }
}