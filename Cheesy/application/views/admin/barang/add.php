<div class="card">
    <div class="card-body">
        <h5 class="card-title">Tambah Data Menu</h5>

        <!-- Horizontal Form -->
        <?= form_open_multipart(base_url('Barang/add_save')) ?>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="nama" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inpugambar" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="inpugambar" name="gambar" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputharga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputharga" name="harga" required>
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
            <button type="submit" class="btn btn-primary" id="addSave">Save</button>
        </div>
        <?= form_close() ?>
    </div>
</div>