<?php

class Pengisian extends Controller {
    public function index() {
        $this->view('template/navbar');
        $this->view('pengisian/index');
    }
}
