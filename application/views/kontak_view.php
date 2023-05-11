<?php $this->load->view('header'); ?>
 <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Tentang</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Tentang</a></li>                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
<div class="reg-form">
  <div class="container">
    <div class="reg">
      <h3><?php echo $tentang[1]->judul;?></h3>
      <div class="col-sm-6">
        <p align="justify"><?php echo $tentang[1]->isi;?>
        </p>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>
