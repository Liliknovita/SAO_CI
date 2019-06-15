<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_proker extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('proker')
                 ->order_by('id_proker', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("proker", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_proker)
    {

        $query = $this->db->where("id_proker", $id_proker)
                ->get("proker");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("proker", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("proker", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}