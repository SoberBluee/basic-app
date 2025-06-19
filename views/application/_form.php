<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var $model app\models\Application */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="form">
    <?php $form = ActiveForm::begin(); ?>

       <?= $form->field($model, 'first_name')->textInput(); ?>

       <?= $form->field($model, 'last_name')->textInput(); ?>

       <?= $form->field($model, 'date_of_birth')->textInput(); ?>

       <?= $form->field($model, 'description')->textarea(); ?>

       <?= $form->field($model, 'income')->textInput(); ?>

       <?= $form->field($model, 'number_of_dependants')->textInput(); ?>

       <div class="form-group">
        <?= Html::submitButton(
            $model->isNewRecord ? 'Create' : 'Update',
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
        ) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

