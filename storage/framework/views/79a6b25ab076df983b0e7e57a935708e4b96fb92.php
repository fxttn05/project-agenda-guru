

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="card col-9 mt-3 rounded-3">
      <div class="card-body">
        <h2>Data Kelas</h2>
        <a href="/tambahkelas" type="button" class="btn btn-success">Tambah Data</a>
        <table class="table mt-3 mb-3">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kelas</th>
                <th scope="col">Wali Kelas</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              ?>
              <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <th scope="row"><?php echo e($index + $datas->firstItem()); ?></th>
                <td><?php echo e($row->kelas); ?></td>
                <td><?php echo e($row->guru); ?></td>
                <td class="d-flex">
                  <form action="/deletekelas/<?php echo e($row->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-danger me-2">Delete</button>
                    </form>
                  <a href="/editkelas/<?php echo e($row->id); ?>" type="button" class="btn btn-primary">Edit</a>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          <?php echo e($datas->links()); ?>

      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\project-agenda-guru\resources\views/kelas.blade.php ENDPATH**/ ?>