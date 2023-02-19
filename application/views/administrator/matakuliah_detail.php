<div class="container-fluid">
    <h4>
        <i class="fas fa-tachometer-alt mb-3"></i> Detail Mata Kuliah
    </h4>

    <table class="table table-bordered table-striped table-hover">
        <?php foreach($detail as $dt) : ?>
        <tr>
            <th>Kode Matakuliah</th>
            <th><?= $dt->kode_matakuliah ?></th>
        </tr>
        <tr>
            <th>Nama Matakuliah</th>
            <th><?= $dt->nama_matakuliah ?></th>
        </tr>
        <tr>
            <th>SKS</th>
            <th><?= $dt->sks ?></th>
        </tr>
        <tr>
            <th>Semester</th>
            <th><?= $dt->semester ?></th>
        </tr>
        <tr>
            <th>Program Studi</th>
            <th><?= $dt->nama_prodi ?></th>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?= base_url('administrator/matakuliah') ?>" class="btn btn-sm btn-primary">Kembali</a>
</div>