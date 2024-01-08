

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Merek Kendaraan</th>
                    <th>Model Kendaraan</th>
                    <th>No Telepon Pengguna</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    ?>
                    <?php $__currentLoopData = $penyewaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($data->pengguna->nama); ?></td>
                        <td><?php echo e($data->kendaraan->merek); ?></td>
                        <td><?php echo e($data->kendaraan->model); ?></td>
                        <td><?php echo e($data->pengguna->no_telepon); ?></td>
                        <td>
                            <div class="d-flex">
                                <form action="<?php echo e(route('penyewaan.update', $data->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <input type="text" name="status" value="1" hidden>
                                    <button type="submit" class="btn btn-sm btn-success rounded-2 mx-1">Terima</button>
                                </form>
                                <form action="<?php echo e(route('penyewaan.update', $data->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <input type="text" name="status" value="0" hidden>
                                    <button type="submit" class="btn btn-sm btn-danger rounded-2 mx-1">Tolak</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rendal-kendaraan\resources\views/admin/penyewaan/index.blade.php ENDPATH**/ ?>