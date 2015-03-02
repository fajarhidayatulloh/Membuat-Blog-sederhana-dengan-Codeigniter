<?php 
	class Model_login extends CI_Model{
		function login($username,$password){
			$cek=$this->db->get_where('user',array('username'=>$username,'password'=>$password));
			if($cek->num_rows()>0){
				return 1;
			}else{
				return 0;
			}
		}

		function daftar($nama,$username,$password,$email,$entry){
			$data=array('nama'		=>$this->input->post('nama'),
						'username'	=>$this->input->post('username'),
						'password'	=>md5 ($this->input->post('password')),
						'email'		=>$this->input->post('email'),
						'entry'		=>date('Y-m-d'));
			$this->db->insert('user',$data);
		}
		function artikel(){
			$query=$this->db->query("SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT 5 ");
			return $query->result_array();
		}
		function baca_artikel($id_artikel){
			$this->db->where('id_artikel',$id_artikel);
			$query=$this->db->get('artikel');
			return $query->result_array();
		}
	}
 ?>