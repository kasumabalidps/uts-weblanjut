<?php

class Loket extends Controller {
    public function index() {
        $this->view('template/header');
        $this->view('template/navbar');
        $this->view('loket/index');
    }
    public function berhasil() {
        $this->view('template/header');
        $this->view('template/navbar');
        $this->view('loket/berhasil');
    }
    public function pesanan() {
        $data['nama'] = $_POST['nama'];
        $data['nomer'] = $_POST['nomer'];
        $data['kategori'] = $_POST['kategori'];
        $data['deskripsi'] = $_POST['deskripsi'];
        $data['jumlah'] = $_POST['jumlah'];

        $this->model('Global_model')->insertData($data);
        header('Location: ' . BASEURL . '/loket/berhasil');
        exit;
    }
}
