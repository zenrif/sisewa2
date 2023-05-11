<?php $this->load->view('header'); ?>

<style media="screen">
div textarea {
  border: none;
  border: 1px solid #e6e6e6;
  margin-top: 20px;
  width: 50%;
  padding: 15px;
  font-weight: 100;
  font-family: sans-serif;
  color: #747779;
  resize: none;
  height: 200px;
  outline: none;
}
 
</style>

 <!DOCTYPE html>
<html>
<head>
 <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Daftar</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Daftar</a></li>                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->  
</head>
<body >
  <style>
    body
     {
      background-color: #141f1f;

    }
  </style>
  <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">SiSewa</h6>
                    <h1 class="mb-5">Daftar <span class="text-primary text-uppercase">Akun</span></h1>
                    <p class="text-center ">Selamat datang, Silahkan melakukan pendaftaran akun dengan mengisi form dibawah ini</p>
  <p class="text-center">Jika anda sudah punya akun, Silahkan <a href="<?php echo base_url('login')?>">Klik Disini</a></p>
   <?php echo $this->session->flashdata('msg');?>

                </div>
     
   <!-- FORM AWAL -->
  <div class="card mt-4">
    <div class="card-header bg-warning text-danger">
    </div>
    <div class="card-body">
     <form  action="<?php echo base_url('daftar/simpan')?>" class="card-header bg-darkblue text-dark" method="post" >
      
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required="">
      </div>

<div class="form-group">
        <label>NIK</label>
        <input type="text" name="nik" class="form-control" placeholder="Masukan NIK" required="">
      </div>

       <div class="form-group" >
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal" class="form-control" placeholder="Masukan Tanggal Lahir" required="">
        <p> 
        </p>
      </div>

      <div class="form-group">
        <label>Jenis Sewa </label>
        <select class="form-control" name="jenis">
        <option value="Pribadi">Pribadi</option>
        <option value="Badan Hukum">Badan Hukum</option>
        </select>
      </div>

<div class="form-group">
        <label>Nomor Telephone</label>
        <input type="number" name="notelp" class="form-control" placeholder="Masukan Nomor Telephone" required="">
      </div>

      <div class="form-group">
        <label>Alamat</label>
        <textarea type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required=""></textarea> 
      </div>

      <div class="form-group">
        <label>Pekerjaann</label>
        <input type="text" name="kerja" class="form-control" placeholder="Masukan Pekerjaan" required="">
      </div>

        <div class="form-group" >
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="Masukan Email" required="">
        <p> 
        </p>
      </div>

       <div class="form-group" >
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Masukan password" required="">
        <p> 
        </p>
      </div>


      <div class="form-group">
        <label>Dokumen</label>
        <input type="file" name="tfoto" required="" multiple >
        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p> 
      </div>
    

      <input type="submit" value="Daftar" class="btn btn-success">

      <button type="reset" class="btn btn-danger" name="bres">Kosongkan</button>
<br>
     </form>
   </div>
    </div>
  </div>
  <!-- FORM AKHIR --> 
  <?php $this->load->view('footer'); ?>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

