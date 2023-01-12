<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Education $model */
$this->title = "";
?>
<div class="education-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
