<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tabel Pemesanan</h5>
                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Barang</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Pemesan</th>
                                <th scope="col">Sistem</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Meja</th>
                                <th scope="col">Metode Bayar</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $this->db->where('kategori_barang', $user->cavet_id);
                            $pesan = $this->db->get('pesanan')->result();
                            ?>
                            <?php foreach($pesan as $row): ?>
                            <tr>
                                <td><?=$row->id_pesanan?></td>
                                <td><?=$row->username?></td>
                                <td><?=$row->nama_barang?></td>
                                <td><?=$row->harga?></td>
                                <td><?=$row->kategori_barang?></td>
                                <td><?=$row->nama_pemesan?></td>
                                <td><?=$row->sistem?></td>
                                <td><?=$row->jumlah?></td>
                                <td><?=$row->meja?></td>
                                <td><?=$row->metode_bayar?></td>
                                <td>
                                    <a href="<?= base_url();?>Admin/pesanan_detail/<?=$row->id_pesanan?>" type="button"
                                        class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="<?= base_url();?>Barang/hapus/<?=$row->id_pesanan?>" type="button"
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