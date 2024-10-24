<?php

class Controller {
    public function view($view, $data=[]) {
        echo '<script src="https://cdn.tailwindcss.com"></script>';
        require_once '../app/views/'. $view . '.php';
    }

}
