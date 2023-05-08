<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- swiper js  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- style css  -->
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
</head>

<body>
    <!-- navbar  -->
    <nav class="navbar d-xs-none d-sm-none d-md-none d-lg-block navbar-expand-lg bg-putih shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="<?=base_url();?>assets/img/logo.png" alt=""></a>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?=($active == 'beranda') ? 'active' : ''?>" aria-current="page"
                        href="<?=base_url();?>Home">Beranda</a>
                    <a class="nav-link" href="<?=base_url();?>Home/#tentang">Tentang</a>
                    <a class="nav-link <?=($active == 'cavet') ? 'active' : ''?>" href="<?=base_url();?>Cavet">Menu</a>
                    <a class="nav-link" href="<?=base_url();?>Home/#gallery">Gallery</a>
                    <a class="nav-link <?=($active == 'pesan') ? 'active' : ''?>"
                        href="<?=base_url();?>Pesanan/data/<?=$user->username?>">Pesanan</a>
                    <a class="nav-link" href="<?=base_url();?>Home/#contact">Contact</a>
                </div>
            </div>
            <div class="dropdown">
                <p class="dropdown-toggle d-flex align-items-center mt-3" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <?=$user->username?></p>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?=base_url();?>Auth/logout">Logout</a></li>
                </ul>
            </div>
        </div>
        </div>
        </div>
    </nav>
    <!-- end navbar  -->

    <div class="header d-xs-block d-sm-block d-md-block d-lg-none fixed-top bg-putih shadow-sm">
        <div class="container py-3">
            <div class="row">
                <div class="col d-flex justify-content-start">
                    <a class="navbar-brand" href="#"><img src="<?=base_url();?>assets/img/logo.png" alt=""></a>
                </div>
                <div class="col d-flex justify-content-end">
                    <div class="dropdown">
                        <p class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?=$user->username?></p>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?=base_url();?>Auth/logout">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div class="d-flex gap-3">
                        <a class="nav-link <?=($active == 'beranda') ? 'active' : ''?>" aria-current="page"
                            href="<?=base_url();?>Home">Beranda</a>
                        <a class="nav-link" href="<?=base_url();?>Home/#tentang">Tentang</a>
                        <a class="nav-link <?=($active == 'cavet') ? 'active' : ''?>"
                            href="<?=base_url();?>Cavet">Menu</a>
                        <a class="nav-link" href="<?=base_url();?>Home/#gallery">Gallery</a>
                        <a class="nav-link <?=($active == 'pesan') ? 'active' : ''?>"
                            href="<?=base_url();?>Pesanan/data/<?=$user->username?>">Pesanan</a>
                        <a class="nav-link" href="<?=base_url();?>Home/#contact">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo($body) ?>

    <div class="footer bg-footer" id="contact">
        <div class="container d-flex justify-content-center">
            <div class="row py-5 px-3">
                <div class="col">
                    <strong><i class="bi bi-geo-alt me-2 "></i>Alamat</strong>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2761929579115!2d109.25028301400832!3d-7.434659775308163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e9dd1e0a057%3A0xa853b1393f747e9e!2sKantin%20NEO%20IT%20Telkom%20Purwokerto!5e0!3m2!1sid!2sid!4v1673272476899!5m2!1sid!2sid"
                        width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="mt-4"></iframe>
                    <p class="">Jl. DI Panjaitan No.128, Karangreja,
                        Purwokerto Kidul,
                        Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53147</p>
                </div>
                <div class="col">
                    <strong><i class="bi bi-telephone me-2"></i>Reservasi</strong>
                    <p class="mt-4">
                        <strong>Telepon</strong> : +62 81230074261
                        <strong>Email</strong> : Cheesy@gmail.com
                        <strong><a href="<?=base_url();?>assets/manual_book.pdf" class="text-white"
                                download>Download Manual
                                Book</a></strong>
                    </p>
                </div>
                <div class="col">
                    <strong><i class="bi bi-clock me-2"></i>Jam Buka</strong>
                    <p class="mt-4">
                        <strong>Senin-Sabtu</strong> : 07.00 - 19.00
                        <strong>Minggu</strong> : Tutup
                    </p>
                </div>
                <div class="col">
                    <strong>Ikuti Kami</strong>
                    <div class="d-flex gap-3 mt-4">
                        <i class="bi bi-twitter"></i>
                        <i class="bi bi-linkedin"></i>
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-facebook"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <!-- swiper js  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper('.mySwiper', {
        slidesPerView: 3,
        centeredSlides: true,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    var appendNumber = 4;
    var prependNumber = 1;
    document
        .querySelector('.prepend-2-slides')
        .addEventListener('click', function(e) {
            e.preventDefault();
            swiper.prependSlide([
                '<div class="swiper-slide">Slide ' + --prependNumber + '</div>',
                '<div class="swiper-slide">Slide ' + --prependNumber + '</div>',
            ]);
        });
    document
        .querySelector('.prepend-slide')
        .addEventListener('click', function(e) {
            e.preventDefault();
            swiper.prependSlide(
                '<div class="swiper-slide">Slide ' + --prependNumber + '</div>'
            );
        });
    document
        .querySelector('.append-slide')
        .addEventListener('click', function(e) {
            e.preventDefault();
            swiper.appendSlide(
                '<div class="swiper-slide">Slide ' + ++appendNumber + '</div>'
            );
        });
    document
        .querySelector('.append-2-slides')
        .addEventListener('click', function(e) {
            e.preventDefault();
            swiper.appendSlide([
                '<div class="swiper-slide">Slide ' + ++appendNumber + '</div>',
                '<div class="swiper-slide">Slide ' + ++appendNumber + '</div>',
            ]);
        });
    </script>
</body>

</html>