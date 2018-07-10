<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a441_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
  $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT D.nama_dosen,D.nidn,D.tgl_lhr,J.NM_JAB_AKD,D.sertifikasi,D.GELAR_S1,D.ASAL_PT_S1,D.BID_KEAHLIAN_S1,D.GELAR_S2,D.ASAL_PT_S2,D.BID_KEAHLIAN_S2,D.GELAR_S3,D.ASAL_PT_S3,D.BID_KEAHLIAN_S3 FROM dosen_tbl D LEFT JOIN jab_akademik J ON D.kd_jab=J.kd_jab WHERE KD_PRODI='."'$kdprodi'".' AND kd_jns_dosen=2');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT D.nama_dosen,D.nidn,D.tgl_lhr,J.NM_JAB_AKD,D.sertifikasi,D.GELAR_S1,D.ASAL_PT_S1,D.BID_KEAHLIAN_S1,D.GELAR_S2,D.ASAL_PT_S2,D.BID_KEAHLIAN_S2,D.GELAR_S3,D.ASAL_PT_S3,D.BID_KEAHLIAN_S3 FROM dosen_tbl D LEFT JOIN jab_akademik J ON D.kd_jab=J.kd_jab '.$where);
 return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
 }

 public function getjabatan(){
 	$data=$this->db->query('select kd_jab,nm_jab_akd from jab_akademik;');
 	return $data->result_array();
 }

}
