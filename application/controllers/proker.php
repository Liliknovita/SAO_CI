<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class proker extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_proker'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Data proker',
            'data_proker' => $this->model_proker->get_all(),

        );

        $this->load->view('data_proker', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data proker'

        );

        $this->load->view('tambah_proker', $data);
    }

    public function simpan()
    {
        $data = array(

            'nm_proker'       => $this->input->post("nm_proker"),
            'tgl_proker'         => $this->input->post("tgl_proker"),
            'tempat'    => $this->input->post("tempat"),
            'id_proker'         => $this->input->post("id_proker"),
            'id_pengurus'         => $this->input->post("id_pengurus"),

        );

        $this->model_proker->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('proker/');

    }

    public function edit($id_proker)
    {
        $id_proker = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data proker',
            'data_proker' => $this->model_proker->edit($id_proker)

        );

        $this->load->view('edit_proker', $data);
    }

    public function update()
    {
        $id['id_proker'] = $this->input->post("id_proker");
        $data = array(

         'nm_proker'       => $this->input->post("nm_proker"),
        'tgl_proker'         => $this->input->post("tgl_proker"),
        'tempat'    => $this->input->post("tempat"),
        'id_proker'         => $this->input->post("id_proker"),
        'id_pengurus'         => $this->input->post("id_pengurus"),

        );

        $this->model_proker->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('proker/');

    }

    public function hapus($id_proker)
    {
        $id['id_proker'] = $this->uri->segment(3);

        $this->model_proker->hapus($id);

        //redirect
        redirect('proker/');

    }

}