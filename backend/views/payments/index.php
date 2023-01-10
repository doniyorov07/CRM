<?php
use yii\helpers\Html;
use common\widgets\Alert;
/* @var $this yii\web\View */
/* @var $searchModel common\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/** @var common\models\Payments[] $model */

$this->title = 'To\'lovlar';

?>
<?php
echo \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]);
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> Barcha guruhlar ro'yxati </h3>
                        <div class="d-flex justify-content-end">
                            <button onclick="ExportToExcel('xlsx')"><i class="fas fa-file-excel"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Gurux nomi</th>
                                <th>Kurs narxi</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($model as $group):?>
                            <tr>
                                <td>
                                    <?= $group->name ?>
                                </td>
                                <td>
                                   <?= $group->course_amount ?>
                                </td>
                                <th>  <?= Html::a('<i class="fa fa-eye" aria-hidden="true"></i>', ['view', 'id' => $group->id], [
                                        'class' => 'btn btn-info',
                                    ]) ?></th>
                            </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script>
    function ExportToExcel(type, fn, dl) {
        var elt = document.getElementById('example');
        var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
        return dl ?
            XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
            XLSX.writeFile(wb, fn || ('table.' + (type || 'xlsx')));
    }
</script>

