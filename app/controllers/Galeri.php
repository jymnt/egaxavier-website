<?php
session_start();
// var_dump($_SESSION);die();
// artinya belum login, karena session dibuat ketika user sudah melakukan login
if (empty($_SESSION)) {
    header('Location:' . BASEURL . '/login');
} 
class Galeri extends Controller{
    public function index ()
    {
        $data['judul'] = 'Daftar Galeri';
        $data['galeri'] = $this->model('Galeri_model')->getAllGaleri();
        $data['package'] = $this->model('paket_model')->getAllPackage();
        $this->view('templates/headerSI', $data);
        $this->view('Galeri/index' , $data);
        $this->view('templates/footerSI');
    } 

    public function detail($id)
    {
        $data['judul'] = 'Detail Galeri';
        $data['galeri'] = $this->model('Galeri_model')->getGaleriById($id);
        $this->view('templates/headerSI', $data);
        $this->view('Galeri/detail' , $data);
        $this->view('templates/footerSI');
    }

    public function tambah()
    {
        if($this->model('Galeri_model')->tambahDataGaleri($_POST, $_FILES) > 0){
            Flasher::setFlash('berhasil', ' ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Galeri');
            exit;
        }else{
            Flasher::setFlash('gagal', ' ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Galeri');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('Galeri_model')->hapusDataGaleri($id) > 0){
            Flasher::setFlash('berhasil', ' dihapus', 'success');
            header('Location: ' . BASEURL . '/Galeri');
            exit;
        }else{
            Flasher::setFlash('gagal', ' dihapus', 'danger');
            header('Location: ' . BASEURL . '/Galeri');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Galeri_model')->getGaleriById($_POST['id_galeri']));
    }
    public function ubah()
    {
        if($this->model('Galeri_model')->ubahDataGaleri($_POST) > 0){
            Flasher::setFlash('berhasil', ' diubah', 'success');
            header('Location: ' . BASEURL . '/Galeri');
            exit;
        }else{
            Flasher::setFlash('gagal', ' diubah', 'danger');
            header('Location: ' . BASEURL . '/Galeri');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Galeri';
        $data['galeri'] = $this->model('Galeri_model')->cariDataGaleri();
        $this->view('templates/headerSI', $data);
        $this->view('Galeri/index' , $data);
        $this->view('templates/footerSI');
    }

}

?>