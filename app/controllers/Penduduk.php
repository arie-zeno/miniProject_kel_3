<?php class Penduduk extends Controller{
        public function detail($nik){
            $data["title"] = "Detail";
            $data["detail_penduduk"] = $this->model("Penduduk_model")->getPendudukById($nik);
            $this->view("templates/header", $data);
            $this->view("Penduduk/detail", $data);
            $this->view("templates/footer");
        }

        public function tambah(){
            if($this->model("Penduduk_model")->tambahDataPenduduk($_POST) > 0){
                header("Location: " . BASEURL . "/Dashboard/Penduduk");
                exit;
            }
        }

        public function tambahProv(){
            if($this->model("Provinsi_model")->tambahDataProvinsi($_POST) > 0){
                // echo"
                // <script>
                // document.location.href = '".BASEURL."';
                // </script>
                // ";
                header("Location: " . BASEURL . "/Dashboard");
                exit;
            }
        }
        public function tambahKab(){
            if($this->model("Kabupaten_model")->tambahDataKabupaten($_POST) > 0){
                header("Location: " . BASEURL . "/Dashboard");
                exit;
            }
        }
        public function tambahKec(){
            if($this->model("Kecamatan_model")->tambahDataKecamatan($_POST) > 0){
                header("Location: " . BASEURL . "/Dashboard");
                exit;
            }
        }
        public function tambahKel(){
            if($this->model("Kelurahan_model")->tambahDataKelurahan($_POST) > 0){
                header("Location: " . BASEURL . "/Dashboard");
                exit;
            }
        }
        public function tambahAgm(){
            if($this->model("Agama_model")->tambahDataAgama($_POST) > 0){
                header("Location: " . BASEURL . "/Dashboard");
                exit;
            }
        }

        public function tambahPkr(){
            if($this->model("Pekerjaan_model")->tambahDataPekerjaan($_POST) > 0){
                header("Location: " . BASEURL);
                exit;
            }
        }

        public function tambahPen(){
            if($this->model("Pendidikan_model")->tambahDataPendidikan($_POST) > 0){
                header("Location: " . BASEURL);
                exit;
            }
        }
}