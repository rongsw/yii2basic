<?php
/**
 * Created by PhpStorm.
 * User: rongshuwu
 * Date: 2018/5/5
 * Time: 13:59
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Countries</h1>
<ul>
    <?php foreach ($countries as $country): ?>
        <li>
            <?= Html::encode("{$country->name} ({$country->code})") ?>:
            <?= $country->population ?>
        </li>
    <?php endforeach; ?>
</ul>

123
<?= LinkPager::widget(['pagination' => $pagination]) ?>