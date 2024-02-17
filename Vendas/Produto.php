<?php

class Produto{

    public $id,$descricao;

    public function cad_produto($id,$descricao){
        $this->id = $id;
        $this->descricao = $descricao;

    }

    public function imprimir(){
    
        $r = 'Produto id: ' . $this->id . ' | ';
        $r.= 'Descrição: ' . $this->descricao . '</br>';

        return $r;

    }

}

?>