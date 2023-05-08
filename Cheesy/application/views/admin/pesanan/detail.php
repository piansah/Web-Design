<div class="card">
    <div class="card-body">
        <h5 class="card-title">Detail Data Barang</h5>
        <?php if($pesan->status == 0) : ?>
        <a href="<?=base_url();?>Admin/siapkirim/<?=$pesan->id_pesanan?>" type="button"
            class="btn btn-primary mb-3">Menu Siap Disajikan?</a>
        <?php elseif($pesan->status == 1) :?>
        <a href="<?=base_url();?>Admin/batalkirim/<?=$pesan->id_pesanan?>" type="button"
            class="btn btn-danger mb-3">Menu Batal Disajikan?</a>
        <?php endif ; ?>

        <!-- Horizontal Form -->
        <?= form_open_multipart(base_url()) ?>
        <input type="hidden" name="id" value="<?=$pesan->id_pesanan?>">
        <div class="row mb-3">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id" name="id" value="<?=$pesan->id_pesanan?>" required
                    disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="iduser" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="iduser" name="iduser" value="<?=$pesan->username?>" required
                    disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="namauser" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="namauser" name="namauser" value="<?=$pesan->nama_barang?>"
                    required disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nohp" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nohp" name="nohp" value="<?=$pesan->harga?>" required
                    disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Kategori Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$pesan->kategori_barang?>"
                    required disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="idbarang" class="col-sm-2 col-form-label">Sistem</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="idbarang" name="idbarang" value="<?=$pesan->sistem?>"
                    required disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="namabarang" class="col-sm-2 col-form-label">Nama Pemesan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="namabarang" name="namabarang"
                    value="<?=$pesan->nama_pemesan?>" required disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="gambar" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="gambar" name="gambar" value="<?=$pesan->jumlah?>" required
                    disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="harga" class="col-sm-2 col-form-label">Metode Bayar</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="harga" name="harga" value="<?=$pesan->metode_bayar?>"
                    required disabled>
            </div>
        </div>
        <div class="row mb-3">
            <?php if($pesan->status == 0) : ?>
            <p class="text-danger">Disiapkan</p>
            <?php else :?>
            <p class="text-success">Sudah Siap</p>
            <?php endif; ?>
        </div>
        <div class="">
            <a href="<?= base_url();?>Admin/Pesanan" class="btn btn-danger">Close</a>
        </div>
        <?= form_close() ?>
    </div>
</div>