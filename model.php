<?php
class model  
{    
    
    protected $conexao;

    public function __construct()
    {          
        define ('host','localhost');
        define ('usuario','root');
        define ('senha','');
        define ('db', 'bd_robson');
        
        $conexao1 = mysqli_connect (host, usuario, senha, db) or die ('não foi possivel conectar');
        $this->conexao = $conexao1;
    }    
}