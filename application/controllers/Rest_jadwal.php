<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class Rest_jadwal extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data mahasiswa
    function index_get() {
        $kode_jadwal = $this->get('jadwal_b4t');
        if ($kode_jadwal == '') {
            $jadwal_b4t = $this->db->get('jadwal_b4t')->result();
        } else {
            $this->db->where('kode_jadwal', $kode_jadwal);
            $jadwal_b4t = $this->db->get('jadwal_b4t')->result();
        }
        $this->response($jadwal_b4t, 200);
    }
 
    // insert new data to mahasiswa
    function index_post() {
        $data = array(
                    'kode_jadwal'   => $this->post('kode_jadwal'),
                    'date'          => $this->post('date'),
                    'date_end'      => $this->post('date_end'),
                    'venue'         => $this->post('venue'),
                    'judul'         => $this->post('judul'),
                    'deskripsi'     => $this->post('deskripsi'));
        $insert = $this->db->insert('jadwal_b4t', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data mahasiswa
    function index_put() {
        $kode_jadwal= $this->put('kode_jadwal');
        $data = array(
                    'date'          => $this->post('date'),
                    'date_end'      => $this->post('date_end'),
                    'venue'         => $this->post('venue'),
                    'judul'         => $this->post('judul'),
                    'deskripsi'     => $this->post('deskripsi'));
        $this->db->where('kode_jadwal', $kode_jadwal);
        $update = $this->db->update('kode_jadwal', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete mahasiswa
    function index_delete() {
        $kode_jadwal = $this->delete('kode_jadwal');
        $this->db->where('kode_jadwal', $kode_jadwal);
        $delete = $this->db->delete('jadwal_b4t');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}