<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Application $model */

$this->title = 'Create Application';
?>

<div class="container">

    <h1><?= $this->title ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
