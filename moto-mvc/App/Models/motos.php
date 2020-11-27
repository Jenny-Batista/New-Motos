<?php

namespace App\Models;

use Core\DataBase;

class motos {

    private $table = 'motos';

    public function getAll() {
        $db = Database::getInstance();
        $dados - $db->getList($this->table,'*');
        return $db->getList($this->table,'*');
    }
    public function getByMotoUrl($motoURL) {
        $db = Database::getInstance();
        
        return $db->getList($this->table, '*', ['moto_marca' -> "'" . $moto_marca . "'" ]);
    }
}    