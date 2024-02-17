<?php

namespace App\Estoque;
 
class Produto{

    public $id,$descricao,$qtde;

    public function cad_produto($id,$descricao,$qtde){
        $this->id = $id;
        $this->descricao = $descricao;
        $this->qtde = $qtde;
    }

    public function imprimir(){
        $r = '<br> ID Produto: ' . $this->id . '<br>';
        $r.= 'Descrição: ' . $this->descricao . '<br>';
        $r.= 'Quantidade: ' . $this->qtde . '<br>';

        return $r;
    }

}
