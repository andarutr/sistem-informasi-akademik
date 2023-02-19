<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt"></i> Update Data Prodi
    </h4>

    <?php foreach($prodi as $prd) : ?>
    <form action="<?= base_url('administrator/prodi/update_aksi') ?>" method="POST">
    	<div class="form-group">
    		<label>Kode Jurusan</label>
    		<input type="hidden" name="id_prodi" value="<?= $prd->id_prodi ?>">
    		<input type="text" name="kode_prodi" class="form-control" value="<?= $prd->kode_prodi ?>">
    	</div>
        <div class="form-group">
            <label>Nama Prodi</label>
            <input type="text" name="nama_prodi" class="form-control" value="<?= $prd->nama_prodi ?>">
        </div>
    	<div class="form-group">
    		<label>Nama Jurusan</label>
    		<select class="form-control" name="nama_jurusan">
                <option value="<?= $prd->nama_jurusan ?>"><?= $prd->nama_jurusan ?></option> 

                <?php foreach($jurusan as $jrs) : ?>
                    <option value="<?= $jrs->nama_jurusan ?>"><?= $jrs->nama_jurusan ?></option> 
                <?php endforeach; ?>     
            </select>
    	</div>
    	<button type="submit" class="btn btn-success">Update</button>
    </form>
    <?php endforeach; ?>
</div>