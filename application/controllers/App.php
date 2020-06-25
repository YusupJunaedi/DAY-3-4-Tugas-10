<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_app', 'm');
	}

	public function index()
	{
		$produk = $this->m->getAllProduk();
		$data = [
			'produk' => $produk
		];

		$this->load->view('app', $data);
	}

	public function tambahData()
	{
		$namaProduk	= $this->input->post('namaProduk');
		$keterangan = $this->input->post('keterangan');
		$harga 		= $this->input->post('harga');
		$jumlah 	= $this->input->post('jumlah');

		$data = [
			'nama_produk'	=> $namaProduk,
			'keterangan'	=> $keterangan,
			'harga'			=> $harga,
			'jumlah'		=> $jumlah
		];

		$this->m->insertProduk($data);
		redirect('app');
	}

	public function updateData()
	{
		$id 		= $this->input->post('id');
		$namaProduk	= $this->input->post('namaProduk');
		$keterangan = $this->input->post('keterangan');
		$harga 		= $this->input->post('harga');
		$jumlah 	= $this->input->post('jumlah');

		$data = [
			'nama_produk'	=> $namaProduk,
			'keterangan'	=> $keterangan,
			'harga'			=> $harga,
			'jumlah'		=> $jumlah
		];


		$this->m->updateProduk($id, $data);
		redirect('app');
	}

	public function hapusData($id)
	{
		$this->m->deleteProduk($id, $data);
		redirect('app');
	}
}
