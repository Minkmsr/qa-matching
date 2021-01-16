<!-- BEGIN: Content-->
<?php $__env->startSection('content'); ?>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h4 class="m-0">ส่วนมอบหมายการทำงานอัตโนมัติให้ QA </h4>
                            <a type="button" href="<?php echo e(url('/matching_task/add')); ?>" class="btn btn-primary ml-auto"><i
                                    class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" id="task-table">
                                    <thead>
                                    <tr>
                                        <th>Task name</th>
                                        <th>Responsible by</th>
                                        <th>Start date - End date</th>
                                        <th>Operator</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><span class="d-block td-text-oneline">Create HTML template</span>
                                        </td>
                                        <td><span class="d-block td-text-oneline">HTML template for web developer</span>
                                        </td>
                                        <td>01/05/2563 - 31/07/2563</td>
                                        <td>
                                            <a type="button" title="Edit"
                                               href="<?php echo e(url('/matching_task/edit/1')); ?>"
                                               class="btn btn-sm btn-primary ml-auto"><i class="fas fa-pencil-alt"></i></a>
                                            <a type="button" title="More detail"
                                               href="<?php echo e(url('/matching_task/detail/1')); ?>"
                                               class="btn btn-sm btn-info ml-auto"><i class="fas fa-search"></i></a>
                                            <button class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>






















                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<!-- END: Content-->


<?php $__env->startSection('script'); ?>

<script>


    $(document).ready(function () {
        $('#task-table').DataTable({
        });
    });

</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qa\resources\views/matching_task/index.blade.php ENDPATH**/ ?>