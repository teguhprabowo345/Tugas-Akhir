<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b321_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_b321_model');
 // }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 3.2.1 : MAHASISWA DAN LULUSAN',
 // 'b321' => $this->Apd_b321_model->listing());
$masastudi=$this->Apd_b321_model->masastudi();
$rata=$this->Apd_b321_model->rata();
$this->load->view('User/Butir3B/tampilan_borang3.2.1.php',array('masastudi'=>$masastudi,
																'rata'=>$rata));
 }

 public function ubah(){
 	$this->load->view('User/Butir3B/edit_borang3.2.1.php');
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 3.2.1 : MAHASISWA DAN LULUSAN',
 'b321' => $this->apd_b321_model->listing());
 $this->load->view('User/Butir3B/tampilan_borang3.2.1.php',$data);
 }

}