<?php
session_start();
// var_dump($_SESSION);die();
// artinya belum login, karena session dibuat ketika user sudah melakukan login
if (empty($_SESSION)) {
    header('Location:' . BASEURL . '/login');
} 

class HomeSI extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
       
        $this->view('templates/headersI', $data);
        $this->view('homesi/index', $data);
        $this->view('templates/footerSI');
    }
}