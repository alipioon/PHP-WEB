<?php

namespace App\Estoque;

class Estoque{

    private $total;

    public function __construct(){
        // $this->total = rand(1,50); 
        $this->total = '1234560';

    }

    public function getTotal(){
        return $this->total;
    }

}
