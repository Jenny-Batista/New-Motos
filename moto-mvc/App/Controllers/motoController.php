<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\motos;

class motoController extends Controller {
    
    public function index() {
        //$clients = Clients::getAll();
        //$this->view('clients', ['clients' -> $clients]);
    }
    
    public function marca($moto_marca) {
        $motosModel = new Moto();
        $motos = $motosModel->getAll($motos);

        $this->view('moto', ['moto_marca' -> $moto_marca]);
    }
}