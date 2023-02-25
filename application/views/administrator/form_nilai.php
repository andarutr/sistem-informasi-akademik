<?php 	

$nilai = get_instance();
$nilai->load->model('matakuliah_model');
$nilai->load->model('tahunakademik_model');

?>

<div class="container-fluid">
	<?php 	

	if($list_nilai == null){
		$thn = $nilai->tahunakademik_model->get_by_id($id_thn_akad);
		$semester = $thn->semester == 1;

		if($semester == 1){
			$tampilSemester = 'Ganjil';
		}else{
			$tampilSemester = 'Genap';
		}

	?>	
	<div class="alert alert-danger">
		<p>Maaf, Kode Mata Kuliah <strong>Tidak Tersedia!</strong> di tahun ajaran <?= $thn->tahun_akademik. " (".$tampilSemester.")" ?></p>
	</div>
	<a href="<?= base_url('administrator/nilai/input_nilai') ?>" class="btn btn-primary">Kembali</a>
	<?php 
	}else{
	?>
	<center>
		<p><strong>MASUK NILAI AKHIR</strong></p>
		<table>
			<tr>
				<td>Kode Mata Kuliah</td>
				<td><?= $kode_matakuliah ?></td>
			</tr>
			<tr>
				<td>Nama Mata Kuliah</td>
				<td><?= $nilai->matakuliah_model->get_by_id($kode_matakuliah)->nama_matakuliah ?></td>
			</tr>
			<tr>
				<td>SKS</td>
				<td><?= $nilai->matakuliah_model->get_by_id($kode_matakuliah)->sks ?></td>
			</tr>
			
			<?php 

				$thn = $nilai->tahunakademik_model->get_by_id($id_thn_akad);
				$semester = $thn->semester == 1;

				if($semester == 1){
					$tampilSemester = 'Ganjil';
				}else{
					$tampilSemester = 'Genap';
				}
				
			?>
			
			<tr>
				<td>Tahun Akademik (Semester)</td>
				<td><?= $thn->tahun_akademik." (".$tampilSemester.")" ?></td>
			</tr>
		</table>
	</center>
	<form action="<?= base_url('administrator/nilai/simpan_nilai') ?>" method="POST">
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<td width="25px">NO</td>
				<td>NIM</td>
				<td>NAMA MAHASISWA</td>
				<td width="150px">NILAI</td>
			</tr>

			<?php 
			$no = 1;
			foreach($list_nilai as $row) : ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $row->nim ?></td>
				<td><?= $row->nama_lengkap ?></td>
				<input type="hidden" name="id_krs" value="<?= $row->id_krs ?>">
				<td>
					<input type="text" name="nilai[]" class="form-control" value="<?= $row->nilai ?>">
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
	<?php } ?>
</div>