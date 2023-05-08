<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?=($active == 'Dashboard') ? 'collapsed' : ''?>" href="<?=base_url();?>Admin">
                <i class="bi bi-grid me-3"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link <?=($active == 'barang') ? 'collapsed' : ''?>"
                href="<?= base_url();?>Barang/data/<?=$user->cavet_id?>">
                <i class="bi bi-person me-3"></i>
                <span>Data Barang</span>
            </a>
        </li><!-- End Tables Nav -->

        <li class="nav-heading">Pelanggan</li>

        <li class="nav-item">
            <a class="nav-link <?=($active == 'pesan') ? 'collapsed' : ''?>" href="<?=base_url();?>Admin/pesanan">
                <i class="bi bi-question-circle me-3"></i>
                <span>Data Pemesanan</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url();?>Auth/logout">
                <i class="bi bi-box-arrow-left me-3"></i>
                <span>Logout</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

    </ul>

</aside>