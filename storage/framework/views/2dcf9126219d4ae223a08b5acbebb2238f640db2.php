

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="card col-11 mt-3 rounded-3">
      <div class="card-body">
        <h2>Data Guru</h2>
        <a href="/tambahguru" type="button" class="btn btn-success">Tambah Data</a>
        <table class="table mt-3 mb-3">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Guru</th>
                <th scope="col">NIK Guru</th>
                <th scope="col">MaPel</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              ?>
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <th scope="row"><?php echo e($index + $data->firstItem()); ?></th>
                <td><?php echo e($row->guru); ?></td>
                <td><?php echo e($row->nik); ?></td>
                <td><?php echo e($row->mapelguru->mapel); ?></td>
                <td><?php echo e($row->userguru->email); ?></td>
                <td><?php echo e($row->userguru->password); ?></td>
                <td class="d-flex">
                  <form action="/deleteguru/<?php echo e($row->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-danger me-2">Delete</button>
                    </form>
                  <a href="/editguru/<?php echo e($row->id); ?>" type="button" class="btn btn-primary">Edit</a>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          <?php echo e($data->links()); ?>

      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\project-agenda-guru\resources\views/guru.blade.php ENDPATH**/ ?>