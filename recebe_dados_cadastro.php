<?php
    
    require_once 'model.php';
    require_once 'classe_cadastro.php';

    $data = new cadastro();
    
    $loginCadastro = ( isset($_POST['loginCadastro_ajax']) ) ? $_POST['loginCadastro_ajax'] : "";

    if($loginCadastro == 0)
    {
        $data->Logar();
    }
    if($loginCadastro == 1)
    {
        $data->GravarCadastro();
    }
    if($loginCadastro == 3)
    {
        $data->Tabela();
    }

    
    
