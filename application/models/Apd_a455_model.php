<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a455_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT d.nama_dosen,k.nm_organisasi,k.thn_awal,k.thn_akhir,k.internasional,k.nasional,k.lokal
FROM keikutsertaan_org k INNER JOIN dosen_tbl d ON d.id_dosen=k.id_dosen WHERE d.kd_jns_dosen=1 AND d.kd_prodi="p001"');
 return $data->result_array();
 }

}
