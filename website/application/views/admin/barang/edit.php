<div class="card">
    <div class="card-body">
        <h5 class="card-title">Edit Data Barang</h5>
        <!-- status barang  -->


        <!-- Horizontal Form -->
        <?= form_open_multipart(base_url('Barang/edit_save')) ?>
        <input type="hidden" name="id" value="<?=$barang->id?>">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText" name="nama" value="<?=$barang->nama_barang?>"
                    required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputext3" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="inputkota" name="gambar" value="<?=$barang->gambar?>"
                    required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputDate" name="harga" value="<?=$barang->harga?>"
                    required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pilih Kategori</label>
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" id="sistem"
                name="kategori" required>
                <option selected>Pilih Kategori</option>
                <option value="<?=$user->cavet_id?>"><?=$user->cavet_id?></option>
            </select>
        </div>
        <div class="">
            <a href="<?= base_url();?>barang/data/<?=$user->cavet_id?>" class="btn btn-danger">Close</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <?= form_close() ?>
    </div>
</div>