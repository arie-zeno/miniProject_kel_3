<?php

class Penduduk_model{
    private $table = "penduduk";
    private $db;

    public function __construct(){
        $this->db =  new Database;
    }

    public function getAllDataPenduduk(){
        $this->db->query("SELECT penduduk.nik, penduduk.nama, penduduk.alamat, penduduk.ttl, kelurahan.nama_kelurahan, kecamatan.nama_kecamatan, kabupaten.nama_kabupaten, provinsi.nama_provinsi, agama.nama_agama
        FROM ((((penduduk INNER JOIN kelurahan ON penduduk.id_kelurahan = kelurahan.id_kelurahan) 
        INNER JOIN kecamatan ON kelurahan.id_kecamatan = kecamatan.id_kecamatan)
        INNER JOIN kabupaten ON kecamatan.id_kabupaten = kabupaten.id_kabupaten)
        INNER JOIN provinsi ON kabupaten.id_provinsi = provinsi.id_provinsi)
        INNER JOIN agama ON penduduk.id_agama = agama.id_agama        
        ");
        return $this->db->resultSet();
    }

    public function getPendudukById($nik){
        $this->db->query("SELECT * FROM ((((((penduduk INNER JOIN kelurahan ON penduduk.id_kelurahan = kelurahan.id_kelurahan) 
        INNER JOIN kecamatan ON kelurahan.id_kecamatan = kecamatan.id_kecamatan)
        INNER JOIN kabupaten ON kecamatan.id_kabupaten = kabupaten.id_kabupaten)
        INNER JOIN provinsi ON kabupaten.id_provinsi = provinsi.id_provinsi)
        INNER JOIN agama ON penduduk.id_agama = agama.id_agama)
        INNER JOIN pendidikan ON penduduk.id_pendidikan = pendidikan.id_pendidikan)
        INNER JOIN pekerjaan ON penduduk.id_pekerjaan = pekerjaan.id_pekerjaan WHERE nik=:nik");
        $this->db->bind("nik", $nik);
        return $this->db->single();
    }

    public function tambahDataPenduduk($data){
        $query = "INSERT INTO penduduk
                    VALUES 
                    (:nik, :nama, :ttl, :jenis_kelamin, :id_pendidikan, :alamat, :id_provinsi, :id_kabupaten, :id_kecamatan, :id_kelurahan, :id_pekerjaan, :id_agama, :status_perkawinan, :kewarganegaraan, :gol_darah)";

            $this->db->query($query);
            $this->db->bind("nik", $data["nik"]);
            $this->db->bind("nama", $data["nama"]);
            $this->db->bind("ttl", $data["ttl"]);
            $this->db->bind("jenis_kelamin", $data["jenis_kelamin"]);
            $this->db->bind("id_pendidikan", $data["pendidikan"]);
            $this->db->bind("alamat", $data["alamat"]);
            $this->db->bind("id_provinsi", $data["provinsi"]);
            $this->db->bind("id_kabupaten", $data["kabupaten"]);
            $this->db->bind("id_kecamatan", $data["kecamatan"]);
            $this->db->bind("id_kelurahan", $data["kelurahan"]);
            $this->db->bind("id_pekerjaan", $data["pekerjaan"]);
            $this->db->bind("id_agama", $data["agama"]);
            $this->db->bind("status_perkawinan", $data["status_perkawinan"]);
            $this->db->bind("kewarganegaraan", $data["kewarganegaraan"]);
            $this->db->bind("gol_darah", $data["gol_darah"]);

            $this->db->execute();

            return 1;
    }

    public function editDataPenduduk($data){
        $query = "UPDATE penduduk SET
                    nik=:nik, nama=:nama, ttl=:ttl, jenis_kelamin=:jenis_kelamin, id_pendidikan=:id_pendidikan, alamat=:alamat, id_provinsi=:id_provinsi, id_kabupaten=:id_kabupaten, id_kecamatan=:id_kecamatan, id_kelurahan=:id_kelurahan, id_pekerjaan=:id_pekerjaan, id_agama=:id_agama, status_perkawinan=:status_perkawinan, kewarganegaraan=:kewarganegaraan, gol_darah=:gol_darah WHERE nik=:nik";

            $this->db->query($query);
            $this->db->bind("nik", $data["nik"]);
            $this->db->bind("nama", $data["nama"]);
            $this->db->bind("ttl", $data["ttl"]);
            $this->db->bind("jenis_kelamin", $data["jenis_kelamin"]);
            $this->db->bind("id_pendidikan", $data["pendidikan"]);
            $this->db->bind("alamat", $data["alamat"]);
            $this->db->bind("id_provinsi", $data["provinsi"]);
            $this->db->bind("id_kabupaten", $data["kabupaten"]);
            $this->db->bind("id_kecamatan", $data["kecamatan"]);
            $this->db->bind("id_kelurahan", $data["kelurahan"]);
            $this->db->bind("id_pekerjaan", $data["pekerjaan"]);
            $this->db->bind("id_agama", $data["agama"]);
            $this->db->bind("status_perkawinan", $data["status_perkawinan"]);
            $this->db->bind("kewarganegaraan", $data["kewarganegaraan"]);
            $this->db->bind("gol_darah", $data["gol_darah"]);

            $this->db->execute();

            return 1;
    }

    public function hapusDataPenduduk($nik){
        $query = "DELETE FROM penduduk WHERE nik=:nik";
        $this->db->query($query);
        $this->db->bind("nik", $nik);
        $this->db->execute();

        return 1;
    }


}