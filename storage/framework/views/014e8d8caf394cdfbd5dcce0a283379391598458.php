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
                        <div class="card-body d-flex">
                            <h4>Add task</h4>
                        </div>
                    </div>

                    <?php if($errors->all()): ?>
                        <div class="card alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo e($error); ?>

                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">

                           
                            <?php echo method_field('PUT'); ?>
                            <form method="post" action="/tasks/create" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <label for="task_name" class="col-sm-2 col-form-label">Task name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="task_name" id="task_name" placeholder="Enter project name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="task_desc" class="col-sm-2">Task description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="task_desc" id="task_desc" rows="5" placeholder="Enter project description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="task_start_date" class="col-sm-2 col-form-label">Task start at</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="task_start_date" id="task_start_date" placeholder="Choose start date" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="task_end_date" class="col-sm-2 col-form-label">Task end at</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="task_end_date" id="task_end_date" placeholder="Choose end date" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">บันทึก</button>
                                        <a class="btn btn-danger" href="<?php echo e(URL::to("tasks")); ?>"><i></i>
                                            ยกเลิก
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<!-- END: Content-->




<?php echo $__env->make('layouts.app_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qa\resources\views/tasks/add.blade.php ENDPATH**/ ?>