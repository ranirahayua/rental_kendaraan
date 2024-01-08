

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <a href="<?php echo e(route('cabang.create')); ?>" class="btn btn-primary py-8 fs-4 mb-4 rounded-2">Tambah Cabang</a>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <th>No</th>
                    <th>Nama Cabang</th>
                    <th>Alamat Cabang</th>
                    <th>No Telepon Cabang</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    ?>
                    <?php $__currentLoopData = $cabang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($data->nama_cabang); ?></td>
                        <td><?php echo e($data->alamat_cabang); ?></td>
                        <td><?php echo e($data->no_telepon_cabang); ?></td>
                        <td>
                            <div class="d-flex">
                                <form action="<?php echo e(route('cabang.destroy', $data->id)); ?>" method="post">
                                    <a href="<?php echo e(route('cabang.edit', $data->id)); ?>"
                                        class="btn btn-sm btn-warning rounded-2 mx-1">Edit</a>

                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger rounded-2 mx-1">Hapus</button>
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
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rental-kendaraan\resources\views/admin/cabang/index.blade.php ENDPATH**/ ?>