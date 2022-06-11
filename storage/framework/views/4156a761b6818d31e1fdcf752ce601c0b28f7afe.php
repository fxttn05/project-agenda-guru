

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3">
        <div class="card-body">
            <h1 class="fw-bolder">Insert Kelas</h1>
            <form method="POST" action="<?php echo e(route('insertkelas')); ?>">
            <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kelas</label>
                    <input type="text" name="kelas"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kelas">
                    <?php $__errorArgs = ['kelas'];
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
                    <label for="exampleInputEmail1" class="form-label">Walikelas</label>
                    <select class="form-select" name="guru_id" placeholder="Wali Kelas">
                        <?php $__currentLoopData = $dataguru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->guru); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['guru'];
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
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\project-agenda-guru\resources\views/tambahkelas.blade.php ENDPATH**/ ?>