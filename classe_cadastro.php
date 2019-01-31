<?php
class cadastro extends model
{
  var $nome_cadastro;
  var $email_cadastro;
  var $senha_cadastro;
  var $valida_login_cadastro;
  var $search_cadastro;
  var $button_cadastro;
  var $pagAtual_cadastro;
  var $loginCadastro_cadastro;
  //quatidade de registro por página
  var $itempagina = 10;



  public function GravarCadastro()    
  {            
    $this->nome_cadastro  = ( isset($_POST['nome_ajax']) )  ? $_POST['nome_ajax']  : ""; 
    $this->email_cadastro = ( isset($_POST['email_ajax']) ) ? $_POST['email_ajax'] : "";
    $this->senha_cadastro = ( isset($_POST['senha_ajax']) ) ? $_POST['senha_ajax'] : "";

    $query = "select
                id_usuario
              from
                usuarios
              where
                email = '$this->email_cadastro'";

    $result = mysqli_query($this->conexao,$query);
    $row    = mysqli_num_rows($result);

    if($row >= 1)
    {
      echo json_decode($row);
      exit;
    }
    else
    {
      $query1 = "insert into
                    usuarios
                    (nome_usuario,email,senha)
                  value
                    ('$this->nome_cadastro','$this->email_cadastro',md5('$this->senha_cadastro'))";
                      
      $result = mysqli_query($this->conexao,$query1);

      echo json_decode($row);
      exit;
    }
  }

  public function Logar()
  {
    session_start();
    
    $this->email_cadastro        = ( isset($_POST['email_ajax']) )        ? $_POST['email_ajax']        : ""; 
    $this->senha_cadastro        = ( isset($_POST['senha_ajax']) )        ? $_POST['senha_ajax']        : "";
    $this->valida_login_cadastro = ( isset($_POST['valida_login_ajax']) ) ? $_POST['valida_login_ajax'] : "0";

    $query = "select
                id_usuario,nome_usuario
              from
                usuarios
              where
                email = '$this->email_cadastro' and senha = md5('$this->senha_cadastro')";    

    $result = mysqli_query($this->conexao, $query);
    $row    = mysqli_num_rows($result);

    while($dados_fun = mysqli_fetch_array($result))
    {
      $email_while = $dados_fun['nome_usuario'];
    }

    if ($row >= 1)
    {                    
        $dados = 1;
        // exemplo com array json
        //---------------------------------------------------------
        //$arquivos = array('exemplo1'=>$this->email_cadastro,
        //                  'exemplo2'=>$this->senha_cadastro,
        //                  'exemplo3'=>$result,
        //                  'exemplo4'=>$row);
        //---------------------------------------------------------

        //retorno com json array
        // echo json_encode($arquivos);
        echo json_encode($dados);
        exit;
    }
    else
    {
        $dados = 0;

        echo json_encode($dados);
        exit;
    }      
  }
  public function Tabela()
  {
    
    $this->search_cadastro   = ( isset($_POST['search_ajax']) )   ? $_POST['search_ajax']        : ""; 
    $this->button_cadastro   = ( isset($_POST['button_ajax']) )   ? $_POST['button_ajax']        : "simnao";
    $this->pagAtual_cadastro = ( isset($_POST['pagAtual_ajax']) ) ? $_POST['pagAtual_ajax']      : "1";
    
    $pagina2 = $this->pagAtual_cadastro + 1;

    $inicio  = ($this->itempagina * $this->pagAtual_cadastro)  - $this->itempagina;
    $inicio2 = ($this->itempagina * $pagina2) - $this->itempagina;

    if(!empty($this->button_cadastro) || !empty($this->search_cadastro))
    {   

        if(!empty($this->search_cadastro) && !empty($this->button_cadastro))
        {

            if($this->button_cadastro == 'simnao')
            {
                $where  = "nome_usuario like '%$this->search_cadastro%'";     
            }
            else
            {
                $where  = "ativo = '$this->button_cadastro' and nome_usuario like '%$this->search_cadastro%'";
            }
        }
        else
        {
            if( $this->button_cadastro == 'simnao')
            {
                $where  = "ativo = 'sim' or ativo = 'nao'";
            }

            if($this->button_cadastro == 'sim' || $this->button_cadastro == 'nao')
            {
                $where  = "ativo = '$this->button_cadastro'";
            }

            if(!empty($this->search_cadastro))
            {
                $where  = "id_usuario like '$this->search_cadastro' or nome_usuario like '$this->search_cadastro' or email like '$this->search_cadastro'";
            }
        }
    }

    $query = "select
                  id_usuario,nome_usuario,email,ativo
              from
                  usuarios
              where
                  $where
              limit $inicio, $this->itempagina";   

    $result = mysqli_query($this->conexao,$query);
    $row    = mysqli_num_rows($result);
              
    $query2 = "select
                  id_usuario,nome_usuario,email,ativo
              from
                  usuarios
              where
                  $where
              limit $inicio2, $this->itempagina"; 

    $result2 = mysqli_query($this->conexao,$query2);
    $row2    = mysqli_num_rows($result2);
    
    while($dados = mysqli_fetch_array($result))
    {      
      $arquivos[] = array
      (
        "idUsuario"   => $dados['id_usuario'],
        "nomeUsuario" => $dados['nome_usuario'],
        "email"       => $dados['email'],
        "ativo"       => $dados['ativo'],
      ); // assim por diante com todos os campos
    }

    echo json_encode($arquivos);
    //echo "<pre>"; para mostrar array separado por tag
    //echo "<pre>";
    //print_r($arquivos);
    //echo "</pre>";      
    exit;
  }
}
