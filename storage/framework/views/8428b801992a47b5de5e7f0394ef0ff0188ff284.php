

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3">
        <div class="card-body">
            <h1 class="fw-bolder">Edit Guru</h1>
            <form method="POST" action="/updateagenda/<?php echo e($data->id); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                <input type="text" name="namaguru" value="<?php echo e($data->namaguru); ?>" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
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
                <label for="exampleInputEmail1" class="form-label">Materi</label>
                <input type="text" name="materi" value="<?php echo e($data->materi); ?>" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <?php $__errorArgs = ['materi'];
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
            <div class="row">
                <div class="mb-3 col-5">
                    <label for="exampleInputEmail1" class="form-label">Mulai Jam pelajaran</label>
                    <select class="form-select" name="jammulai">
                        <option selected><?php echo e($data->jammulai); ?></option>
                        <option value="1">jam 1</option>
                        <option value="2">jam 2</option>
                        <option value="2">jam 3</option>
                        <option value="2">jam 4</option>
                        <option value="2">jam 5</option>
                        <option value="2">jam 6</option>
                        <option value="2">jam 7</option>
                    </select>
                </div>
                <div class="col-1">
                    <p style="text-align: center;">to</p>
                </div>
                <div class="mb-3 col-6">
                    <label for="exampleInputEmail1" class="form-label">Selesai Mata Pelajaran</label>
                    <select class="form-select" name="jamselesai">
                        <option selected><?php echo e($data->jamselesai); ?></option>
                        <option value="1">jam 2</option>
                        <option value="2">jam 3</option>
                        <option value="2">jam 4</option>
                        <option value="2">jam 5</option>
                        <option value="2">jam 6</option>
                        <option value="2">jam 7</option>
                        <option value="2">jam 8</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Absensi (Jumlah siswa tidak hadir per sesi)</label>
                <input type="number" name="absensiswa" value="<?php echo e($data->absensiswa); ?>" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <?php $__errorArgs = ['absensiswa'];
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
                <label for="exampleInputEmail1" class="form-label">Kelas</label>
                <input type="text" name="kelas" value="<?php echo e($data->kelas); ?>" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
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
                <label for="exampleInputEmail1" class="form-label">Mode Pembelajaran</label>
                <select class="form-select" name="modebelajar">
                    <option selected><?php echo e($data->modebelajar); ?></option>
                    <option value="1">online</option>
                    <option value="2">offline</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link</label>
                <input type="text" name="link" value="<?php echo e($data->link); ?>" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div class="text-danger">
                    <p>*Opsional</p>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Foto Dokumentasi</label>
                <input type="file" name="foto" value="<?php echo e($data->foto); ?>" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <?php $__errorArgs = ['foto'];
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
                <label for="exampleInputEmail1" class="form-label">keterangan</label>
                <input type="text" name="keterangan" value="<?php echo e($data->keterangan); ?>" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div class="text-danger">
                    <p>*Opsional</p>
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\project-agenda-guru\resources\views/editdataagenda.blade.php ENDPATH**/ ?>