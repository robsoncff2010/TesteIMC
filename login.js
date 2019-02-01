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
                button_ajax        : $('input[name=button]:checked', '#teste_pesquisar').val(),
                pagAtual_ajax      : $('#pagAtual').val(),     
                loginCadastro_ajax : $('#loginCadastro').val(),               
            },
            function(data)
            {
                var tabela = '';
                var i = 1;
                var conta = data.length -1;

                for(i = 1; i <= conta; i++)
                {                    
                    tabela += '<tr><td>' + data[i].idUsuario + '</td>'+
                              '<td>' + data[i].nomeUsuario + '</td>'+
                              '<td>' + data[i].email + '</td>'+
                              '<td>' + data[i].ativo + '</td>' +
                              '<td>' + 'teste' + '</td>' +
                              '<td>' + 'teste' + '</td>' +
                              '<td>' + 'teste' + '</td>' +
                              '<td>' + '<button class="btn btn-info btn-sm" value = "' +
                               data[i].idUsuario + '">Editar</button> <button class="btn btn-danger btn-sm" value = "' +
                               data[i].idUsuario + '">Excluir</button>' + '</td>' +
                              '<td>' + 'teste' + '</td>' +
                              '</tr>';
                }                 
                 // contar numeros de linhas do data  alert(data.length);                 
                 $('#search').val('');
                 $('#zero_config').html('');
                 //$('#paginacao').html('');   
                 $('#zero_config').html(tabela);
            },
            'json'
        ).fail(function(){

            alert("Sua pesquisa não encontrou nenhum resultado!")
            $('#search').val('');
            $('#zero_config').html('');

        });
    });
});