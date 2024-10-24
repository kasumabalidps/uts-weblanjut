<?php

class Peserta extends Controller {
    public function index() {
        $this->view('template/header');
        $this->view('peserta/index');
    }
}