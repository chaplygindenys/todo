<?php


namespace App\SBlog\Core;


class BlogApp
{
     public static $app;

     public static function get_instance(){
      self::$app = Registry::instance();
      self::getParams();
      return self::$app;
    }

    protected static function getParams(){
         $params = require CONF.'/params.php';
       /* $params =[
            'admin_email' =>   'admin@admin.com',
            'shop_name'   =>   'Laravel Shop',
            'pagination'  =>   3,
            'smtp_host'   =>   'smtp.com.net',
            'smtp_port'   =>   '2525',
            'smtp_protocol'  =>'ssl',
            'smtp_login'     =>'laravel@laravel.com',
            'smtp_password'  =>'12345678',
        ];*/
         if(!empty($params)){
             foreach ($params as $k =>$v){
                 self::$app->setProperty($k, $v);
             }

         }
    }
}
