<?php

class Kecamatan_model{
    private $table = "provinsi";
    private $db;

    public function __construct(){
        $this->db =  new Database;
    }

    public function getAllDataKecamatan(){
        // $this->db->query("SELECT * FROM kecamatan");
        // return $this->db->resultSet();

        $this->db->query("SELECT kecamatan.nama_kecamatan, kecamatan.id_kecamatan, kecamatan.id_kabupaten, kabupaten.nama_kabupaten FROM kecamatan INNER JOIN kabupaten ON kecamatan.id_kabupaten = kabupaten.id_kabupaten");
        return $this->db->resultSet();
    }

    public function tambahDataKecamatan($data){
        $data["id_kecamatan"] = $data["id_kabupaten"]."_".$data["nama_kecamatan"];
        $query = "INSERT INTO kecamatan
                    VALUES 
                    (:id_kecamatan, :id_kabupaten, :nama_kecamatan)";

            $this->db->query($query);
            $this->db->bind("id_kecamatan", $data["id_kecamatan"]);
            $this->db->bind("id_kabupaten", $data["id_kabupaten"]);
            $this->db->bind("nama_kecamatan", $data["nama_kecamatan"]);

            $this->db->execute();

            return 1;
    }

    public function hapusDataKecamatan($id){
        $query = "DELETE FROM kecamatan WHERE id_kecamatan=:id_kecamatan";
        $this->db->query($query);
        $this->db->bind("id_kecamatan", $id);
        $this->db->execute();

        return 1;
    }
}