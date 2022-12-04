<?php
session_start();
class Login extends Controller{
    public function index ()
    {
        $data['judul'] = '';
        $data['user'] = $this->model('user_model')->getAllUser();
        $this->view('templates/headerLogin', $data);
        // $this->view('templates/homeSI', $data);
        $this->view('login/login' , $data);
        $this->view('templates/footerSI');
    }

    public function tambah()
    {
        // var_dump($_POST);die();
        try {
            $this->model('user_model')->login($_POST);
        } catch (Exception $e) {
            $this->view('templates/headerLogin');
            $this->view('login/login', [
                'pesan' => $e->getMessage(),
            ]);
            
            // $this->view('templates/homeSI', $data);
            $this->view('templates/footerSI');
        }
    }

    public function logout()
    {
        // Hapus session 
        session_destroy();
        // Hapus user_session 
        header("Location: " .BASEURL."/login");
        return true;
    }
    
}

?>