<?php 

 class Model_dashboard extends CI_Controller{
 	function insert($judul,$isi,$katagori){
 		$data=array('artikel_title'=>$this->input->post('judul'),
 					'artikel_isi'=>$this->input->post('isi'),
 					'katagori'=>$this->input->post('katagori'));
 		$this->db->insert('artikel',$data);
 	}
 }