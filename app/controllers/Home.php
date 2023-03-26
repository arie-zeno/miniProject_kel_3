<?php

class Home extends Controller{
    public function index(){
        $data["title"] = "Halaman utama";
        $data["penduduk"] = $this->model("Penduduk_model")->getAllDataPenduduk();
        $data["provinsi"] = $this->model("Provinsi_model")->getAllDataProvinsi();
        $data["kabupaten"] = $this->model("Kabupaten_model")->getAllDataKabupaten();
        $data["kecamatan"] = $this->model("Kecamatan_model")->getAllDataKecamatan();
        $data["kelurahan"] = $this->model("Kelurahan_model")->getAllDataKelurahan();
        $data["pekerjaan"] = $this->model("Pekerjaan_model")->getAllDataPekerjaan();
        $data["pendidikan"] = $this->model("Pendidikan_model")->getAllDataPendidikan();
        $data["agama"] = $this->model("Agama_model")->getAllDataAgama();
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }

    // public function tambah(){
    //     if($this->model("Penduduk_model")->tambahDataPenduduk($_POST) > 0){
    //         header("Location: " . BASEURL . "/home");
    //         exit;
    //     }
    // }

    // public function detail($nik){
    //     $data["title"] = "Detail";
    //     $data["detail_penduduk"] = $this->model("Penduduk_model")->getPendudukById($nik);
    //     $this->view("templates/header", $data);
    //     $this->view("home/detail", $data);
    //     $this->view("templates/footer");
    // }

}