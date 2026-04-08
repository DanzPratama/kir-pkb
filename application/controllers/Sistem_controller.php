<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistem_controller extends CI_Controller {

	/**
	 * DEVELOPED BY DANZDEV.ID
     * https://danzdev.id/
	 */

       public function __construct() {
        parent::__construct();
        $this->load->model('Arsip_model');
    }


	public function index()
	{
		$this->load->view('Sistem/_header');
		$this->load->view('Sistem/dashboard');
	}


	public function arsip()
	{
		$this->load->view('Sistem/_header');
		$this->load->view('Sistem/arsip');
	}


    public function getData() {
        echo json_encode($this->Arsip_model->getAll());
    }

    public function store() {
        $data = $this->input->post();

        $insert = $this->Arsip_model->insert($data);

        echo json_encode([
            'status' => $insert ? true : false
        ]);
    }

    public function delete($id) {
        $delete = $this->Arsip_model->delete($id);

        echo json_encode([
            'status' => $delete ? true : false
        ]);
    }

    public function edit($id) {
        echo json_encode($this->Arsip_model->getById($id));
    }

    public function update($id) {
        $data = $this->input->post();

        $update = $this->Arsip_model->update($id, $data);

        echo json_encode([
            'status' => $update ? true : false
        ]);
    }


}