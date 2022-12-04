<?php

class isi extends Controller {
    public function index() {

        $this->view('templates/headerAnother', );
        $this->view('another/isi');
        // $this->view('paket/index', $data);
        $this->view('templates/footerAnother');
    }
    
}