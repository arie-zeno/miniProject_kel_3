<?php

class Pekerjaan_model{
    private $table = "provinsi";
    private $db;

    public function __construct(){
        $this->db =  new Database;
    }

    public function getAllDataPekerjaan(){
        $this->db->query("SELECT * FROM pekerjaan");
        return $this->db->resultSet();
    }

    public function tambahDataPekerjaan($data){
        $query = "INSERT INTO pekerjaan
                    VALUES 
                    (:id_pekerjaan, :nama_pekerjaan)";

            $this->db->query($query);
            $this->db->bind("id_pekerjaan", $data["id_pekerjaan"]);
            $this->db->bind("nama_pekerjaan", $data["nama_pekerjaan"]);

            $this->db->execute();

            return 1;
    }

    public function hapusDataPekerjaan($id){
        $query = "DELETE FROM pekerjaan WHERE id_pekerjaan=:id_pekerjaan";
        $this->db->query($query);
        $this->db->bind("id_pekerjaan", $id);
        $this->db->execute();

        return 1;
    }

}