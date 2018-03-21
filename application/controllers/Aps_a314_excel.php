<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a314_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a314_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 'a314' => $this->aps_a314_model->listing());
 $this->load->view('Users/Butir3/tampilan_borang3.1.4.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 'a314' => $this->aps_a314_model->listing());
 $this->load->view('Users/Butir3/tampilan_borang3.1.4_excel.php',$data);
 }

}