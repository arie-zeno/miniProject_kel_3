<?php

class Pendidikan_model{
    private $table = "provinsi";
    private $db;

    public function __construct(){
        $this->db =  new Database;
    }

    public function getAllDataPendidikan(){
        $this->db->query("SELECT * FROM pendidikan");
        return $this->db->resultSet();
    }

    public function tambahDataPendidikan($data){
        $query = "INSERT INTO pendidikan
                    VALUES 
                    (:id_pendidikan, :nama_pendidikan)";

            $this->db->query($query);
            $this->db->bind("id_pendidikan", $data["id_pendidikan"]);
            $this->db->bind("nama_pendidikan", $data["nama_pendidikan"]);

            $this->db->execute();

            return 1;
    }

    public function hapusDataPendidikan($id){
        $query = "DELETE FROM pendidikan WHERE id_pendidikan=:id_pendidikan";
        $this->db->query($query);
        $this->db->bind("id_pendidikan", $id);
        $this->db->execute();

        return 1;
    }

}