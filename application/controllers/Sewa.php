<?php

/**
 *
 */
class Sewa extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if (empty($this->session->userdata('is_login'))) {
      echo '<script>alert("anda harus login");window.location.href="'.base_url('login').'"</script>';
    }
  }
 public function header() {
    $this->load->view('header');
  }
  public function index() {
    $this->load->view('sewa_view');
  }
//
   public function simpan_edit() {
    $produk_id = $this->input->post('produk_id');
    $nama_produk = $this->input->post('nama_produk');
    $luastanah = $this->input->post('luastanah');
    $luasbangunan = $this->input->post('luasbangunan');
    $alamatp = $this->input->post('alamatp');
    $kategori = $this->input->post('kategori');
    $hargap = $this->input->post('hargap');
    $stok = $this->input->post('stok');
    $deskripsi = $this->input->post('deskripsi');

    if (!empty($_FILES)) {
      $config['upload_path']          = './uploads/';
$config['allowed_types']        = 'pdf|jpg|png';
$config['max_size']             = 100;
$config['max_width']            = 1024;
$config['max_height']           = 768;
      $config['encrypt_name']         = true;
      $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('suratpermohonan')) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $data = array('upload_data' => $this->upload->data());
          $filename = $data['upload_data']['file_name'];
          $data_update = array(
            'kategori_id' => $kategori,
            'nama_produk' => $nama_produk,
            'luastanah' => $luastanah,
            'luasbangunan' => $luasbangunan,
            'alamatp' => $alamatp,
            'harga'       => $harga,
            'stok'        => $stok,
            'deskripsi'   => $deskripsi,
          );
          $simpan = $this->all_model->update(array('produk_id'=>$produk_id),$data_update, 'produk');
          if ($simpan) {
            redirect('data_produk');
          }
        }
    }else {
      $data_update = array( 
        'kategori_id' => $kategori,
        'nama_produk' => $nama_produk,
        'luastanah' => $luastanah,
            'luasbangunan' => $luasbangunan,
            'alamatp' => $alamatp,
        'harga'       => $harga,
        'stok'        => $stok,
        'deskripsi'   => $deskripsi,
      );
      $simpan = $this->all_model->update(array('produk_id'=>$produk_id),$data_update, 'produk');
      if ($simpan) {
        redirect('data_produk');
      }
    }
  }

  //
  public function tambah_sewa() {
    $produk_id    = $this->input->post('produk_id');
    $dari         = $this->input->post('dari');
    $sampai       = $this->input->post('sampai');
    $qty          = $this->input->post('qty');
    $nama         = $this->input->post('nama_produk');
    $harga        = $this->input->post('harga');
     $suratpermohonan        = $this->input->post('suratpermohonan');
        $suratpernyataan        = $this->input->post('suratpernyataan');
    $masasewa        = $this->input->post('masasewa');
    $bayar        = $this->input->post('bayar');
    $selisih      = $this->all_model->hitung_selisih($dari, $sampai);
    $tharga       = $harga * $masasewa;
    //
        if (!empty($_FILES)) {
      $config['upload_path']          = FCPATH.'/upload/berkas';
$config['allowed_types']        = 'pdf|jpg|png';
$config['max_size']             = 10000;
//$config['max_width']            = 1024;
//$config['max_height']           = 768;
      $config['encrypt_name']         = true;
      $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('suratpermohonan')) {
          $error = array('error' => $this->upload->display_errors());
          print_r($error);
        } else {
          $data = array('upload_data' => $this->upload->data());
          $filename = $data['upload_data']['file_name'];
         $datat = array(
        'id'         => $dari,
        'produk_id'  => $produk_id,
        'qty'        => $qty,
        'dari'       => $dari,
        'sampai'     => $sampai,
        'price'      => $tharga,
        'name'       => $nama,
        'suratpermohonan' => $suratpermohonan,
        'suratpernyataan' => $suratpernyataan,
        'masasewa' => $masasewa,
        'bayar' => $bayar,         
         );
           $in = $this->cart->insert($datat);
    if ($in) {
      redirect('sewa');
    }
  }
    }else {
      
       $datat = array(
        'id'         => $dari,
        'produk_id'  => $produk_id,
        'qty'        => $qty,
        'dari'       => $dari,
        'sampai'     => $sampai,
         'suratpermohonan' => $suratpermohonan,
        'suratpernyataan' => $suratpernyataan,
        'price'      => $tharga,
        'name'       => $nama,
        'masasewa' => $masasewa,
        'bayar' => $bayar,

    );
    $in = $this->cart->insert($datat);
    if ($in) {
      redirect('sewa');
    }
  }
   }
  public function hapus($id)   {
    $in = $this->cart->remove($id);
    if ($in) {
      redirect('sewa');
    }
  }

  public function simpan_sewa() {
    $data = $this->cart->contents();
    foreach ($data as $k) {
        $data_simpan = array(
          'user_id'    => $this->session->userdata('user_id'),
          'produk_id'  => $k['produk_id'],
          'dari'       => $k['dari'],
          'sampai'     => $k['sampai'],
          'jumlah'     => $k['qty'],
          'harga'      => $k['subtotal'],
          'suratpermohonan'      => $k['suratpermohonan'],
          'suratpernyataan'      => $k['suratpernyataan'],
          'masasewa'      => $k['masasewa'],
          'bayar'      => $k['bayar']

        );
        $this->all_model->insert($data_simpan, 'transaksi');
    }
     $this->session->set_flashdata('msg', '<div class="alert alert-success fade in alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a> Data berhasil diubah</div>');
    redirect('sewa/selesai');
  }

  public function selesai() {

    $this->load->view('selesai_view');
  }

  public function tutup() {
     $this->cart->destroy();
     redirect('home');
  }

}

 ?>