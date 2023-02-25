<div class="container-fluid">
	<center>
		<p><strong>TRANSKRIP NILAI</strong></p>

		<table>
			<tr>
				<td>NIM</td>
				<td>: <?= $nim ?></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td>: <?= $nama ?></td>
			</tr>
			<tr>
				<td>PROGRAM STUDI</td>
				<td>: <?= $prodi ?></td>
			</tr>
		</table>
	</center>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>KODE MATA KULIAH</th>
			<th>NAMA MATA KULIAH</th>
			<th>SKS</th>
			<th>NILAI</th>
			<th>SKOR</th>
		</tr>

		<?php 

		$no = 1;
		$JSks = 0;
		$JSkor = 0;

		foreach($transkrip as $tr) :
		?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $tr->kode_matakuliah ?></td>
			<td><?= $tr->nama_matakuliah ?></td>
			<td><?= $tr->sks ?></td>
			<td><?= $tr->nilai ?></td>
			<td><?= skorNilai($tr->nilai, $tr->sks) ?></td>
			<?php 
			$JSks+=$tr->sks;
			$JSkor+=skorNilai($tr->nilai, $tr->sks);
			?>
		</tr>
		<?php endforeach; ?>
		<tr>
			<td colspan="3">Jumlah</td>
			<td><?= $JSks ?></td>
			<td><?= $JSkor ?></td>
		</tr>
	</table>
	<p>Indeks Prestasi Kumulatif : <?= number_format($JSkor/$JSks, 2) ?></p>
</div>