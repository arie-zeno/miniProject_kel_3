<?php

class Kelurahan_model{
    private $table = "provinsi";
    private $db;

    public function __construct(){
        $this->db =  new Database;
    }

    public function getAllDataKelurahan(){
        // $this->db->query("SELECT * FROM kelurahan");
        // return $this->db->resultSet();

        $this->db->query("SELECT kelurahan.nama_kelurahan, kelurahan.id_kecamatan, kelurahan.id_kelurahan, kecamatan.nama_kecamatan FROM kelurahan INNER JOIN kecamatan ON kelurahan.id_kecamatan = kecamatan.id_kecamatan");
        return $this->db->resultSet();
    }
    public function tambahDataKelurahan($data){
        $data["id_kelurahan"] = $data["id_kecamatan"]."_".$data["nama_kelurahan"];
        $query = "INSERT INTO kelurahan
                    VALUES 
                    (:id_kelurahan, :id_kecamatan, :nama_kelurahan)";

            $this->db->query($query);
            $this->db->bind("id_kelurahan", $data["id_kelurahan"]);
            $this->db->bind("id_kecamatan", $data["id_kecamatan"]);
            $this->db->bind("nama_kelurahan", $data["nama_kelurahan"]);

            $this->db->execute();

            return 1;
    }

    public function hapusDataKelurahan($id){
        $query = "DELETE FROM kelurahan WHERE id_kelurahan=:id_kelurahan";
        $this->db->query($query);
        $this->db->bind("id_kelurahan", $id);
        $this->db->execute();

        return 1;
    }

}