<?php

use common\models\Group;
use common\models\StudentGroup;
use yii\helpers\Html;
use yii\bootstrap5\Modal;
/** @var Group $model */
/** @var StudentGroup[] $groupStudents */

$groupStudents = $model->groupStudents;

?>
<?php
Modal::begin([
'id' => 'myModal',
'toggleButton' => ['label' => 'click me'],
]);?>
<section class="content">
<div id="pay" class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <b>
                        <?php foreach ($groupStudents as $groupStudent): ?>
                            <?= $groupStudent->group->name; ?>
                        <?php endforeach; ?>
                        </b>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Gurux nomi</th>
                            <th>Kurs narxi</th>
                            <th>To'lov holati</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                       <?php foreach ($groupStudents as $groupStudent): ?>
                            <tr>
                                <td>
                                     <?= $groupStudent->student->ism; ?>
                                    &nbsp;
                                    <?= $groupStudent->student->familiya; ?>
                                </td>
                                <td>
                                    <?= $groupStudent->course_amount; ?>
                                </td>
                                <td>

                                </td>
                                <th>  <?= Html::a('To\'lash', ['payment', 'id' => $groupStudent->student_id], [
                                        'class' => 'btn btn-info', 'id' => 'payments',
                                    ]) ?></th>
                            </tr>
                       <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<?php
Modal::end();
?>

