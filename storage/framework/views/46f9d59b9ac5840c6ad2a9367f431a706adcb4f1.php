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
                                <h4 class="m-0">Matching Task </h4>
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
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <form method="post" action="#" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="task_id">Task</label>
                                        <select class="form-control mb-1" name="task_id" id="task_id">
                                            <?php $__currentLoopData = $data['tasks']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($task['task_id']); ?>"
                                                        data-taskexp="<?php echo e($task['task_exp']); ?>"><?php echo e($task['task_name']); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <hr/>
                                    <div class="row mb-2">
                                        <div class="col-md-12 col-12 d-flex justify-content-between align-items-center">
                                            <label class="m-0">Skill</label>
                                            <button onclick="addSkill(); return false;" class="btn btn-primary btn-sm">
                                                <i class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div id="skill-select-group">
                                        <div class="row">
                                            <div
                                                class="col-md-11 col-11 d-flex pr-0 justify-content-between align-items-center">
                                                <select class="form-control mb-1 skill_select" name="skill[]"
                                                        id="skill">
                                                    <?php $__currentLoopData = $data['skills']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option
                                                            value="<?php echo e($skill['skill_id']); ?>"><?php echo e($skill['skill_name']); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="col-md-1 col-1 text-right">
                                                <button onclick="removeSkill(this); return false;"
                                                        class="btn btn-danger rounded-circle">
                                                    <i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>


                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <label>Result search</label>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="table-responsive">
                                                <table class="table table-borderless" id="task-table">
                                                    <thead>
                                                    <tr>
                                                        <th>QA name</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>John Doe</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jane Doe</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Foo Bar</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bar Foo</td>
                                                    </tr>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-sm-10">
                                            <button type="button" class="btn btn-primary"
                                                    onclick="fetchUserFromCriteria(); return false;">Submit
                                            </button>
                                            <a class="btn btn-danger" href="<?php echo e(URL::to("matching_task")); ?>"><i></i>
                                                Cancel
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


<?php $__env->startSection('script'); ?>

    <script>


        $(document).ready(function () {

        });


        function addSkill() {
            var elemt = '';
            elemt += ` <div class="row">
                            <div class="col-md-11 col-11 d-flex pr-0 justify-content-between align-items-center">
                                <select class="form-control mb-1 skill_select" name="skill[]" id="skill">
                                    <option value="" disabled selected>-- Choose skill for match task --
                                    </option>
                                    <option value="">Front-End Skill</option>
                                    <option value="">Back-End Skill</option>
                                    <option value="">Network</option>
                                    <option value="">Server</option>
                                    <option value="">Hosting Website</option>
                                </select>
                            </div>
                            <div class="col-md-1 col-1 text-right">
                                <button onclick="removeSkill(this); return false;" class="btn btn-danger rounded-circle">
                                    <i class="fas fa-times"></i></button>
                            </div>
                        </div>`;
            $('#skill-select-group').append(elemt);
        }


        function removeSkill(obj) {
            $(obj).parent().parent().remove()
        }


        const fetchUserFromCriteria = () => {
            let formData = new FormData();
            formData.append('task_id', $('#task_id').val());
            $('#task_id').each(function () {
                if ($(this).is(':selected')) {
                    formData.append('task_exp', this.dataset.taskexp);
                }
            });
            let skillDOM = document.getElementsByClassName('skill_select');
            [...skillDOM].map((item, index) => {
                formData.append('skill[]', item.value);
            });
            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
            $.ajax({
                url: "/matching_task/getQaByCriteria",
                type: "POST",
                processData: false,
                contentType: false,
                data: formData,
                success: function (response) {
                    console.log(response);
                    // if(response) {
                    //     $('.success').text(response.success);
                    //     $("#ajaxform")[0].reset();
                    // }
                },
            });


            // const response = await fetch("/matching_task/getQaByCriteria", {
            //     method: 'POST', // *GET, POST, PUT, DELETE, etc.
            //     mode: 'cors', // no-cors, *cors, same-origin
            //     cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            //     headers: {
            //         'X-CSSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         // 'Content-Type': 'application/json'
            //         // 'Content-Type': 'application/x-www-form-urlencoded',
            //     },
            //     body: formData // body data type must match "Content-Type" header
            // });
            // const data = response.json(); // parses JSON response into native JavaScript objects
        }

    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qa\resources\views/matching_task/add.blade.php ENDPATH**/ ?>