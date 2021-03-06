<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Unapes */

$this->title = $model->id_unapes;
$this->params['breadcrumbs'][] = ['label' => 'Unapes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unapes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_unapes], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_unapes], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_unapes',
            'nombre',
            'detalle:ntext',
        ],
    ]) ?>

</div>
