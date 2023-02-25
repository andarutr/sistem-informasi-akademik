<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt"></i> Input Nilai
    </h4>

    <form action="<?= base_url('administrator/nilai/input_nilai_aksi') ?>" method="POST">
    	<div class="form-group">
    		<label>TAHUN AKADEMIK (SEMESTER)</label>
    		<?php 
    		$query = $this->db->query('SELECT id_thn_akad, semester, CONCAT (tahun_akademik, "/") as ta_semester FROM tahun_akademik');
    		$dropdowns = $query->result();

    		foreach($dropdowns as $dropdown){
    			if($dropdown->semester == 1){
    				$tampilSemester = 'Ganjil';
    			}else{
    				$tampilSemester = 'Genap';
    			}

    			$dropdownList[$dropdown->id_thn_akad] = $dropdown->ta_semester." ".$tampilSemester;
    		}

    		echo form_dropdown('id_thn_akad', $dropdownList,'','class="form-control"')
    		?>
    	</div>
    	<div class="form-group">
    		<label>KODE MATA KULIAH</label>
    		<input type="text" name="kode_matakuliah" class="form-control" placeholder="Kode mata kuliah">
    	</div>
    	<button type="submit" class="btn btn-primary">Proses</button>
    </form> 
</div>