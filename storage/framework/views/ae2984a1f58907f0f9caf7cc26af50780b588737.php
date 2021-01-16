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
                            <h4 class="m-0">Skill ส่วนในการเพิ่มข้อมูลทักษะของ QA</h4>
                            <a type="button" href="<?php echo e(url('/skills/add')); ?>" class="btn btn-primary ml-auto"><i
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
                                <table class="table table-borderless" id="project-table">
                                    <thead>
                                    <tr>
                                        <th>Skills name</th>
                                        <th>Skills description</th>
                                        <!-- <th>Start date - End date</th> -->
                                        <th>Operator</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($result_skills)): ?>
                                    <?php $__currentLoopData = $result_skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data_project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><span
                                                class="d-block td-text-oneline"><?php echo e($data_project['skill_name']); ?></span>
                                        </td>
                                        <td><span
                                                class="d-block td-text-oneline"><?php echo e($data_project['skill_desc']); ?></span>
                                        </td>
                                        <td>
                                            <a type="button"
                                               href="<?php echo e(url('/skills/edit/'.$data_project['skill_id'])); ?>"
                                               class="btn btn-sm btn-primary ml-auto">
                                               <i class="fas fa-pencil-alt"></i>
                                            </a>

                                            <a type="button"
                                               href="<?php echo e(url('/skills/destroy/'.$data_project['skill_id'])); ?>"
                                               class="btn btn-sm btn-danger">
                                               <i class="fas fa-trash"></i>
                                            </a>
                                            
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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


<?php $__env->startSection('script'); ?>

<script>

    $(document).ready(function () {
        $('#project-table').DataTable({
        });
    });

</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qa\resources\views/skills/index.blade.php ENDPATH**/ ?>