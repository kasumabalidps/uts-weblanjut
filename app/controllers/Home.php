<?php

class Home extends Controller {
    public function index() {
        $this->view('template/navbar');
        $this->view('home/index');
    }
}
