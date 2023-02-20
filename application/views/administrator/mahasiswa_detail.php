<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt mb-3"></i> Detail Mahasiswa
    </h4>

    <table class="table table-bordered table-striped table-hover">
    	<?php foreach($detail as $dt) : ?>
    	<img src="<?= base_url('assets/uploads/').$dt->photo ?>" class="img-fluid mb-3" width="450">
    	<tr>
    		<td>NIM</td>
    		<td><?= $dt->nim ?></td>
    	</tr>
    	<tr>
    		<td>NAMA LENGKAP</td>
    		<td><?= $dt->nama_lengkap ?></td>
    	</tr>
    	<tr>
    		<td>ALAMAT</td>
    		<td><?= $dt->alamat ?></td>
    	</tr>
    	<tr>
    		<td>EMAIL</td>
    		<td><?= $dt->email ?></td>
    	</tr>
    	<tr>
    		<td>TELEPON</td>
    		<td><?= $dt->telepon ?></td>
    	</tr>
    	<tr>
    		<td>TEMPAT LAHIR</td>
    		<td><?= $dt->tempat_lahir ?></td>
    	</tr>
    	<tr>
    		<td>TANGGAL LAHIR</td>
    		<td><?= $dt->tanggal_lahir ?></td>
    	</tr>
    	<tr>
    		<td>JENIS KELAMIN</td>
    		<td><?= $dt->jenis_kelamin ?></td>
    	</tr>
    	<tr>
    		<td>NAMA PRODI</td>
    		<td><?= $dt->nama_prodi ?></td>
    	</tr>
    	<?php endforeach; ?>
    </table>
    <a href="<?= base_url('administrator/mahasiswa')?>" class="btn btn-primary mb-4">Kembali</a>
</div>