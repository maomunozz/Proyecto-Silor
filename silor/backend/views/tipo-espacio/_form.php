<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\icons\Icon;

/* @var $this yii\web\View */
/* @var $model backend\models\TipoEspacio */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="tipo-espacio-form">

    <?php $form = ActiveForm::begin([
        'id' => 'tipo-espacio-form',
        'enableAjaxValidation' => true,
        'enableClientScript' => true,
        'enableClientValidation' => true,
        ]); ?>

    <?= $form->field($model, 'nombre_tipo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Icon::show('floppy-o').'Guardar' : Icon::show('pencil').'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

        <?php
    $this->registerJs('
    // obtener la id del formulario y establecer el manejador de eventos
        $("form#tipo-espacio-form").on("beforeSubmit", function(e) {
            var form = $(this);
            $.post(
            form.attr("action")+"&submit=true",
            form.serialize()
            )
            .done(function(result) {
                form.parent().html(result.message);
                $.pjax.reload({container:"#tipo-espacio-grid"});
            });
            return false;
        }).on("submit", function(e){
            e.preventDefault();
            e.stopImmediatePropagation();
            return false;
        });
        ');
    ?>

</div>
