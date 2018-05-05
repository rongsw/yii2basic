<?php
/**
 * Created by PhpStorm.
 * User: rongshuwu
 * Date: 2018/5/5
 * Time: 10:09
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin();?>

    <?= $form->field($model, 'name')->label('自定义 name')?>
    <?= $form->field($model, 'email')->label('自定义 email')?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php $form = ActiveForm::end();?>

