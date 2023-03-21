<?php 

class Colaborador extends CI_Controller {
    public function index() { 
        // $this->load->view("pages/unique/login");

        $data = [
            "view" => "pages/home",
            "data" => [],
        ];

        $this->load->view("application", $data);
    }
}

?>