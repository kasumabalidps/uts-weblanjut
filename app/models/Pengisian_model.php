<?php

class Pengisian_model {
    private $db;

    public function __construct()
    {
        $database_host = 'mysql:host=localhost;dbname=uts-weblanjut';
        $database_user = 'root';
        $database_password = '';
        $database_table = 'peserta';

        try {
            $this->db = new PDO($database_host, $database_user, $database_password);
        } catch (PDOException $e) {
            die('Database Error: ' . $e->getMessage());
        }
    }

    public function insertData($data)
    {
        $query = "INSERT INTO $database_table (nama, nomerhp, karakter, anime, katagori, deskripsi) VALUES (:nama, :nomerhp, :karakter, :anime, :katagori, :deskripsi)";
        $this->db->prepare($query)->execute($data);
    }
}
