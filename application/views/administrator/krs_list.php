<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt mb-3"></i> Kartu Rencana Studi (KRS)
    </h4>

    <center>
    	<legend class="mt-3">
    		<strong>KARTU RENCANA STUDI</strong>
    	</legend>

    	<table>
    		<tr>
    			<td><strong>NIM : </strong></td>
    			<td><?= $nim ?></td>
    		</tr>
    		<tr>
    			<td><strong>NAMA LENGKAP : </strong></td>
    			<td><?= $nama_lengkap ?></td>
    		</tr>
    		<tr>
    			<td><strong>PROGRAM STUDI : </strong></td>
    			<td><?= $prodi ?></td>
    		</tr>
    		<tr>
    			<td><strong>TAHUN AKADEMIK (SEMESTER) : </strong></td>
    			<td><?= $tahun_akademik.' ('.$semester.')' ?></td>
    		</tr>
    	</table>
    </center>
    
    <a href="<?= base_url('administrator/krs/tambah_krs') ?>" class="btn btn-sm btn-primary mb-3"><i class="fas fa-sm fa-plus"></i>Tambah KRS</a>
    <a href="<?= base_url('administrator/krs/print') ?>" class="btn btn-sm btn-info mb-3"><i class="fas fa-sm fa-plus"></i>Print</a>

    <table class="table table-bordered table-striped table-hover">
    	<tr>
    		<th>NO</th>
    		<th>KODE MATA KULIAH</th>
    		<th>NAMA MATA KULIAH</th>
    		<th>SKS</th>
    		<th colspan="2">AKSI</th>
    	</tr>
    	<?php 
    	$no = 1;
    	foreach($krs_data as $krs) : ?>
    	<tr>
    		<td width="20px"><?= $no++ ?></td>
    		<td><?= $krs->kode_matakuliah ?></td>
    		<td><?= $krs->nama_matakuliah ?></td>
    		<td>
    			<?= $krs->sks; $jumlahSks+=$krs->sks; ?>
    		</td>
    		<td width="20px">
    			<a href="<?= base_url('administrator/krs/update/').$krs->id_krs ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
    		</td>
    		<td width="20px">
    			<a href="<?= base_url('administrator/krs/delete/').$krs->id_krs ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
    		</td>
    	</tr>
    	<tr>
    		<td colspan="3" align="right"><strong>Jumlah SKS</strong></td>
    		<td><strong><?= $jumlahSks ?></strong></td>
    	</tr>
    	<?php endforeach; ?>
    </table>
</div>