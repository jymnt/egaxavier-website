<?php
session_start();
// var_dump($_SESSION);die();
// artinya belum login, karena session dibuat ketika user sudah melakukan login
if (empty($_SESSION)) {
    header('Location:' . BASEURL . '/login');
} 
class Paket extends Controller{ 
    public function index ()
    {
        $data['judul'] = 'Daftar Paket';
        $data['paket'] = $this->model('paket_model')->getAllPaket(true);
        $data['package_relation'] = $this->model('paket_model')->getAllPackageWithPaket();
        $data['package'] = $this->model('paket_model')->getAllPackage();
        // echo '<pre>'; print_r($data['package'][0]); echo '</pre>';die();
        $this->view('templates/headerSI', $data);
        $this->view('Paket/index' , $data);
        $this->view('templates/footerSI');
    } 
 
    public function tambah()
    {
        if($this->model('Paket_model')->tambahDataPaket($_POST, $_FILES) > 0){
            Flasher::setFlash('berhasil', ' ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Paket');
            exit;
        }else{
            Flasher::setFlash('gagal', ' ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Paket');
            exit;
        }
    }
 
    public function hapus($id)
    {
        if($this->model('Paket_model')->hapusDataPaket($id) > 0){
            Flasher::setFlash('berhasil', ' dihapus', 'success');
            header('Location: ' . BASEURL . '/Paket');
            exit;
        }else{
            Flasher::setFlash('gagal', ' dihapus', 'danger');
            header('Location: ' . BASEURL . '/Paket');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Paket_model')->getPaketById($_POST['id_paket']));
    }
    
    public function ubah()
    {
        if($this->model('paket_model')->ubahDataPaket($_POST) > 0){
            Flasher::setFlash('berhasil', ' diubah', 'success');
            header('Location: ' . BASEURL . '/Paket');
            exit;
        }else{
            Flasher::setFlash('gagal', ' diubah', 'danger');
            header('Location: ' . BASEURL . '/Paket');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Paket';
        $data['paket'] = $this->model('Paket_model')->cariDataPaket();
        $this->view('templates/headerSI', $data);
        $this->view('Paket/index' , $data);
        $this->view('templates/footerSI');
    }
}

?>