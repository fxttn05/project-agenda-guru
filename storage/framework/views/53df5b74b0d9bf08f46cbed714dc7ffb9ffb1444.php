

<?php $__env->startSection('content'); ?>
<!-- Content Row -->
<div class="row">

    <!-- data Mapel -->
    <div class="col-lg-4 col-md-8 mb-2">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Mapel
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo e($jumlahmapel); ?> Data</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Data Guru -->
    <div class="col-lg-4 col-md-8 mb-2">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Guru
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo e($jumlahguru); ?> Data</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data kelas -->
    <div class="col-lg-4 col-md-8 mb-2">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data kelas
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo e($jumlahkelas); ?> Data</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card bg-primary text-white shadow">
            <div class="card-body ">
                <a href="/mapel" class="text-white">Data Mapel<i class="fa fa-arrow-circle-right ms-2" aria-hidden="true"></i></a>
                
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card bg-info text-white shadow">
            <div class="card-body ">
                <a href="/guru" class="text-white">Data Guru<i class="fa fa-arrow-circle-right ms-2" aria-hidden="true"></i></a>
                
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card bg-success text-white shadow">
            <div class="card-body ">
                <a href="/kelas" class="text-white">Data Kelas<i class="fa fa-arrow-circle-right ms-2" aria-hidden="true"></i></a>
                
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-4 col-md-8 mb-2">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Agenda</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Controlled by Admin</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card bg-danger text-white shadow">
            <div class="card-body ">
                <a href="/agenda" class="text-white">Agenda<i class="fa fa-arrow-circle-right ms-2" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\applications\project-agenda-guru\resources\views/index.blade.php ENDPATH**/ ?>