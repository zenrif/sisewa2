<?php
 
/**
 *
 */
class Akun extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if (empty($this->session->userdata('is_login'))) {
      echo '<script>alert("anda harus login");window.location.href="'.base_url('login').'"</script>';
    }
  }

  public function index() {
    $data['transaksi_sewa'] = $this->all_model->get_transaksi_sewa(array('transaksi.user_id'=>$this->session->userdata('user_id')));
    $data['transaksi_jasa'] = $this->all_model->get_transaksi_jasa(array('transaksi_jasa.user_id'=>$this->session->userdata('user_id')));
    $this->load->view('akun_view', $data);
  }

  public function simpan() {
    $nama = $this->input->post('nama');
    $notelp = $this->input->post('notelp');
    $alamat = $this->input->post('alamat');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $nik = $this->input->post('nik');
    $tanggal = $this->input->post('tanggal');
    $kerja = $this->input->post('kerja');
    $jenis = $this->input->post('jenis');

    $data_update = $this->all_model->update(
      array(
        'user_id' => $user_id
      ), 
      array(
      'nama_lengkap' => $nama,
      'notelp'       => $notelp,
      'alamat'       => $alamat,
      'email'        => $email,
      'password'     => $password,
      'nik'          => $nik,
      'tanggal'      => $tanggal,
      'kerja'        => $kerja,
      'jenis'        => $jenis,
      ),
      'users'
    );
    if ($data_update) {
      $this->session->set_flashdata('msg', '<div class="alert alert-success fade in alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a> Data berhasil diubah</div>');
      $this->session->set_userdata('nama', $nama);
      $this->session->set_userdata('email', $email);
      $this->session->set_userdata('notelp', $notelp);
      $this->session->set_userdata('alamat', $alamat);
      $this->session->set_userdata('password', $password);
      $this->session->set_userdata('nik', $nik);
      $this->session->set_userdata('tanggal', $tanggal);
      $this->session->set_userdata('kerja', $kerja);
      $this->session->set_userdata('jenis', $jenis);
      redirect('akun');
    }else {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger fade in alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a> Data gagal diubah</div>');
      redirect('akun');
    }
  }
 public function bayar($id = null) {
    $data['transaksi_sewa'] = $this->all_model->get_transaksi_sewa(array('transaksi_id'=>$id));
    $this->load->view('bayar_view', $data);
  }
}

 ?>
