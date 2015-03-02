<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Dashboard extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('model_dashboard');
		}
		function index(){
			$this->load->view('view_dashboard');
		}
		function addartikel(){
			if($this->input->post('judul')){
				$this->model_dashboard->insert($judul,$isi,$katagori);
				redirect('dashboard/addartikel');
			}else{
				$this->load->view('form_artikel');
			}
		}
		function allartikel(){
			$data['artikel']=$this->db->get('artikel')->result();
			$this->load->view('all_artikel',$data);
		}
		function katagori(){
			$this->load->view('kategori');
		}
		function alladmin(){

		}
	}
 ?>