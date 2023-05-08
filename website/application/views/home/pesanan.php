<div class="container my-5 pt-5">
    <h1 class="text-center">Pesanan Saya</h1>
    <p class="text-center mb-5">Makanan | <a href="<?=base_url();?>Pesanan/meja" class="text-dark text-muted">Meja</a>
    </p>
    <div class="d-flex flex-wrap justify-content-center gap-3">
        <?php foreach($data as $d) : ?>
        <div class="card p-2" style="width: 18rem;">
            <img src="<?=base_url();?>assets/dataimg/<?=$d->gambar?>" class="card-img-top" alt="..." height="250px">
            <div class="card-body">
                <h5 class="card-title"><?=$d->nama_barang?></h5>
                <p class="card-title">Kantin : <?=$d->kategori_barang?></p>
                <div class="d-flex justify-content-between">
                    <small class="text-red">Jumlah : <?=$d->jumlah?></small>
                    <small class="text-red">Harga : Rp. <?=($d->jumlah * $d->harga)?></small>
                </div>
                <p>Pemesan : <?=$d->nama_pemesan?></p>
                <div class="d-flex justify-content-between">
                    <small class=""><?=$d->sistem?></small>
                    <small class=""><?=$d->metode_bayar?></small>
                </div>
                <small>Nomor Meja : <?=$d->meja?></small> <br>
                <?php if($d->status==0) :?>
                <small class="text-red">Status : Disiapkan</small>
                <?php else : ?>
                <small class="text-success">Status : Sudah Siap</small>
                <?php endif; ?>
                <div class="d-flex justify-content-between mt-3">
                    <a href="<?=base_url();?>Pesanan/hapus/<?=$d->id_pesanan?>" class="btn btn-red">Cancel</a>
                    <?php if($d->metode_bayar == 'QRIS'): ?>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        QRIS
                    </button>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Bukti Pembayaran</h1> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url();?>Pesanan/tf" method="POST">
                            <img src="<?=base_url();?>assets/img/QRIS.jpg" alt="" width="100%">
                            <!-- <label for="exampleFormControlInput1" class="form-label mt-5">Upload Bukti Transfer</label>
                            <input type="file" class="form-control" name="tf" required>
                            <input type="hidden" class="form-control" name="id" value="<?=$d->id_pesanan?>"> -->
                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Kirim</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>