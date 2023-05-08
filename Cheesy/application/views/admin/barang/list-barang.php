<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tabel Barang</h5>
                    <a href=" <?= base_url();?>Barang/add" class="btn btn-primary mb-3"><i
                            class="bi bi-plus-lg"></i>Tambah Data</a>
                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($barang as $row): ?>
                            <tr>
                                <td><?=$row->id?></td>
                                <td><?=$row->nama_barang?></td>
                                <td> <img src="<?= base_url();?>assets\dataimg\<?=$row->gambar?>" width="50px"></td>
                                <td><?=$row->harga?></td>
                                <td><?=$row->kategori?></td>
                                <td>
                                    <a href="<?= base_url();?>Barang/edit/<?=$row->id?>" type="button"
                                        class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="<?= base_url();?>Barang/hapus/<?=$row->id?>" type="button"
                                        class="btn btn-outline-danger"><i class="bi bi-x-square-fill"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                    <!-- End Default Table Example -->
                </div>
            </div>
        </div>
    </div>
</section>