<?php
session_start();
// var_dump($_SESSION);die();
// artinya belum login, karena session dibuat ketika user sudah melakukan login
if (empty($_SESSION)) {
    header('Location:' . BASEURL . '/login');
} 
class Customer extends Controller{
    public function index ()
    {
        $data['judul'] = 'Daftar Customer';
        $data['cust'] = $this->model('customer_model')->getAllCustomer();
        $this->view('templates/headerSI', $data);
        $this->view('customer/index' , $data);
        $this->view('templates/footerSI');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Customer';
        $data['cust'] = $this->model('customer_model')->getCustomerById($id);
        $this->view('templates/headerSI', $data);
        $this->view('customer/detail' , $data);
        $this->view('templates/footerSI');
    }

    public function contactUs ()
    {
        $data['judul'] = 'Daftar Customer';
        $data['cust'] = $this->model('customer_model')->getAllCustomer();
        $this->view('templates/headerAnother', $data);
        $this->view('contactUs/index' , $data);
        $this->view('templates/footerAnother');
    }

    public function tambah()
    {
        if($this->model('customer_model')->tambahDataCustomer($_POST) > 0){
            Flasher::setFlash('berhasil', ' ditambahkan', 'success');
            header('Location: ' . BASEURL . '/customer');
            exit;
        }else{
            Flasher::setFlash('gagal', ' ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Customer');
            exit;
        }
    }
 
    public function hapus($id)
    {
        if($this->model('Customer_model')->hapusDataCustomer($id) > 0){
            Flasher::setFlash('berhasil', ' dihapus', 'success');
            header('Location: ' . BASEURL . '/Customer');
            exit;
        }else{
            Flasher::setFlash('gagal', ' dihapus', 'danger');
            header('Location: ' . BASEURL . '/Customer');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Customer_model')->getCustomerById($_POST['id_cust']));
    }
      
    public function ubah() 
    {
        if($this->model('Customer_model')->ubahDataCustomer($_POST) > 0){
            Flasher::setFlash('berhasil', ' diubah', 'success');
            header('Location: ' . BASEURL . '/Customer');
            exit;
        }else{
            Flasher::setFlash('gagal', ' diubah', 'danger');
            header('Location: ' . BASEURL . '/Customer');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Customer';
        $data['cust'] = $this->model('Customer_model')->cariDataCustomer();
        $this->view('templates/headerSI', $data);
        $this->view('Customer/index' , $data);
        $this->view('templates/footerSI');
    }
}

?>