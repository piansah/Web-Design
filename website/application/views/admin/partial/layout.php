<body>

    <?php $this->load->view('admin/partial/head')?>
    <!-- ======= Header ======= -->
    <?php $this->load->view('admin/partial/header')?>
    <!-- End Header -->
    <!-- ======= Sidebar ======= -->
    <?php $this->load->view('admin/partial/sidebar')?>
    <!-- End Sidebar-->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active"><?=$active?></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <?php echo $body ?>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php $this->load->view('admin/partial/footer')?>