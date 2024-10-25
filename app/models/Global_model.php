<?php

class Global_model {
    private $db;

    public function __construct()
    {
        $database_host = 'mysql:host=localhost;dbname=uts-weblanjut';
        $database_user = 'root';
        $database_password = '';

        try {
            $this->db = new PDO($database_host, $database_user, $database_password);
        } catch (PDOException $e) {
            die('Database Error: ' . $e->getMessage());
        }
    }

    public function insertData($data)
    {
        $query = "INSERT INTO peserta (id, nama, nomerhp, karakter, anime, kategori, deskripsi) 
        VALUES (NULL, :nama, :nomerhp, :karakter, :anime, :kategori, :deskripsi)";
        $this->db->prepare($query)->execute($data);
    }

    public function getPeserta() {
        
    }
}
