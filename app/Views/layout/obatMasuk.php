<?= $this->extend('layout/home'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-800">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Obat</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Expire</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama Obat</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Expire</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?= $i = 1; ?>
                        <?php foreach ($obat as $o) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $o['nama']; ?></td>
                                <td><?= $o['jenis']; ?></td>
                                <td><?= $o['jumlah']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
            <div class="my-2"></div>
            <a href="<?= base_url(); ?>/pages/upload" class="btn btn-success">

                <i class="icon text-white-50"></i>

                <span class="text">Upload Data</span>
            </a>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>
<!-- End of Main Content -->