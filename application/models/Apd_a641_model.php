<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a641_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing1() {
 $pustaka1=$this->db->query('SELECT jml_judul,jml_copy,id,jenis_pustaka FROM pustaka WHERE kd_prodi="p001"');
 return $pustaka1->result_array();
 }

 public function update($where="") {
	 $data= $this->db->query('SELECT jml_judul,jml_copy,id,jenis_pustaka FROM pustaka '.$where);
	 return $data->result_array();
 }

 	public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

	public function insert($tablename,$data){
		$res=$this->db->insert($tablename,$data);
		return $res;
	}

 public function totjudul() {
 $data=$this->db->query('SELECT SUM(jml_judul)AS Tot_judul FROM pustaka WHERE KD_PRODI="p001"');
 return $data->result_array();
 }

 public function totkopi() {
 $data=$this->db->query('SELECT SUM(jml_copy)AS Tot_Kopi FROM pustaka WHERE KD_PRODI="p001"');
 return $data->result_array();
 }

}
