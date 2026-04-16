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

	public function barang()
	{
		$this->load->view('Sistem/_header');
		$this->load->view('Sistem/dashboard_barang');
	}

    public function getBarangPaginate()
{
    $limit  = $this->input->get('limit') ?? 50;
    $page   = $this->input->get('page') ?? 1;
    $search = $this->input->get('search');
    $jenis  = $this->input->get('jenis');
    $start  = $this->input->get('start');
    $end    = $this->input->get('end');

    $offset = ($page - 1) * $limit;

    $this->db->from('arsip_pkb');
    $this->db->where('jenis_angkutan', 'barang');

    // SEARCH
    if($search){
        $this->db->group_start();
        $this->db->like('no_uji_kir', $search);
        $this->db->or_like('no_kendaraan', $search);
        $this->db->group_end();
    }

    // FILTER JENIS
    if($jenis){
        $this->db->like('LOWER(jenis_kendaraan)', strtolower($jenis));
    }

    // FILTER TANGGAL
    if($start){
        $this->db->where('tgl_uji_kir >=', $start);
    }

    if($end){
        $this->db->where('tgl_uji_kir <=', $end);
    }

    $total = $this->db->count_all_results('', false);

    $this->db->order_by('tgl_uji_kir', 'DESC');
    $this->db->limit($limit, $offset);
    $data = $this->db->get()->result();

    echo json_encode([
        'data' => $data,
        'total' => $total
    ]);
}

	public function umum()
	{
		$this->load->view('Sistem/_header');
		$this->load->view('Sistem/dashboard_penumpang');
	}

      public function getUmumPaginate()
{
    $limit  = $this->input->get('limit') ?? 50;
    $page   = $this->input->get('page') ?? 1;
    $search = $this->input->get('search');

    $offset = ($page - 1) * $limit;

    // FILTER WAJIB: barang
    $this->db->from('arsip_pkb');
    $this->db->where('jenis_angkutan', 'penumpang');

    // SEARCH
    if($search){
        $this->db->group_start();
        $this->db->like('no_uji_kir', $search);
        $this->db->or_like('no_kendaraan', $search);
        $this->db->group_end();
    }

    // TOTAL DATA
    $total = $this->db->count_all_results('', false);

    // DATA
    $this->db->order_by('tgl_uji_kir', 'DESC');
    $this->db->limit($limit, $offset);
    $data = $this->db->get()->result();

    echo json_encode([
        'data'  => $data,
        'total' => $total
    ]);
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