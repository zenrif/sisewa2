<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link rel="icon" type="image/icon" href="/upload/home2.png" >

    <title>SISEWA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
<link href="<?php echo base_url('/assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
 
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <div><img src="/assets/img/fix.png" class="logo" width="200"></div>                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">binamarga@jatimprov.go.id</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">031-8290186</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href="https://www.facebook.com/dbmjatim"><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href="https://twitter.com/DbmJatim"><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href="https://instagram.com/binamargajatim?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                                <a class="" href="https://www.youtube.com/channel/UChGZiOkcah5NwxlTUqFm9ZQ"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">SISEWA</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="<?php echo base_url('home');?>" class="nav-item nav-link active">Home</a>
                                <a href="<?php echo base_url('produk');?>" class="nav-item nav-link">Sewa Aset</a>
                                <a href="<?php echo base_url('tentang');?>" class="nav-item nav-link">Dokumen</a>
                                <a href="<?php echo base_url('kontak');?>" class="nav-item nav-link">Tentang</a>
                                
                            </div>
                            
                            <div class="  navbar-right" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <?php if (empty($this->session->userdata('is_login'))){ ?>
                      <a href="<?php echo base_url('daftar')?>" role="button">Daftar</a>
                      <a href="" class="text-dark">gk</a>
                      <a href="<?php echo base_url('login')?>" role="button">Masuk</a>
                      <a href="" class="text-dark">gk</a>
                    <?php }else{ ?>
                      <a href="<?php echo base_url('akun')?>" role="button"><?php echo ucfirst($this->session->userdata('nama'));?></a>
                      <a href="" class="text-dark">gk</a>
                    <a href="<?php echo base_url('login/logout')?>" role="button">Logout</a>
                    <a href="" class="text-dark">gk</a>

                    <?php } ?>                                
                            </div>
                            
                                             </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->
           <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/counterup/counterup.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
        <!-- Header End -->