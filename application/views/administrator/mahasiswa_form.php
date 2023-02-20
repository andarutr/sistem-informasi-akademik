<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt"></i> Tambah Data Mahasiswa
    </h4>

    <?= form_open_multipart('administrator/mahasiswa/tambah_mahasiswa_aksi') ?>
    <div class="form-group">
    	<label>NIM Mahasiswa</label>
    	<input type="text" name="nim" class="form-control">
    	<?= form_error('nim', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Nama Mahasiswa</label>
    	<input type="text" name="nama_lengkap" class="form-control">
    	<?= form_error('nama_lengkap', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Alamat</label>
    	<input type="text" name="alamat" class="form-control">
    	<?= form_error('alamat', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Email</label>
    	<input type="text" name="email" class="form-control">
    	<?= form_error('email', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Telepon</label>
    	<input type="text" name="telepon" class="form-control">
    	<?= form_error('telepon', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Tempat Lahir</label>
    	<input type="text" name="tempat_lahir" class="form-control">
    	<?= form_error('tempat_lahir', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Tanggal Lahir</label>
    	<input type="text" name="tanggal_lahir" class="form-control">
    	<?= form_error('tanggal_lahir', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Jenis Kelamin</label>
    	<select class="form-control" name="jenis_kelamin">
    		<option value="">Pilih</option>
    		<option>Laki-laki</option>
    		<option>Perempuan</option>
    	</select>
    	<?= form_error('jenis_kelamin', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Program Studi</label>
    	<select class="form-control" name="nama_prodi">
    		<option value="">Pilih</option>
    		<?php foreach($prodi as $prd) : ?>
    		<option value="<?= $prd->nama_prodi ?>"><?= $prd->nama_prodi ?></option>
    		<?php endforeach; ?>
    	</select>
    	<?= form_error('nama_prodi', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Foto</label>
    	<input type="file" name="photo">
    </div>
    <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    <?= form_close() ?>
</div>