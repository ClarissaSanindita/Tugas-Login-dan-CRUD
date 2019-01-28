<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //Do your magic here
    $this->load->model('User_Model');
  }

  public function index()
  {
    if ($this->session->userdata('logged_in') == TRUE) {
      redirect(base_url('index.php/Pelanggan'));
    }
    else {
      $this->load->view('Login');
    }
  }

  public function FormLogin(){
    if ($this->session->userdata('logged_in') == TRUE) {
      redirect(base_url('index.php/Pelanggan'));
    }
    else {
      $this->load->view('Login');
    }
  }

  public function Login()
  {
    $this->form_validation->set_rules('Username','Username','trim|required');
    $this->form_validation->set_rules('Password','Password','trim|required');

    if ($this->form_validation->run() == TRUE) {
      if ($this->User_Model->CekUser() == TRUE) {
          redirect(base_url('index.php/user/home'));
      }
      else {
        $this->session->set_flashdata('notif',"Username atau Password Salah!!!");
        redirect(base_url('index.php/user/FormLogin'));}
      }
    else {
      $this->session->set_flashdata('notif',validation_errors());
      redirect(base_url('index.php/user/FormLogin'));
    }
    }


  public function Logout()
  {
    $this->session->sess_destroy();
    $this->load->view('Login');
  }

  public function home()
  {
    $data['konten']="home";
    $this->load->view('index', $data);
  }

  public function chart()
  {
    $data['konten']="chart";
    $this->load->view('index', $data);
  }
  public function elements()
  {
    $data['konten']="elements";
    $this->load->view('index', $data);
  }
  public function tables()
  {
    $data['konten']="tables";
    $this->load->view('index', $data);
  }
  // public function kategori()
  // {
  //   $data['konten']="v_kategori";
  //   $this->load->view('index', $data);
  // }
  // public function barang()
  // {
  //   $data['konten']="v_barang";
  //   $this->load->view('index', $data);
  // }
}

 ?>
