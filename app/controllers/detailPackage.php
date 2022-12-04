<?php
// session_start();
// var_dump($_SESSION);die();
// artinya belum login, karena session dibuat ketika user sudah melakukan login

class detailPackage extends Controller{ 

    public function index ($id_package)
    {
        $data['judul'] = '';
        $data['package_relation'] = $this->model('package_model')->getAllPackageWithPaket($id_package);
        // $data['package'] = $this->model('package_model')->getPackageByPackageId($id_package);
        // echo '<pre>'; print_r($data['package_relation']); echo '</pre>';die();
        $this->view('templates/headeranother');
        $this->view('another/detailPackage' , $data);
        $this->view('templates/footerAnother');
    }
    
}

?>