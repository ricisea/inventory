<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_produk extends CI_Model {
    public function getAllDataInventory(){
        $this->db->select('produk.*, kategori.nama_kategori as category_name, status.nama_status as status_name');
        $this->db->from('produk');
        $this->db->join('kategori','kategori.id_kategori = produk.kategori_id');
        $this->db->join('status','status.id_status = produk.status_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function getSelectedDataInventory(){
        $this->db->select('produk.*, kategori.nama_kategori as category_name, status.nama_status as status_name');
        $this->db->from('produk');
        $this->db->join('kategori','kategori.id_kategori = produk.kategori_id');
        $this->db->join('status','status.id_status = produk.status_id');
        $this->db->where('status_id',1);
        $query = $this->db->get();
        return $query->result();
    }


    public function InsertDataInventory($data){
        $this->db->insert('produk',$data);
    }

    public function EditDataInventory($data,$id){
        $this->db->where('id_produk',$id);
        $this->db->update('produk',$data);
    }

    public function getDataInventoryDetail($id){
        $this->db->where('id_produk',$id);
        $query = $this->db->get('produk');
        return $query->row();
    }

    public function DeleteDataInventory($id){
        $this->db->where('id_produk',$id);
        $this->db->delete('produk');
    }
}

