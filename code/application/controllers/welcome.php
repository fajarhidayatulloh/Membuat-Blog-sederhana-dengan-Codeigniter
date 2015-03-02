<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_login');
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->helper('permalink_helper');
	}
	function index(){
		$data['berita']=$this->model_login->artikel();
		$this->load->view('template', $data);
	}
	function login (){
		if($this->input->post('username')){
			$username =$this->input->post('username');
			$password =$this->input->post('password');
			$hasil=$this->model_login->login($username,$password);
			if($hasil==1){
				$this->session->userdata(array('status_login'=>'oke'));
				redirect('dashboard');
			}else{
				redirect('welcome/login');
			}
		}else{
			$this->load->view('form_login');
		}
	}
	function daftar(){
		if($this->input->post('nama')){
			$this->model_login->daftar($nama,$username,$password,$email,$entry);
			redirect('welcome/daftar');
		}else{
			$this->load->view('form_daftar');
		}
	}
	function read($id_artikel){
		$data['baca']=$this->model_login->baca_artikel($id_artikel);
		$data['dua']=$this->model_login->artikel();
		$this->load->view('view_artikel',$data);
	}
}
