<?php $this->load->view('header'); ?>
   <script type="text/javascript">
      function pindahb() {
    window.location=bayar.php;
      }
   </script> 
 <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Akunku</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Akun</a></li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <!-- Page Header End -->
<div class="container">
  <div class="row">
    
  
    <form data-parsley-validate class="col-sm-5" action="<?php echo base_url('akun/simpan')?>" method="post">
    <legend class="text-primary">Data Diri</legend>
    <?php echo $this->session->flashdata('msg'); ?>
    <div class="form-group">
      <label>Nama</label>
      <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id')?>">
      <input type="text" name="nama" value="<?php echo $this->session->userdata('nama')?>" class="form-control" required>
    </div>
    <div class="form-group">
      <label>NIK</label>
      <input type="text" name="nik" data-parsley-type="number" value="<?php echo $this->session->userdata('nik')?>" class="form-control" required>
    </div>
 
    <div class="form-group" >
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal" class="form-control" placeholder="Masukan Tanggal Lahir" value="<?php echo $this->session->userdata('tanggal')?>" required>
        <p> 
        </p>
      </div>
<div class="form-group">
        <label>Jenis Sewa </label>
        <select class="form-control" name="jenis" value="<?php echo $this->session->userdata('tanggal')?>">
        <option value="Pribadi">Pribadi</option>
        <option value="Badan Hukum">Badan Hukum</option>
        </select>
      </div>

<div class="form-group">
      <label>Nomor Telephone</label>
      <input type="text" name="notelp" data-parsley-type="number" value="<?php echo $this->session->userdata('notelp')?>" class="form-control" required>
    </div>

 <div class="form-group">
      <label>Alamat</label>
      <textarea name="alamat" class="form-control" required><?php echo $this->session->userdata('alamat')?></textarea>
    </div>

    <div class="form-group">
      <label>Pekerjaan</label>
      <input type="text" name="kerja" data-parsley-type="number" value="<?php echo $this->session->userdata('kerja')?>" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" data-parsley-type="email"value="<?php echo $this->session->userdata('email')?>" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Password</label>
    <div class="input-group">
      <input id="pswd" type="password" name="password" value="<?php echo $this->session->userdata('password')?>" class="form-control" required>
      <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-eye-open"></span></span>
    </div>
    </div>
     <span><a style="bg-white"></a></span>
    <div class="form-group"> <br>
      <button type="submit" class="btn-success">Simpan</button>
    </div>
  </form>
  <div class="col-sm-5">
    <legend class="text-primary">Data Sewa</legend>
    <table class="table table-hover">
      <thead class="bg-dark text-light text-center text-up">
        <tr>
          <th>No</th>
          <th>Nama Produk</th>
          <th>Kategori</th>
          <th>Masa Sewa</th>
          <th>Dari</th>
          <th>Sampai</th>
          <th>Total Bayar</th>
          <th>Status</th>
          <th>Bayar</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($transaksi_sewa)):
            foreach ($transaksi_sewa as $key => $p) {
              $no = $key+1;
              if ($p->status == '0') {
                $status = '<label class="label label-default ">Menunggu</label>';
              }elseif ($p->status == '2') {
                $status = '<label class="label label-warning">Kembali</label>';
              }else {
                $status = '<label class="label label-success">Disetujui</label>';
              } 

              echo '<tr>';
                echo '<td>'.$no.'</td>';
                echo '<td>'.$p->nama_produk.'</td>';
                echo '<td>'.$p->nama_kategori.'</td>';
                echo '<td>'.$p->masasewa.'</td>';
                echo '<td>'.$this->all_model->format_tanggal($p->dari).'</td>';
                echo '<td>'.$this->all_model->format_tanggal($p->sampai).'</td>';
                echo '<td>'.$this->all_model->format_harga($p->harga).'</td>';
                echo '<td>'.$status.'</td>';
                echo '<td> <a href="'.base_url('bayar'.$p->transaksi_id).'" class="btn btn-success py-md-2 px-md-3  animated slideInLeft">Bayar</a>

                </td>';
              echo '</tr>';

            } 
 
            endif; ?>
            
      </tbody>
    </table>
</div> <!-end row ->
</div>
</div>

<script type="text/javascript">
  
    $('#example2').DataTable( {"scrollY":true})
  
  $('#basic-addon2').mousedown(function () {
    $('#pswd').attr('type', 'text');
  });
  $('#basic-addon2').mouseup(function () {
    $('#pswd').attr('type', 'password');
  });
</script>
<?php $this->load->view('footer'); ?>
