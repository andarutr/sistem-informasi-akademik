<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt"></i> Update Data Mahasiswa
    </h4>

    <?php foreach($mahasiswa as $mhs) : ?>
    <?= form_open_multipart('administrator/mahasiswa/update_mahasiswa_aksi') ?>
    <div class="form-group">
    	<label>NIM Mahasiswa</label>
    	<input type="hidden" name="id" value="<?= $mhs->id ?>">
        <input type="text" name="nim" class="form-control" value="<?= $mhs->nim ?>">
    	<?= form_error('nim', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Nama Mahasiswa</label>
    	<input type="text" name="nama_lengkap" class="form-control" value="<?= $mhs->nama_lengkap ?>">
    	<?= form_error('nama_lengkap', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Alamat</label>
    	<input type="text" name="alamat" class="form-control" value="<?= $mhs->alamat ?>">
    	<?= form_error('alamat', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Email</label>
    	<input type="text" name="email" class="form-control" value="<?= $mhs->email ?>">
    	<?= form_error('email', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Telepon</label>
    	<input type="text" name="telepon" class="form-control" value="<?= $mhs->telepon ?>">
    	<?= form_error('telepon', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Tempat Lahir</label>
    	<input type="text" name="tempat_lahir" class="form-control" value="<?= $mhs->tempat_lahir ?>">
    	<?= form_error('tempat_lahir', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Tanggal Lahir</label>
    	<input type="text" name="tanggal_lahir" class="form-control" value="<?= $mhs->tanggal_lahir ?>">
    	<?= form_error('tanggal_lahir', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Jenis Kelamin</label>
    	<select class="form-control" name="jenis_kelamin" value="<?= $mhs->jenis_kelamin ?>">
    		<option>Laki-laki</option>
    		<option>Perempuan</option>
    	</select>
    	<?= form_error('jenis_kelamin', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
    	<label>Program Studi</label>
    	<select class="form-control" name="nama_prodi" value="<?= $mhs->nama_prodi ?>">
    		<?php foreach($prodi as $prd) : ?>
    		<option value="<?= $prd->nama_prodi ?>"><?= $prd->nama_prodi ?></option>
    		<?php endforeach; ?>
    	</select>
    	<?= form_error('nama_prodi', '<p class="text-danger ml-3">','</p>') ?>
    </div>
    <div class="form-group">
        <?php foreach($detail as $dt) : ?>
        <img src="<?= base_url('assets/uploads/').$mhs->photo ?>" width="450">
        <?php endforeach; ?><br>
    	<label>Foto</label>
    	<input type="file" name="userfile" value="<?= $mhs->photo ?>">
    </div>
    <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    <?= form_close() ?>
    <?php endforeach; ?>
</div>