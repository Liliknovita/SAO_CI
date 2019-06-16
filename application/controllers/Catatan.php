

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catatan extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('CatatanModel');
  }
  
  public function index(){
    $data['gambar'] = $this->CatatanModel->view();
    $this->load->view('Catatan/view', $data);
  }
  
  public function tambah(){
    $data = array();
    
    if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
      // lakukan upload file dengan memanggil function upload yang ada di CatatanModel.php
      $upload = $this->CatatanModel->upload();
      
      if($upload['result'] == "success"){ // Jika proses upload sukses
         // Panggil function save yang ada di CatatanModel.php untuk menyimpan data ke database
        $this->CatatanModel->save($upload);
        
        redirect('Catatan'); // Redirect kembali ke halaman awal / halaman view data
      }else{ // Jika proses upload gagal
        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }
    

    
    $this->load->view('Catatan/form', $data);
  }
}