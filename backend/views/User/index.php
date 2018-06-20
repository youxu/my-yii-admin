<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加新用户', ['signup'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            ['label'=>'ID','value' => 'id','attribute' => 'id',],
            ['label'=>'用户名','value' => 'username','attribute' => 'username'],
//            'username',
//            'auth_key',
//            'password_hash',
//            'password_reset_token',
            //'role',
            'email',
            ['label'=> '状态','value'=>function ($model){
                if($model->status == 10){
                    return '正常';
                }
                return '不可用';
            }],
//            'status',

            ['label' => '创建时间' ,'format'=>'date', 'value' => 'created_at', 'attribute' => 'created_at'],
            ['label' => '创建时间' ,'format'=>'datetime', 'value' => 'updated_at'],
//            'created_at:date',
//            'updated_at:datetime',

            ['class' => 'yii\grid\ActionColumn',
                'template' => ' {update} {delete}'
                ],
        ],
    ]); ?>
</div>
