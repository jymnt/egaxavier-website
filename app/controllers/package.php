<?php
session_start();
// var_dump($_SESSION);die();
// artinya belum login, karena session dibuat ketika user sudah melakukan login
if (empty($_SESSION)) {
    header('Location:' . BASEURL . '/login');
} 
class Package extends Controller{
    public function index ()
    {
        $data['judul'] = 'Daftar Package';
        $data['package'] = $this->model('package_model')->getAllPackage();
        // $data['package_relation'] = $this->model('package_model')->getAllPackageWithPaket();
        // echo '<pre>'; print_r($data['package'][0]); echo '</pre>';die();
        $this->view('templates/headerSI', $data);
        $this->view('Package/index' , $data); 
        $this->view('templates/footerSI');
    } 

    public function tambah()
    {
        if($this->model('package_model')->tambahDataPackage($_POST, $_FILES) > 0){
            Flasher::setFlash('berhasil', ' ditambahkan', 'success');
            header('Location: ' . BASEURL . '/package');
            exit;
        }else{
            Flasher::setFlash('gagal', ' ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/package');
            exit;
        }
    }
 
    public function hapus($id)
    {
        if($this->model('package_model')->hapusDataPackage($id) > 0){
            Flasher::setFlash('berhasil', ' dihapus', 'success');
            header('Location: ' . BASEURL . '/Package');
            exit;
        }else{
            Flasher::setFlash('gagal', ' dihapus', 'danger');
            header('Location: ' . BASEURL . '/Package');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('package_model')->getPackageById($_POST['id_package']));
    }
    
    public function ubah()
    {
      
      if($this->model('package_model')->ubahDataPackage($_POST, $_FILES) > 0){
          Flasher::setFlash('berhasil', ' diubah', 'success');
          header('Location: ' . BASEURL . '/Package');
          exit;
      }else{
          Flasher::setFlash('gagal', ' diubah', 'danger');
          header('Location: ' . BASEURL . '/Package');
          exit;
      }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Package';
        $data['Package'] = $this->model('Package_model')->cariDataPackage();
        $this->view('templates/headerSI', $data);
        $this->view('package/index' , $data);
        $this->view('templates/footerSI');
    }
}

?>