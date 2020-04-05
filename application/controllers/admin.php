<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/vAdmin');
	}
	public function p()
	{
		$data["b"]=$this->db->get('produk')->result();
		$data["a"]=$this->db->get('kategori')->result();
		$this->load->view('admin/p',$data);
	}

	public function addP()
	{
		if (isset($_POST["simpan"])) {
			$file=$_FILES['file']["name"];
		$config['upload_path'] = './asset/berkas_prodak/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		// $config['max_size']  = '100';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('file')){
			
			$this->session->set_flashdata('error','Foto Yang Anda Upload Tidak Sesuai Kriteria');
			redirect("admin/p");
		}
		else{
		$this->upload->data('file');

		}
		$result=[
			'id_kategori'=>$this->input->post('kategori'),
			'nm_barang'=>$this->input->post('nm_barang'),
			'harga'=>$this->input->post('harga'),
			'des'=>$this->input->post('des'),
			'kd_barang'=>$this->input->post('kd_barang'),
			'file'=>$file,
			'stok'=>$this->input->post('stok'),
			'date_ct'=>time()

		];

		$send=$this->db->insert('produk', $result);
		if ($send) {
			$this->session->set_flashdata('s','Prodak Berhasil Di Upload');
			redirect("admin/p");
		}

		}
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */