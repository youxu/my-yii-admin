<?php
/**
 * Created by PhpStorm.
 * User: youxu
 * Date: 2018/2/24
 * Time: 下午4:54
 */
namespace backend\components\event;
use yii\base\Event;

class MailEvent extends Event{
    public $email;
    public $subject;
    public $content;
}