<?php

class Pengisian extends Controller {
    public function index() {
        $this->view('template/header');
        $this->view('pengisian/index');
    }
}
