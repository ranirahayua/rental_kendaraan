

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <a href="<?php echo e(route('pengguna.create')); ?>" class="btn btn-primary py-8 fs-4 mb-4 rounded-2">Tambah Pengguna</a>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    ?>
                    <?php $__currentLoopData = $pengguna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($data->nama); ?></td>
                        <td><?php echo e($data->alamat); ?></td>
                        <td><?php echo e($data->no_telepon); ?></td>
                        <td><?php echo e($data->email); ?></td>
                        <td>
                            <?php if($data->role == 1): ?>
                            <span class="badge text-bg-success">Admin</span>
                            <?php else: ?>
                            <span class="badge text-bg-primary">User</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="d-flex">
                                <form action="<?php echo e(route('pengguna.destroy', $data->id)); ?>" method="post">
                                    <a href="<?php echo e(route('pengguna.edit', $data->id)); ?>"
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
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rental-kendaraan\resources\views/admin/pengguna/index.blade.php ENDPATH**/ ?>