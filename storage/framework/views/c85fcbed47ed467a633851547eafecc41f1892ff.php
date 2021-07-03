

<?php $__env->startSection('content'); ?>
    <form action="" method="POST" enctype="multipart/form-data">
         
        <div class="form-group">
            <label for="namapaket">Nama Paket</label>
            <input type="text" name="namapaket">
        </div>

        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto">
        </div>
       
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" cols="30" rows="10"></textarea>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BELAJAR WEB\LARAVEL NEW\laravel-crud\resources\views/paket/create.blade.php ENDPATH**/ ?>