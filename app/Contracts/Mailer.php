<?php
/**
 * Created by PhpStorm.
 * User: miao
 * Date: 2015/11/17
 * Time: 15:46
 */
namespace App\Contracts;
interface Mailer{
    function  send ($append);
    function  receive($append);
}