<?php

class Pengisian extends Controller {
    public function index() {
        $this->view('template/header');
        $this->view('pengisian/index');
        $this->view('template/footer');
    }
    public function berhasil() {
        $this->view('template/header');
        $this->view('pengisian/berhasil');
        $this->view('template/footer');
    }
    public function daftar() {
        $data['nama'] = $_POST['nama'];
        $data['nomerhp'] = $_POST['nomer'];
        $data['karakter'] = $_POST['karakter'];
        $data['anime'] = $_POST['anime'];
        $data['kategori'] = $_POST['kategori'];
        $data['deskripsi'] = $_POST['deskripsi'];

        $this->model('Global_model')->insertData($data);
        header('Location: ' . BASEURL . '/pengisian/berhasil');
        exit;
    }
}
