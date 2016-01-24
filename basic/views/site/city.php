<?php
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
?>

<?php $form = ActiveForm::begin(['enableClientValidation' => false]);?>

<?= $form->field($model,'province')->dropDownList($model->getCityList(0),
    [
        'prompt'=>'--请选择省--',
        'onchange'=>'
            $(".form-group.field-member-area").hide();
            $.post("'.yii::$app->urlManager->createUrl('member/site').'?typeid=1&pid="+$(this).val(),function(data){
                $("select#member-city").html(data);
            });',
    ]) ?>

<?= $form->field($model, 'city')->dropDownList($model->getCityList($model->province),
    [
        'prompt'=>'--请选择市--',
        'onchange'=>'
            $(".form-group.field-member-area").show();
            $.post("'.yii::$app->urlManager->createUrl('member/site').'?typeid=2&pid="+$(this).val(),function(data){
                $("select#member-area").html(data);
            });',
    ]) ?>
<?= $form->field($model, 'area')->dropDownList($model->getCityList($model->city),['prompt'=>'--请选择区--',]) ?>
<?php ActiveForm::end();?>
