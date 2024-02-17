<?php

namespace App\Vendas;

class Produto{

    public $codigo,$descricao,$cta;
    public $r = '';

    public function cad_produto($codigo,$descricao){
        $this->codigo = $codigo;
        $this->descricao = $descricao;
    }

    public function imprimir($cta){
        if ($cta == 1){
          $r = '---------------- Produtos ---------------- ' . '<br>' ;
        }else{
          $r = '';  
        }
        $r.= 'Codigo: ' . $this->codigo . ' | ';
        $r.= $this->descricao . '<br>';
        // $r.= 'Descrição: ' . $this->descricao . '<br>';

        return $r;
    }

}