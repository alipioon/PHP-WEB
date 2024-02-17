<?php   

class Usuario{

    public $nome,$idade;

    public function cad_usuario($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function imprimir(){
        $r = 'Nome: ' . $this->nome . '<br>';
        $r.= 'Idade: ' . $this->idade . '<br>';

        return $r;
    }

}

?>