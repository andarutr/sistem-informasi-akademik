<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt"></i> Update Data Jurusan
    </h4>

    <?php foreach($jurusan as $jrs) : ?>
    <form action="<?= base_url('administrator/jurusan/update_aksi') ?>" method="POST">
    	<div class="form-group">
    		<label>Kode Jurusan</label>
    		<input type="hidden" name="id_jurusan" value="<?= $jrs->id_jurusan ?>">
    		<input type="text" name="kode_jurusan" class="form-control" value="<?= $jrs->kode_jurusan ?>">
    	</div>
    	<div class="form-group">
    		<label>Nama Jurusan</label>
    		<input type="text" name="nama_jurusan" class="form-control" value="<?= $jrs->nama_jurusan ?>">
    	</div>
    	<button type="submit" class="btn btn-success">Update</button>
    </form>
    <?php endforeach; ?>
</div>