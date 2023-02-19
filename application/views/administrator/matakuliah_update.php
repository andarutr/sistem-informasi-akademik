<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt mb-3"></i> Update Mata Kuliah
    </h4>

    <?php foreach($matakuliah as $mk) : ?>
    <form action="<?= base_url('administrator/matakuliah/update_aksi') ?>" method="POST">
    	<div class="form-group">
    		<label>Nama Mata Kuliah</label>
    		<input type="hidden" name="kode_matakuliah" class="form-control" value="<?= $mk->kode_matakuliah ?>">
    		<input type="text" name="nama_matakuliah" class="form-control" value="<?= $mk->nama_matakuliah ?>">
    	</div>
    	<div class="form-group">
    		<label>SKS</label>
    		<select class="form-control" name="sks">
    			<option><?= $mk->sks ?></option>
    			<option>1</option>
    			<option>2</option>
    			<option>3</option>
    			<option>4</option>
    			<option>5</option>
    			<option>6</option>
    		</select>
    	</div>
    	<div class="form-group">
    		<label>Semester</label>
    		<select class="form-control" name="semester">
    			<option><?= $mk->semester ?></option>
    			<option>1</option>
    			<option>2</option>
    			<option>3</option>
    			<option>4</option>
    			<option>5</option>
    			<option>6</option>
    			<option>7</option>
    			<option>8</option>
    		</select>
    	</div>
    	<div class="form-group">
    		<label>Program Studi</label>
    		<select class="form-control" name="nama_prodi">
    			<option><?= $mk->nama_prodi ?></option>
    			<?php foreach($prodi as $prd) : ?>
    			<option value="<?= $prd->nama_prodi ?>"><?= $prd->nama_prodi ?></option>
    			<?php endforeach; ?>
    		</select>
    	</div>
    	<button type="submit" class="btn btn-sm btn-success">Update</button>
    </form>
    <?php endforeach; ?>
</div>