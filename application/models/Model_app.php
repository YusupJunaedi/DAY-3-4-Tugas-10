<?php

class Model_app extends CI_Model {

    function getAllProduk(){
        return $this->db->get('produk')->result_array();
    }

    function insertProduk($data){
        return $this->db->insert('produk', $data);
    }

    function updateProduk($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('produk', $data);
    }

    function deleteProduk($id){
        $this->db->where('id', $id);
        return $this->db->delete('produk');
    }

}