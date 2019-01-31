$(document).ready(function(){            
    $('#teste_logar').on('submit', function(eval) { //captura o evento de click no botao de proximo (que se encontra dentro da class boxpagina)    		        
        eval.preventDefault();
        /* $.ajax({

            url : 'recebe_dados_login.php',
            method: 'POST',
            datatype: 'json',
            
            data: ({                        
                email_ajax        : $('#email').val(),
                senha_ajax        : $('#senha').val(),
                valida_login_ajax : $('#valida_login').val(),                
            }),

            success: function(data){
                
                var valida_login_data = data;

                $('#valida_login').val(data);                            

                if(valida_login_data == 1)     
                {
                    alert('Login realizado com sucesso!');                                                
                }
                else
                {
                    $('#email').val('');
                    $('#senha').val('');                    
                    alert('E-mail ou senha incorretos!');       
                }
            },
            beforeSend : function(data) {              
                
            },
            complete : function(data) {

            }					  
        });

*/
        $.post(
            'recebe_dados_cadastro.php',
            {                        
                email_ajax         : $('#email').val(),
                senha_ajax         : $('#senha').val(),
                loginCadastro_ajax : $('#loginCadastro').val(),                 
            },
            function(data){

                console.log(data);

                // pegar retorno json com array
                //var valida_login_data = data.exemplo4;

                var valida_login_data = data;

                $('#valida_login').val(data);

                if(valida_login_data == 1)     
                {
                    window.location.replace('relatorio.php');
                    alert('Login realizado com sucesso!');
                }
                else
                {
                    $('#email').val('');
                    $('#senha').val('');                    
                    alert('E-mail ou senha incorretos!');       
                }
            },
            'json'            
        );
        
    });
});

$(document).ready(function(){    
    $('#teste_cadastro').on('submit', function(eval) { //captura o evento de click no botao de proximo (que se encontra dentro da class boxpagina)    		        
        eval.preventDefault();

        $.post(
            'recebe_dados_cadastro.php',
            {                        
                nome_ajax          : $('#nome').val(),
                email_ajax         : $('#email').val(),
                senha_ajax         : $('#senha').val(),     
                loginCadastro_ajax : $('#loginCadastro').val(),               
            },
            function(data){

                console.log(data);

                // pegar retorno json com array
                //var valida_login_data = data.exemplo4;

                var valida_cadastro = data;                               

                if(valida_cadastro <= 0)     
                {
                    alert('Cadastro realizado com sucesso!');                                                
                }
                else
                {
                    $('#email').val('');
                    
                    alert('E-mail existente, favor cadastrar e-mail diferente!');       
                }
            },
            'json'
        );
    });
});

$(document).ready(function(){    
    $('#teste_pesquisar').on('submit', function(eval) { //captura o evento de click no botao de proximo (que se encontra dentro da class boxpagina)    		        
        eval.preventDefault();

        $.post(
            'recebe_dados_cadastro.php',
            {                        
                search_ajax        : $('#search').val(),
                button_ajax        : $('#button').val(),
                pagAtual_ajax      : $('#pagAtual').val(),     
                loginCadastro_ajax : $('#loginCadastro').val(),               
            },
            function(data){

                console.log(data[0].idUsuario);               
                
                var obj = data;
                var tabela = '';

                for(var i in data){
                    tabela += '<tr><td>' + data[i].idUsuario + '</td>'+
                              '<td>' + data[i].nomeUsuario + '</td>'+
                              '<td>' + data[i].email + '</td>'+
                              '<td>' + data[i].ativo + '</td>' +
                              '</tr>';
                              
                }


//dkfgkdgflkjdgfkjghdjkfhjdhfjklhd
//fdlhfkjdhfkjlkhd

              // for (i = 0; i < obj.length; i++)
              // {
                 //  alert(obj[i].idUsuario + " ----- " + obj[i].nomeUsuario + " ----- " + obj[i].email + " ----- " + obj[i].ativo);
                 //buscarvalor = '<tr><td>' + obj[i].idUsuario + '</td></tr>';             
                 //   buscarvalor += '<tr><td>' + data['justificativa'][i] + '</td></tr>';
              //  tabela = Array(
              //   '<tr>' +
              //     '<td>' + obj[i].idUsuario + '</td>' +
              //     '<td>' + obj[i].nomeUsuario + '</td>' +
              //     '<td>' + obj[i].email + '</td>'+
              //     '<td>' + 'teste' + '</td>'+
              //     '<td>' + 'teste' + '</td>'+
              //     '<td>' + 'teste' + '</td>'+
              //   '</tr>',
              //       );                
              //   }
                 
                 alert(obj.length);

                 $('#zero_config').html('');
                 $('#zero_config').html(tabela);
               // $('.add-info').html(buscarvalor);
//
//
               // $('#zero_config').html('');
               // $('#zero_config').html(teste);
                
            },
            'json'
        );
    });
});