<?php 

class Tambah_Data extends Controller {
    public function index() {
        $data["title"] = "Tambah Data";
        $this->view("templates/header", $data);
        $this->view("tambah_data/index");
        $this->view("templates/footer");
    }

}