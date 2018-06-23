<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a541_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT d.nama_dosen, p.j_mhs_bimbingan,p.rata2_pertemuan,p.Id FROM pembimbing_akd p INNER JOIN
 dosen_tbl d ON p.id_dosen=d.id_dosen WHERE p.kd_prodi="p001"');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT d.nama_dosen, p.j_mhs_bimbingan,p.rata2_pertemuan,p.Id FROM pembimbing_akd p INNER JOIN
 dosen_tbl d ON p.id_dosen=d.id_dosen '.$where);
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
public function GetDosen()
	{
		$data=$this->db->query("select nama_dosen from dosen_tbl ");
		return $data->result_array();
	}
 public function totbimbingan() {
 $data=$this->db->query('SELECT SUM(j_mhs_bimbingan)AS jum_bimbingan FROM pembimbing_akd WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function ratapertemuan() {
 $data=$this->db->query('SELECT AVG(j_mhs_bimbingan)AS rata_pertemuan FROM pembimbing_akd WHERE kd_prodi="p001"');
 return $data->result_array();
 }

}
