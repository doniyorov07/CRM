<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Student */


$this->params['breadcrumbs'][] = ['label' => 'Ortga', 'url' => ['index']];
$this->title = "Xodim ma'lumotlari"

?>
<?= \common\widgets\Alert::widget()?>
<div class="worker-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
