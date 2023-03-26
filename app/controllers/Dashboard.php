<?php class Dashboard extends Controller{
        public function index(){
            $data["title"] = "Halaman Admin";
            $data["penduduk"] = $this->model("Penduduk_model")->getAllDataPenduduk();
            $data["provinsi"] = $this->model("Provinsi_model")->getAllDataProvinsi();
            $data["kabupaten"] = $this->model("Kabupaten_model")->getAllDataKabupaten();
            $data["kecamatan"] = $this->model("Kecamatan_model")->getAllDataKecamatan();
            $data["kelurahan"] = $this->model("Kelurahan_model")->getAllDataKelurahan();
            $data["pekerjaan"] = $this->model("Pekerjaan_model")->getAllDataPekerjaan();
            $data["pendidikan"] = $this->model("Pendidikan_model")->getAllDataPendidikan();
            $data["agama"] = $this->model("Agama_model")->getAllDataAgama();
            $this->view("templates/header_dash", $data);
            $this->view("Dashboard/index", $data);
            $this->view("templates/footer_dash");
        }

        public function penduduk(){
            $data["title"] = "Penduduk";
            $data["penduduk"] = $this->model("Penduduk_model")->getAllDataPenduduk();
            $data["provinsi"] = $this->model("Provinsi_model")->getAllDataProvinsi();
            $data["kabupaten"] = $this->model("Kabupaten_model")->getAllDataKabupaten();
            $data["kecamatan"] = $this->model("Kecamatan_model")->getAllDataKecamatan();
            $data["kelurahan"] = $this->model("Kelurahan_model")->getAllDataKelurahan();
            $data["pekerjaan"] = $this->model("Pekerjaan_model")->getAllDataPekerjaan();
            $data["pendidikan"] = $this->model("Pendidikan_model")->getAllDataPendidikan();
            $data["agama"] = $this->model("Agama_model")->getAllDataAgama();
            $this->view("templates/header_dash", $data);
            $this->view("Dashboard/penduduk", $data);
            $this->view("templates/footer_dash");
        }

        public function detail($nik){
            $data["title"] = "Detail";
            $data["detail_penduduk"] = $this->model("Penduduk_model")->getPendudukById($nik);
            $this->view("templates/header_dash", $data);
            $this->view("Dashboard/detail", $data);
            $this->view("templates/footer_dash");
        }

        public function edit($nik){
            $data["title"] = "Edit";
            $data["provinsi"] = $this->model("Provinsi_model")->getAllDataProvinsi();
            $data["kabupaten"] = $this->model("Kabupaten_model")->getAllDataKabupaten();
            $data["kecamatan"] = $this->model("Kecamatan_model")->getAllDataKecamatan();
            $data["kelurahan"] = $this->model("Kelurahan_model")->getAllDataKelurahan();
            $data["pekerjaan"] = $this->model("Pekerjaan_model")->getAllDataPekerjaan();
            $data["pendidikan"] = $this->model("Pendidikan_model")->getAllDataPendidikan();
            $data["agama"] = $this->model("Agama_model")->getAllDataAgama();
            $data["detail_penduduk"] = $this->model("Penduduk_model")->getPendudukById($nik);
            $this->view("templates/header_dash", $data);
            $this->view("Dashboard/edit", $data);
            $this->view("templates/footer_dash");
        }

        public function provinsi(){
            $data["title"] = "Provinsi";
            $data["provinsi"] = $this->model("Provinsi_model")->getAllDataProvinsi();
            $this->view("templates/header_dash", $data);
            $this->view("Dashboard/provinsi", $data);
            $this->view("templates/footer_dash");
        }

        public function kabupaten(){
            $data["title"] = "Kabupaten";
            $data["provinsi"] = $this->model("Provinsi_model")->getAllDataProvinsi();
            $data["kabupaten"] = $this->model("Kabupaten_model")->getAllDataKabupaten();
            $this->view("templates/header_dash", $data);
            $this->view("Dashboard/kabupaten", $data);
            $this->view("templates/footer_dash");
        }

        public function kecamatan(){
            $data["title"] = "Kecamatan";
            $data["kabupaten"] = $this->model("Kabupaten_model")->getAllDataKabupaten();
            $data["kecamatan"] = $this->model("Kecamatan_model")->getAllDataKecamatan();
            $this->view("templates/header_dash", $data);
            $this->view("Dashboard/kecamatan", $data);
            $this->view("templates/footer_dash");
        }

        public function kelurahan(){
            $data["title"] = "Kelurahan";
            $data["kecamatan"] = $this->model("Kecamatan_model")->getAllDataKecamatan();
            $data["kelurahan"] = $this->model("Kelurahan_model")->getAllDataKelurahan();
            $this->view("templates/header_dash", $data);
            $this->view("Dashboard/kelurahan", $data);
            $this->view("templates/footer_dash");
        }

        public function agama(){
            $data["title"] = "Agama";
            $data["agama"] = $this->model("Agama_model")->getAllDataAgama();
            $this->view("templates/header_dash", $data);
            $this->view("Dashboard/agama", $data);
            $this->view("templates/footer_dash");
        }

        public function pendidikan(){
            $data["title"] = "Pendidikan";
            $data["pendidikan"] = $this->model("Pendidikan_model")->getAllDataPendidikan();
            $this->view("templates/header_dash", $data);
            $this->view("Dashboard/pendidikan", $data);
            $this->view("templates/footer_dash");
        }

        public function pekerjaan(){
            $data["title"] = "Pekerjaan";
            $data["pekerjaan"] = $this->model("Pekerjaan_model")->getAllDataPekerjaan();
            $this->view("templates/header_dash", $data);
            $this->view("Dashboard/pekerjaan", $data);
            $this->view("templates/footer_dash");
        }

        public function login(){
            if($_POST["password"] == "123"){
                header("Location: " . BASEURL . "/Dashboard");
            }else{
                echo "
                <script>
                alert('Password Salah');
                document.location.href='".BASEURL."'
                </script>
                ";

                // header("Location: " . BASEURL);
            }
        }

        public function tambah(){
            if($this->model("Penduduk_model")->tambahDataPenduduk($_POST) > 0){
                header("Location: " . BASEURL . "/Dashboard/penduduk");
                exit;
            }
        }

        public function editDataPenduduk(){
            if($this->model("Penduduk_model")->editDataPenduduk($_POST) > 0){
                header("Location: " . BASEURL . "/Dashboard/penduduk");
                exit;
            }
        }

        public function hapus($nik){
            if($this->model("Penduduk_model")->hapusDataPenduduk($nik) > 0){
                header("Location: " . BASEURL . "/Dashboard/penduduk");
                exit;
            }
        }

        public function tambahProv(){
            if($this->model("Provinsi_model")->tambahDataProvinsi($_POST) > 0){
                header("Location: " . BASEURL . "/Dashboard/provinsi");
                exit;
            }
        }

        public function hapusProv($id){
            if($this->model("Provinsi_model")->hapusDataProvinsi($id) > 0){
                header("Location: " . BASEURL . "/Dashboard/provinsi");
                exit;
            }
        }

        public function tambahKab(){
            if($this->model("Kabupaten_model")->tambahDataKabupaten($_POST) > 0){
                header("Location: " . BASEURL . "/Dashboard/kabupaten");
                exit;
            }
        }

        public function hapusKab($id){
            if($this->model("Kabupaten_model")->hapusDataKabupaten($id) > 0){
                header("Location: " . BASEURL . "/Dashboard/kabupaten");
                exit;
            }
        }

        public function tambahKec(){
            if($this->model("Kecamatan_model")->tambahDataKecamatan($_POST) > 0){
                header("Location: " . BASEURL . "/Dashboard/kecamatan");
                exit;
            }
        }

        public function hapusKec($id){
            if($this->model("Kecamatan_model")->hapusDataKecamatan($id) > 0){
                header("Location: " . BASEURL . "/Dashboard/kecamatan");
                exit;
            }
        }

        public function tambahKel(){
            if($this->model("Kelurahan_model")->tambahDataKelurahan($_POST) > 0){
                header("Location: " . BASEURL . "/Dashboard/kelurahan");
                exit;
            }
        }

        public function hapusKel($id){
            if($this->model("Kelurahan_model")->hapusDataKelurahan($id) > 0){
                header("Location: " . BASEURL . "/Dashboard/kelurahan");
                exit;
            }
        }

        public function tambahAgm(){
            if($this->model("Agama_model")->tambahDataAgama($_POST) > 0){
                header("Location: " . BASEURL . "/Dashboard/agama");
                exit;
            }
        }

        public function hapusAgm($id){
            if($this->model("Agama_model")->hapusDataAgama($id) > 0){
                header("Location: " . BASEURL . "/Dashboard/agama");
                exit;
            }
        }

        public function tambahPkr(){
            if($this->model("Pekerjaan_model")->tambahDataPekerjaan($_POST) > 0){
                header("Location: " . BASEURL . "/Dashboard/pekerjaan");
                exit;
            }
        }

        public function hapusPkr($id){
            if($this->model("Pekerjaan_model")->hapusDataPekerjaan($id) > 0){
                header("Location: " . BASEURL . "/Dashboard/pekerjaan");
                exit;
            }
        }

        public function tambahPen(){
            if($this->model("Pendidikan_model")->tambahDataPendidikan($_POST) > 0){
                header("Location: " . BASEURL . "/Dashboard/pendidikan");
                exit;
            }
        }

        public function hapusPen($id){
            if($this->model("Pendidikan_model")->hapusDataPendidikan($id) > 0){
                header("Location: " . BASEURL . "/Dashboard/pendidikan");
                exit;
            }
        }
}