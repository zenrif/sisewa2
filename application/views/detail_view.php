<?php $this->load->view('header') ?>
 <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/bootstrap.min.css')?>" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
       

<!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(/img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Sewa Aset</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Sewa Aset</a></li>
                            <li class="breadcrumb-item"><a href="#">Detail</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->  
        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Sewa Aset</h6>
                    <h2 class="mb-5"><?php echo $detail[0]->nama_produk;?> <span class="text-danger "><?php echo $this->all_model->format_harga($detail[0]->hargap);?>/Tahun</span></h2>                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                                                        <div class="col-16 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="<?php echo base_url('upload/'.$detail[0]->gambar);?>">
                                <div class="showcase-last">
                  <h3>Detail</h3>
                  <ul>
                    <li><?php echo $detail[0]->deskripsi;?></li>
                     <li><?php echo $this->all_model->format_harga($detail[0]->hargap);?> / Tahun</li>
                      <li>Alamat: <?php echo $detail[0]->alamatp;?></li>
                       <li>Kategori Sewa: <?php echo $detail[0]->nama_kategori; ?> </li>
                      <li>Luas Tanah: <?php echo $detail[0]->luastanah; ?> m<sup>2</sup></li>
                      <li>Luas Bangunan: <?php echo $detail[0]->luasbangunan; ?> m<sup>2</sup></li>
                  </ul>
              </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                             <form class="" action="<?php echo base_url('sewa/tambah_sewa')?>" method="post">
                    <div class="float-qty-chart">
                    <ul>
                        <a class="qty">
                            <h7>Dari Tanggal</h7>
                            <input type="hidden" name="produk_id" value="<?php echo $detail[0]->produk_id;?>" required>
                            <input type="hidden" name="nama_produk" value="<?php echo $detail[0]->nama_produk;?>" required>
                            <input type="hidden" name="harga" value="<?php echo $detail[0]->hargap;?>" required>
                            <input type="date" name="dari" class="form-control" required>
                        </a>
                        <a class="qty">
                            <h7>Sampai Tanggal</h7>
                            <input type="date" name="sampai" class="form-control" required>
                        </a>
                      
                        <a class="qty">
                            <h7>QTY</h7>
                            <select class="form-control qnty-chrt" name="qty" required>
                              <?php for ($i=1; $i <= $detail[0]->stok; $i++) {
                                echo '<option value="'.$i.'">'.$i.'</option>';
                              } ?>
                            </select>
                        </a> 
                        <a class="qty">
                            <h7>Masa Sewa</h7>
                            <input type="text" name="masasewa" class="form-control" required>
                        </a>
                        <br>
             <div class="form-group">
        <label>Surat Permohonan Sewa</label>
        <input type="file" name="suratpermohonan" required="" multiple accept="pdf/*" >
        <p style="color: red">Ekstensi yang diperbolehkan .doc | .docx | .pdf</p> 

      </div>

      <label>Surat Pernyataan Sewa</label>
        <input type="file" name="suratpernyataan" required="" multiple accept="pdf/*">
        <p style="color: red">Ekstensi yang diperbolehkan .doc | .docx | .pdf</p> 
      </div>
                    </ul>
                  
                    <ul>
                      <div class="col-12 ad-2-crt simpleCart_shelfItem">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Sewa</button>
                                    </div>
                                           </ul>
                  </form>

  <div class="clearfix"></div>
      </div>
  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

              </div>
              
            
          </div>
  <div class="clearfix"></div>
      </div>
  </div>
  <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
      <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets/js/main.js"></script>
</body>

</html>
<?php $this->load->view('footer') ?>
