<?php

class Home extends Controller {
    public function index() {
        $this->view('template/header');
        $this->view('template/navbar');
        $this->view('home/index');
        $this->view('template/footer');
    }
}
