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
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th>Menu name</th>
                                        <th>Icon</th>
                                        <th>Class name</th>
                                        <th>Operator</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($result_menu)): ?>
                                    <?php $__currentLoopData = $result_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($data_menu['sys_menu_name']); ?></td>
                                        <td><i class="<?php echo e($data_menu['sys_menu_icon']); ?>"></td>
                                        <td><?php echo e($data_menu['sys_menu_class_name']); ?></td>
                                        <td>
                                            <button class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></button>
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <tr>
                                        <td colspan="4">No data!</td>
                                    </tr>
                                    <?php endif; ?>
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




<?php echo $__env->make('layouts.app_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qa\resources\views/menus/index.blade.php ENDPATH**/ ?>