<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karangtaruna extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_m', 'kategori', true);
    }
    public function karangtaruna()
    {
        $data['kategori'] = $this->kategori->getAll();
        $data['title'] = "Karang Taruna";
        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('lembagadesa/karangtaruna');
        $this->load->view('themes/footer');
    }
}
