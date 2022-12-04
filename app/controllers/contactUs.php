<?php

class contactUs extends Controller{
    public function index ()
    {
        $data['judul'] = 'Daftar Customer';
        $data['cust'] = $this->model('customer_model')->getAllCustomer();
        $this->view('templates/headerAnother', $data);
        $this->view('another/contactUs' , $data);
        $this->view('templates/footerAnother');
    }



  public function tambah() {
      if ($this->model('customer_model')->tambahDataCustomer($_POST) > 0) {
        $array = [
          'status' => 'success'
          ];
         echo json_encode($array);
      } else {
        $array = [
          'status' => 'failed'
        ];
       echo json_encode($array);
      }
    }

    
}

?>