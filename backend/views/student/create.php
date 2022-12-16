<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Student */

$this->title = 'Talaba Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Ortga', 'url' => ['index']];

?>
<div class="student-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
