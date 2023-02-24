<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt mb-3"></i> Form Masuk KHS
    </h4>

    <?= $this->session->flashdata('pesan') ?>
    <form action="<?= base_url('administrator/nilai/nilai_aksi') ?>" method="POST">
    	<div class="form-group">
    		<label>NIM</label>
    		<input type="text" class="form-control" name="nim" placeholder="Masukkan NIM">
    		<?= form_error('nim','<p class="text-danger">','</p>') ?>
    	</div>
    	<div class="form-group">
    		<label>Tahun Akademik / Semester</label>
    		<?php 
    		$query = $this->db->query('SELECT id_thn_akad, semester, CONCAT(tahun_akademik) AS thn_semester FROM tahun_akademik');

    		$dropdowns = $query->result();

    		foreach($dropdowns as $dropdown){
    			if($dropdown->semester == 1){
    				$tampilSemester = "Ganjil";
    			}else{
    				$tampilSemester = "Genap";
    			}
    			$dropdownList[$dropdown->id_thn_akad] = $dropdown->thn_semester. " " . $tampilSemester;    			
    		}
    		echo form_dropdown('id_thn_akad', $dropdownList, '', 'class="form-control" id="id_thn_akad"');
    		?>
    	</div>
    	<button type="submit" class="btn btn-primary">Proses</button>
    </form>
</div>