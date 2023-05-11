<?php

/**
 *
 */
class Login extends CI_Controller
{

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->view('login_view');
  }

  public function aksi_login() {
    $user = $this->all_model->get_where(
      array(
        'email'     => $this->input->post('email'),
        'password'  => $this->input->post('password')
      ),
      'users'
    );
    if (!empty($user)) {
      $this->session->set_userdata('user_id', $user[0]->user_id);
      $this->session->set_userdata('nama', $user[0]->nama_lengkap);
      $this->session->set_userdata('email', $user[0]->email);
      $this->session->set_userdata('notelp', $user[0]->notelp);
      $this->session->set_userdata('alamat', $user[0]->alamat);
      $this->session->set_userdata('password', $user[0]->password);
      $this->session->set_userdata('level', $user[0]->level);
      $this->session->set_userdata('nik', $user[0]->nik);
      $this->session->set_userdata('tanggal', $user[0]->tanggal);
      $this->session->set_userdata('kerja', $user[0]->kerja);
      $this->session->set_userdata('jenis', $user[0]->jenis);
      $this->session->set_userdata('is_login', '1');



      if ($user[0]->level == '0') {
        redirect('dashboard');
      }else {
        redirect('home');
      }
    }
  }

  public function logout() {
    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('nama');
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('notelp');
    $this->session->unset_userdata('alamat');
    $this->session->unset_userdata('password');
    $this->session->unset_userdata('is_login');
    $this->session->unset_userdata('level');
    $this->session->unset_userdata('nik');
    $this->session->unset_userdata('tanggal');
    $this->session->unset_userdata('kerja');
    $this->session->unset_userdata('jenis');
    redirect('home');
  }
}

 ?>
