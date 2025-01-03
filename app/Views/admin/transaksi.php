<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2 class="mb-5">Transaksi</h2>

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Rahmat Iqbal</td>
                <td>30 Des 2024 12.50 WIB</td>
                <td>Rp700.000</td>
                <td>
                    <span class="badge bg-success">Success</span>
                </td>
                <td>
                    <a href="<?= base_url('admin/transaksi/ubah-status')?>" class="btn btn-success btn-sm">Ubah Status</a>
                    <a href="<?= base_url('admin/transaksi/hapus')?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Ardhea</td>
                <td>31 Des 2024 14.30 WIB</td>
                <td>Rp500.000</td>
                <td>
                    <span class="badge bg-warning">Pending</span>
                </td>
                <td>
                    <a href="<?= base_url('admin/transaksi/ubah-status')?>" class="btn btn-success btn-sm">Ubah Status</a>
                    <a href="<?= base_url('admin/transaksi/hapus')?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="mb-3">
    <a href="<?= base_url('admin/transaksi/tambah') ?>" class="btn btn-dark-red">
        <i class="fas fa-plus me-2"></i>Tambah Transaksi
    </a>
</div>
           
            


<?= $this->endSection(); ?>