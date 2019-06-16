<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_inventaris extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('inventaris')
                 ->order_by('id_barang', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("inventaris", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_barang)
    {

        $query = $this->db->where("id_barang", $id_barang)
                ->get("inventaris");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id) 
    {

        $query = $this->db->update("inventaris", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("inventaris", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}