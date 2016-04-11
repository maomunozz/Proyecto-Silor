<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Status */

$this->title = 'Crear nuevo estado';
$this->params['breadcrumbs'][] = ['label' => 'Estados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
