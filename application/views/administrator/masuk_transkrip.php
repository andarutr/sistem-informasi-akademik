<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt"></i> Form Halaman Transkrip Nilai Mahasiswa
    </h4>

    <form action="<?= base_url('administrator/transkrip_nilai/input_transkrip_nilai_aksi') ?>" method="POST">
    	<div class="form-group">
    		<label>NIM</label>
    		<input type="text" name="nim" class="form-control" placeholder="Masukkan NIM Mahasiswa">
            <?= form_error('nim','<p class="text-danger">','</p>') ?>
    	</div>
    	<button type="submit" class="btn btn-primary">Proses</button>
    </form>
</div>