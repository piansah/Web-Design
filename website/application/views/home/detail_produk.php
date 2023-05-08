<div class="detail-produk bg-abu">
    <div class="container mt-5">
        <div class="row py-5">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <img src="<?=base_url();?>assets/dataimg/<?=$barang->gambar?>" alt="">
                    </div>
                    <div class="col">
                        <h2><?=$barang->nama_barang?></h2>
                        <h5 class="text-red">Rp. <?=$barang->harga?></h5>
                        <?= form_open_multipart(base_url('Pesanan/upload')) ?>
                        <input type="hidden" name="username" value="<?=$user->username?>">
                        <input type="hidden" name="barang" value="<?=$barang->nama_barang?>">
                        <input type="hidden" name="harga" value="<?=$barang->harga?>">
                        <input type="hidden" name="gambar" value="<?=$barang->gambar?>">
                        <input type="hidden" name="kategori" value="<?=$barang->kategori?>">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" name="nama_pemesan" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputharga" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputharga" name="jumlah" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Sistem</label>
                            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example"
                                id="sistem" name="sistem" required>
                                <option selected>Pilih Sistem</option>
                                <option value="Diantar">Diantar</option>
                                <option value="Makan Ditempat">Makan Ditempat</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Pilih Pembayaran</label>
                            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example"
                                id="sistem" name="bayar" required>
                                <option selected>Pilih Pembayaran</option>
                                <option value="QRIS">QRIS</option>
                                <option value="COD">COD</option>
                            </select>
                        </div>
                        <div class="">
                            <a href="<?= base_url();?>Cavet" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-primary" id="addSave">Pesan</button>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>