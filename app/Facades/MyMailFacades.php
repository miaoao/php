<?php
/**
 * Created by PhpStorm.
 * User: miao
 * Date: 2015/11/17
 * Time: 15:57
 */
namespace App\Facades;
use Illuminate\Support\Facades\Facade;
class MyMailFacades extends Facade{
    protected static function getFacadeAccessor(){
        return 'MyMailerServices';
    }
}