<?php

class Provinsi_model{
    private $table = "provinsi";
    private $db;

    public function __construct(){
        $this->db =  new Database;
    }

    public function getAllDataProvinsi(){
        $this->db->query("SELECT * FROM provinsi");
        return $this->db->resultSet();
    }

    public function tambahDataProvinsi($data){
        $data["id_provinsi"] = explode(" ", $data["nama_provinsi"]) ;
        $data["id_provinsi"] = $data["id_provinsi"][0]."_".$data["id_provinsi"][1];
        $query = "INSERT INTO provinsi
                    VALUES 
                    (:id_provinsi, :nama_provinsi)";

            $this->db->query($query);
            $this->db->bind("id_provinsi", $data["id_provinsi"]);
            $this->db->bind("nama_provinsi", $data["nama_provinsi"]);

            $this->db->execute();

            return 1;
    }

    public function hapusDataProvinsi($id){
        $query = "DELETE FROM provinsi WHERE id_provinsi=:id_provinsi";
        $this->db->query($query);
        $this->db->bind("id_provinsi", $id);
        $this->db->execute();

        return 1;
    }
}