<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
?>

<?php $form = ActiveForm::begin(['enableClientValidation' => false]);?>

<?= $form->field($model,'province')->dropDownList($list,
    [
    ]) ?> 
<?php ActiveForm::end();?>
