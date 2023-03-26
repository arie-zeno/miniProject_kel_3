<?php

class Agama_model{
    private $table = "provinsi";
    private $db;

    public function __construct(){
        $this->db =  new Database;
    }

    public function getAllDataAgama(){
        $this->db->query("SELECT * FROM agama");
        return $this->db->resultSet();
    }

    public function tambahDataAgama($data){
        $query = "INSERT INTO agama
                    VALUES 
                    (:id_agama, :nama_agama)";

            $this->db->query($query);
            $this->db->bind("id_agama", $data["id_agama"]);
            $this->db->bind("nama_agama", $data["nama_agama"]);

            $this->db->execute();

            return 1;
    }

    public function hapusDataAgama($id){
        $query = "DELETE FROM agama WHERE id_agama=:id_agama";
        $this->db->query($query);
        $this->db->bind("id_agama", $id);
        $this->db->execute();

        return 1;
    }
}