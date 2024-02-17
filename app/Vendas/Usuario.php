<?php
 
 namespace App\Vendas;
 
class Usuario{
    public $nome,$idade;

    public function cad_usuario($nome,$idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function imprimir(){
        $r = 'Vendedor -->   ' . $this->nome . '<br><br>';
        #$r.= 'Idade: ' .$this->idade . '<br>';

        return $r;
    }

}