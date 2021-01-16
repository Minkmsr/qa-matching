<!-- BEGIN: Content-->
<?php $__env->startSection('content'); ?>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <a href="<?php echo e(URL::to('dashboard')); ?>">Login</a>
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
</form>


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


<?php echo $__env->make('layouts.login_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\qa\resources\views/login/index.blade.php ENDPATH**/ ?>