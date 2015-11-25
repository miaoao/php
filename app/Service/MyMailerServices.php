<?php
/**
 * Created by PhpStorm.
 * User: miao
 * Date: 2015/11/17
 * Time: 15:50
 */
namespace App\Service;
use App\Contracts\Mailer;
class MyMailerServices implements Mailer{
    function send($append){
       dd("send mail".$append);
    }
    function receive($append){
        dd("receive mail".$append);
    }
    function test(){
        dd("test test");
    }
}