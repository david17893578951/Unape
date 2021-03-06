<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EventosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eventos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Eventos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_evento',
             ['attribute' => 'id_unapes',
                'value' => 'idUnapes.nombre',
                'label'=>'Filiales'],
            'evento',
            'detalle:ntext',
            'fecha',
            // 'logo',
            [
                'label' => 'Logo',
                'format' => 'raw',
                'value' => function($model){
                    return Html::img(Yii::$app->request->baseUrl.'/'.$model->logo,[
                        'alt'=>'gridview',
                        'style' => 'width:100px;'
                    ]);
                },
            ],
            // 'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
