<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt mb-3"></i> Kartu Hasil Studi (KHS)
    </h4>

    <center>
    	<legend class="mt-3">
    		<strong>KARTU HASIL STUDI</strong>
    	</legend>

    	<table>
    		<tr>
    			<td><strong>NIM : </strong></td>
    			<td><?= $mhs_nim ?></td>
    		</tr>
    		<tr>
    			<td><strong>NAMA LENGKAP : </strong></td>
    			<td><?= $mhs_nama ?></td>
    		</tr>
    		<tr>
    			<td><strong>PROGRAM STUDI : </strong></td>
    			<td><?= $mhs_prodi ?></td>
    		</tr>
    		<tr>
    			<td><strong>TAHUN AKADEMIK (SEMESTER) : </strong></td>
    			<td><?= $thn_akad ?></td>
    		</tr>
    	</table>
    </center>
    
    <a href="<?= base_url('administrator/khs/print') ?>" class="btn btn-sm btn-info mb-3"><i class="fas fa-sm fa-plus"></i>Print</a>

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
        $jumlahSks = 0;
        $jumlahNilai = 0;
    	foreach($mhs_data as $row) : ?>
    	<tr>
    		<td width="20px"><?= $no++ ?></td>
    		<td><?= $row->kode_matakuliah ?></td>
    		<td><?= $row->nama_matakuliah ?></td>
            <td><?= $row->sks ?></td>
            <td><?= $row->nilai ?></td>
            <td><?= skorNilai($row->nilai, $row->sks) ?></td>
    		<?php 
            $jumlahSks+=$row->sks;
            $jumlahNilai+=skorNilai($row->nilai, $row->sks); 
             ?>
    	</tr>
    	<?php endforeach; ?>
        <tr>
            <td colspan="3">Jumlah</td>
            <td><?= $jumlahSks ?></td>
            <td><?= $jumlahNilai ?></td>
        </tr>
    </table>
    Indeks Prestasi = <?= number_format($jumlahNilai/$jumlahSks, 2) ?>
</div>