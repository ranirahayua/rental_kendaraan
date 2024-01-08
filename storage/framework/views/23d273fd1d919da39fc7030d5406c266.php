

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <form action="<?php echo e(route('kendaraan.update', $kendaraan->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label class="form-label">Cabang</label>
                <select name="cabang" class="form-control">
                    <option value="" selected disabled>Pilih...</option>
                    <?php $__currentLoopData = $cabang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($data->id); ?>" <?php echo e(old('cabang_id', $kendaraan->cabang_id) == $data->id ? 'selected' :
                        ''); ?>><?php echo e($data->nama_cabang); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Merek</label>
                <input name="merek" class="form-control" placeholder="Masukan merek kendaraan"
                    value="<?php echo e(old('merek', $kendaraan->merek)); ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Model</label>
                <input name="model" class="form-control" placeholder="Masukan model kendaraan"
                    value="<?php echo e(old('model', $kendaraan->model)); ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Tahun Produksi</label>
                <input type="number" name="tahun_produksi" value="<?php echo e(old('tahun_produksi', $kendaraan->tahun_produksi)); ?>"
                    min="1900" max="2023" step="1" placeholder="Masukan tahun produksi kendaraan" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Plat</label>
                <input name="nomor_plat" class="form-control" placeholder="Masukan nomor plat kendaraan"
                    value="<?php echo e(old('nomor_plat', $kendaraan->nomor_plat)); ?>">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Foto Kendaraan</label>
                        <input name="image" type="file" class="form-control" accept="image/*"
                            onchange="previewImage(event)">
                    </div>
                </div>
                <div class="col-md-6 row justify-content-center">
                    <img id="preview" src="<?php echo e(asset('assets/images/kendaraan/'.$kendaraan->image)); ?>" alt="Preview Gambar"
                        class="img-fluid">
                </div>
            </div>
            <a href="<?php echo e(route('kendaraan.index')); ?>" class="btn btn-danger py-8 fs-4 mb-4 rounded-2">Batal</a>
            <button type="submit" class="btn btn-success py-8 fs-4 mb-4 rounded-2">Simpan</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rental-kendaraan\resources\views/admin/kendaraan/edit.blade.php ENDPATH**/ ?>