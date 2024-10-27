<?php

class Peserta extends Controller {
    public function index() {
        $data['peserta'] = $this->model('Global_model')->getPeserta();
        $this->view('template/header');
        $this->view('template/navbar');
        $this->view('peserta/index', $data);
    }
}