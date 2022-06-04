

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3">
        <div class="card-body">
            <h1 class="fw-bolder">Edit Guru</h1>
            <form method="POST" action="/updateguru/<?php echo e($data->id); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                <input type="text" name="namaguru" value="<?php echo e($data->namaguru); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <?php $__errorArgs = ['namaguru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIK Guru</label>
                <input type="text" name="nikguru" value="<?php echo e($data->nikguru); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <?php $__errorArgs = ['nikguru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                <select class="form-select" name="mapel">
                  <option selected><?php echo e($data->mapel); ?></option>
                  <option value="1">RPL</option>
                  <option value="2">MM</option>
                  <option value="2">TKJ</option>
                  <option value="2">BC</option>
                </select>
              </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="name" value="<?php echo e($data->name); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" name="email" value="<?php echo e($data->email); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="text" name="password" value="<?php echo e($data->password); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\project-agenda-guru\resources\views/editdataguru.blade.php ENDPATH**/ ?>