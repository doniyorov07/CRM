<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Student */

$this->title = 'Xodim Qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Ortga', 'url' => ['index']];

?>
<?= \common\widgets\Alert::widget()?>
<div class="worker-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
