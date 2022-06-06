

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center ">
    <div class="card col-12 mt-3 rounded-3 responsive">
      <div class="card-body overflow-auto">
        <h2>Agenda Sekolah</h2>
        <a href="/tambahagenda" type="button" class="btn btn-success">Tambah Data</a>
        <table class="table mt-3 mb-3 ">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Guru</th>
                <th scope="col">MaPel</th>
                <th scope="col">Materi</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <th scope="col">Kelas</th>
                <th scope="col">Mode</th>
                <th scope="col">Link</th>
                <th scope="col">Foto</th>
                <th scope="col">Abs</th>
                <th scope="col">Keterangan</th>
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
                <td><?php echo e($row->mapel); ?></td>
                <td><?php echo e($row->materi); ?></td>
                <td><?php echo e($row->jammulai); ?></td>
                <td><?php echo e($row->jamselesai); ?></td>
                <td><?php echo e($row->kelasagenda->kelas); ?></td>
                <td><?php echo e($row->modebelajar); ?></td>
                <td><?php echo e($row->link); ?></td>
                <td>
                  <a href="<?php echo e(asset ('foto/'.$row->foto)); ?>" target="blank" rel=" noopener noreferer">Lihat Gambar</a>
                </td>
                <td><?php echo e($row->absensiswa); ?></td>
                <td><?php echo e($row->keterangan); ?></td>
                <td class="">
                  <form action="/deleteagenda/<?php echo e($row->id_agenda); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" style="background: transparent; border: none;"><img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/16/undefined/external-bin-mother-earth-day-vitaliy-gorbachev-fill-vitaly-gorbachev-1.png"/></button>
                  </form>
                  <a href="/editagenda/<?php echo e($row->id_agenda); ?>" type="button" class="ms-1"><img src="https://img.icons8.com/material-sharp/16/undefined/edit--v2.png"/></a>
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
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\project-agenda-guru\resources\views/agenda.blade.php ENDPATH**/ ?>