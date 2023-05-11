<?php $this->load->view('header') ?>
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
  <div class="container-fluid page-header-inner py-5">
    <div class="container text-center pb-5">
      <h1 class="display-3 text-white mb-3 animated slideInDown">Login</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center text-uppercase">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Login</a></li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- Page Header End -->
<div class="container-xxl py-10">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title text-center text-primary text-uppercase">SiSewa</h6>
      <h1 class="mb-5">Login <span class="text-primary text-uppercase">Akun</span></h1>
      <p>Selamat Datang, Silahkan masuk</p>

    </div>

    //

    <div class="card mt-4">
      <div class="card-header bg-warning text-danger text-center">
      </div>
      <div class="card-body">
        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="<?php echo base_url('daftar') ?>" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
          </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content">
          <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
            <form data-parsley-validate action="<?php echo base_url('login/aksi_login') ?>" method="post">

              <p class="text-center">or:</p>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name="email" data-parsley-type="email" class="form-control" required />
                <label class="form-label" for="email">Email</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="password" class="form-control" />
                <label class="form-label" for="loginPassword">Password</label>
              </div>

              <!-- Submit button -->
              <button type="submit" value="Login" class="btn btn-primary btn-block mb-4">Submit</button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>Belum punya akun? <a href="<?php echo base_url('daftar') ?>">Daftar</a></p>
              </div>
            </form>



            <!-- <a href="#">Forgot Password ?</a> -->
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php $this->load->view('footer') ?>