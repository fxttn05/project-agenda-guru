

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
                <input type="text" name="namaguru" value="<?php echo e($data->guru); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                <input type="text" name="nikguru" value="<?php echo e($data->nik); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                <select class="form-select" name="mapel_id">
                    <option selected>Ubah Mata pelajaran</option>
                    <?php $__currentLoopData = $datamapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->mapel); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input list="browsers" name="user_id"  class="form-control" id="exampleInputEmail1">
                    <?php $__currentLoopData = $datauser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <datalist id="browsers">
                          <option value="<?php echo e($data->id); ?>"><?php echo e($data->email); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__errorArgs = ['user_id'];
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