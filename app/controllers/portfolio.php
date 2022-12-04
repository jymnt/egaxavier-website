<?php

class portfolio extends Controller{
    public function index ()
    {
        $data['judul'] = 'Daftar Customer';
        $data['galeri_relation'] = $this->model('galeri_model')->getAllPackageWithGaleri();
        // echo '<pre>'; print_r($data['galeri_relation']); echo '</pre>';die();
        $this->view('templates/headerAnother', $data);
        $this->view('another/portfolio' , $data); 
        $this->view('templates/footerAnother');
    } 

    public function indoor($id_package) {
        // $data['galeri_relation'] = $this->model('galeri_model')->getAllGaleriWithPackage();
        $data['galeri_relation'] = $this->model('galeri_model')->getAllGaleriWithPackage($id_package);
        $this->view('templates/headerAnother', );
        $this->view('another/indoor', $data);
        // $this->view('paket/index', $data);
        $this->view('templates/footerAnother');
    }

    public function family($id_package) {
        // $data['galeri_relation'] = $this->model('galeri_model')->getAllGaleriWithPackage();
        $data['galeri_relation'] = $this->model('galeri_model')->getAllGaleriWithPackage($id_package);
        $this->view('templates/headerAnother', );
        $this->view('another/family-session', $data);
        // $this->view('paket/index', $data);
        $this->view('templates/footer');
    }

    public function wedding($id_package) {
        // $data['galeri_relation'] = $this->model('galeri_model')->getAllGaleriWithPackage();
        $data['galeri_relation'] = $this->model('galeri_model')->getAllGaleriWithPackage($id_package);
        $this->view('templates/headerAnother', );
        $this->view('another/weddings-elopements', $data);
        // $this->view('paket/index', $data);
        $this->view('templates/footerAnother');
    }

    
}

?>