<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_inventaris'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Data inventaris',
            'data_inventaris' => $this->model_inventaris->get_all(),

        );

        $this->load->view('data_inventaris', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data inventaris'

        );

        $this->load->view('tambah_inventaris', $data);
    }

    public function simpan()
    {
        $data = array(

			'no'			=> $this->input->post("no"),
			'id_barang' 	=> $this->input->post("id_barang"),
			'nama_barang' 	=> $this->input->post("nama_barang"),
			'tempat' 		=> $this->input->post("tempat"),
			'jumlah' 		=> $this->input->post("jumlah"),
			'keterangan'	=> $this->input->post("keterangan"),

        );

        $this->model_inventaris->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('inventaris/');

    }
  	public function edit($id_barang)
    {
        $id_barang = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Barang',
            'data_inventaris' => $this->model_inventaris->edit($id_barang)

        );

        $this->load->view('edit_inventaris', $data);
    }

    public function update()
    {
        $id['id_barang'] = $this->input->post("id_barang");
        $data = array(

            'no'			=> $this->input->post("no"),
			'id_barang' 	=> $this->input->post("id_barang"),
			'nama_barang' 	=> $this->input->post("nama_barang"),
			'tempat' 		=> $this->input->post("tempat"),
			'jumlah' 		=> $this->input->post("jumlah"),
			'keterangan'	=> $this->input->post("keterangan"),

        );

        $this->model_inventaris->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('inventaris/');

    }

    public function hapus($id_buku)
    {
        $id['id_barang'] = $this->uri->segment(3);

        $this->model_inventaris->hapus($id);

        //redirect
        redirect('inventaris/');

    }

}