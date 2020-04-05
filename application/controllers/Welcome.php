<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data["s"]=$this->db->get('produk')->result();
		$this->load->view('welcome_message',$data);
	}

	public function transaksi($d)
	{
		$data["rt"]=$this->db->get_where('produk',['id'=>$d])->row();

		$this->load->view('admin/transaksi',$data);
	}

	public function kategori($d)
	{
		// $data["rt"]=$this->db->get('produk')->result();;
		$data["rt"]=$this->db->get_where('produk',['id_kategori'=>$d])->result();
		if (!$data["rt"]) {
			$this->session->set_flashdata('er', 'Barang Yang Anda Inginkan Belum Tersedia Mas Broo');
		}

		$this->load->view('admin/kategori',$data);
	}

	public function cari()
	{
		$data=$this->input->post('i');
		$this->db->select('*');
		$this->db->like('nm_barang',$data);
		$this->db->or_like('des',$data);
		$this->db->limit(9);
		$as=$this->db->get('produk')->result();
		$a='';
		if ($as) {
			foreach ($as as $value) {
				$a.='<ul class="list-group list-group-flush shadow-lg" style="width:370px;">
				<li class="list-group-item"><img class="img-circle" src='.base_url('asset/berkas_prodak/').$value->file.' height="40" width="40"></img><a href="'.site_url('prodak/kategori/').$value->id_kategori.'" class="ml-3">'.$value->nm_barang.'</a></li>
				</ul>';
			}

		}else{
			$a.='<div class="alert alert-primary px-3 py-3" style="border:none; width:400px;margin-left:45px;"><h4 class="font-weight-200">Barang Yang Anda Cari Tidak Di Temukan Mas Broo...</h4></div>
			';
		}

		
		echo json_encode($a);
	}
}
