<?php
/**
 * Created by PhpStorm.
 * User: youxu
 * Date: 2018/2/20
 * Time: 上午7:42
 */
namespace backend\components;
use Yii;

class MyBehavior extends \yii\base\ActionFilter{

    public function beforeAction($action)
    {
        var_dump(111);
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    public function sum_num(){
        return 1+1;
    }

}