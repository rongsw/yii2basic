<?php
/**
 * Created by PhpStorm.
 * User: rongshuwu
 * Date: 2018/5/5
 * Time: 10:09
 */
use yii\helpers\Html;
?>

<p>You have entered the following information:</p>
<ul>
    <li><label>Name</label>: <?= Html::encode($model->name)?> </li>
    <li><label>Email</label>: <?= Html::encode($model->email)?> </li>
</ul>
