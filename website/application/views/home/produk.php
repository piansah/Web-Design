<!-- menu  -->
<div class="menu py-5" id="menu">
    <div class="container pt-5">
        <h5 class="text-center">Our Menu</h5>
        <h4 class="text-center">Check Our <span class="text-red">Cheesy Menu</span></h4>
        <div class="d-flex justify-content-center">
            <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Pilih Kafetaria
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url();?>Cavet/kategori/1">Kantin 1</a></li>
                <li><a class="dropdown-item" href="<?=base_url();?>Cavet/kategori/2">Kantin 2</a></li>
                <li><a class="dropdown-item" href="<?=base_url();?>Cavet/kategori/3">Kantin 3</a></li>
                <li><a class="dropdown-item" href="<?=base_url();?>Cavet/kategori/4">Kantin 4</a></li>
                <hr>
                <li><a class="dropdown-item" href="<?=base_url();?>Cavet">All Menu</a></li>
            </ul>
        </div>
        <p class="text-center">Menu</p>

        <div class="menu-items mt-5">
            <div class="d-flex flex-row justify-content-center flex-wrap">
                <?php foreach($barang as $brg) : ?>
                <div class="menu-item mb-5">
                    <div class="border-bottom border-dark border-2 px-4 mb-3" style="height: 350px;">
                        <img src="<?=base_url();?>assets/dataimg/<?=$brg->gambar?>" alt="">
                    </div>
                    <div class="d-flex justify-content-between px-3">
                        <h6 class="text-center"><?=$brg->nama_barang?></h6>
                        <p class="text-center text-red"><?=$brg->harga?></p>
                    </div>
                    <a href="<?=base_url();?>Cavet/detail_produk/<?=$brg->id?>" class="btn btn-red ms-3">Pesan
                        Sekarang</a>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
<!-- end menu  -->