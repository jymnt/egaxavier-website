<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['pkt'] = $this->model('paket_model')->getPaket();
        $data['paket'] = $this->model('Paket_model')->getAllPaket();
        $data['package_relation'] = $this->model('paket_model')->getAllPackageWithPaket();
        // var_dump($data);
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        // $this->view('paket/index', $data);
        $this->view('templates/footer');
    }

    public function isi() {
        $data['judul'] = 'Home';
        $data['pkt'] = $this->model('paket_model')->getPaket();
        $data['paket'] = $this->model('Paket_model')->getAllPaket();
        $data['package_relation'] = $this->model('paket_model')->getAllPackageWithPaket();
        // var_dump($data);
        $this->view('templates/headerAnother', $data);
        $this->view('home/isi', $data);
        // $this->view('paket/index', $data);
        $this->view('templates/footerAnother');
    }

    
    
}