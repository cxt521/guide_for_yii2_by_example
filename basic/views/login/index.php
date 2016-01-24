<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<ul>
<?php foreach ($users as $usr): ?>
    <li>
        <?= Html::encode("{$usr->name} ({$usr->code})") ?>:
    </li>
<?php endforeach; ?>
</ul>
