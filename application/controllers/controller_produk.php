<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_produk extends CI_Controller {

	public function __construct(){
		parent::__construct();
	$this->load->model('model_produk');
	}
	

	public function index()
	{
		$dataInventory = $this->model_produk->getSelectedDataInventory();
		$data = array('data_produk' => $dataInventory);
		$this->load->view('home',$data);
	}

	public function allData()
	{
		$dataInventory = $this->model_produk->getAllDataInventory();
		$data = array('data_produk' => $dataInventory);
		$this->load->view('table_data',$data);
	}

	public function input()
	{
		$this->load->view('form_input');
	}
	
	public function InsertData(){
		$no = $this->input->post('no');
		$id_produk = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$harga = $this->input->post('harga');
		$kategori_id = $this->input->post('kategori_id');
		$status_id = $this->input->post('status_id');

		$inserted = array(
			'no' => $no,
			'id_produk' => $id_produk,
			'nama_produk' => $nama_produk,
			'harga' => $harga,
			'kategori_id' => $kategori_id,
			'status_id' => $status_id
		);

		$this->model_produk->InsertDataInventory($inserted);
		redirect (base_url());
	}

	public function edit($id)
	{
		$record = $this->model_produk->getDataInventoryDetail($id);
		$data = array('detail_produk' => $record);
		$this->load->view('form_edit',$data);
	}

	public function EditData(){
		$no = $this->input->post('no');
		$id_produk = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$harga = $this->input->post('harga');
		$kategori_id = $this->input->post('kategori_id');
		$status_id = $this->input->post('status_id');

		$inserted = array(
			'nama_produk' => $nama_produk,
			'harga' => $harga,
			'kategori_id' => $kategori_id,
			'status_id' => $status_id
		);

		$this->model_produk->EditDataInventory($inserted, $id_produk);
		redirect (base_url());
	}

	public function DeleteData($id_produk){
		$this->model_produk->DeleteDataInventory($id_produk);
		redirect(base_url());
	}
}
