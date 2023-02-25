<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt mb-3"></i> Update Data KRS
    </h4>

    <form action="<?= base_url('administrator/krs/update_aksi') ?>" method="POST">
    	<div class="form-group">
    		<label>Tahun Akademik</label>
    		<input type="hidden" name="id_thn_akad" value="<?= $id_thn_akad ?>">
    		<input type="hidden" name="id_krs" value="<?= $id_krs ?>">
    		<input type="text" name="thn_akad_smt" value="<?= $thn_akad_smt.'/'.$semester; ?>" class="form-control" readonly>
    	</div>	
    	<div class="form-group">
    		<label>NIM Mahasiswa</label>
    		<input type="text" name="nim" value="<?= $nim ?>" class="form-control" readonly>
    	</div>
    	<div class="form-group">
    		<label>Mata Kuliah</label>
    		<?php 
    		$query = $this->db->query('SELECT kode_matakuliah, nama_matakuliah FROM matakuliah');

    		$dropdowns = $query->result();
    		foreach($dropdowns as $dropdown){
    			$dropdownList[$dropdown->kode_matakuliah] = $dropdown->nama_matakuliah;
    		}

    		echo form_dropdown('kode_matakuliah', $dropdownList, $kode_matakuliah, 'class="form-control" id="kode_matakuliah"');
    		 ?>
    	</div>
    	<button type="submit" class="btn btn-success">Update</button>
    	<a href="<?= base_url('administrator/krs/index') ?>" type="submit" class="btn btn-danger">Cancel</a>
    </form>
</div>