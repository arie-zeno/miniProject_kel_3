<?php

class Kabupaten_model{
    private $table = "provinsi";
    private $db;

    public function __construct(){
        $this->db =  new Database;
    }

    public function getAllDataKabupaten(){
        $this->db->query("SELECT kabupaten.nama_kabupaten, kabupaten.id_kabupaten, kabupaten.id_provinsi, provinsi.nama_provinsi FROM kabupaten INNER JOIN provinsi ON kabupaten.id_provinsi = provinsi.id_provinsi");
        return $this->db->resultSet();

    }

    public function tambahDataKabupaten($data){
        $data["id_kabupaten"] = $data["id_provinsi"]."_".$data["nama_kabupaten"];
        $query = "INSERT INTO kabupaten
                    VALUES 
                    (:id_kabupaten, :id_provinsi, :nama_kabupaten)";

            $this->db->query($query);
            $this->db->bind("id_kabupaten", $data["id_kabupaten"]);
            $this->db->bind("id_provinsi", $data["id_provinsi"]);
            $this->db->bind("nama_kabupaten", $data["nama_kabupaten"]);

            $this->db->execute();

            return 1;
    }

    public function hapusDataKabupaten($id){
        $query = "DELETE FROM kabupaten WHERE id_kabupaten=:id_kabupaten";
        $this->db->query($query);
        $this->db->bind("id_kabupaten", $id);
        $this->db->execute();

        return 1;
    }
}