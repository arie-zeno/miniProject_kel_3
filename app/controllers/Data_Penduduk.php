<?php 

class Data_Penduduk extends Controller {
    public function index() {
        $data["title"] = "Data Penduduk";
        $this->view("templates/header", $data);
        $this->view("data_penduduk/index");
        $this->view("templates/footer");
    }

}