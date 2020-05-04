$(document).ready(function(){    
    $('#envia_dados_imc').on('submit', function(eval) { //captura o evento de click no botao de proximo (que se encontra dentro da class boxpagina)    		        
        eval.preventDefault();

        $.post(            
            'calcula_retorno_js.php',
            {       
                buttonMH_ajax: $('input[name=genero]:checked', '#envia_dados_imc').val(),
                idade_ajax: $('#idade').val(),               
                altura_ajax: $('#altura').val(),               
                peso_ajax: $('#peso').val(),                               
                buttonFisica_ajax: $('input[name=atividade_fisica]:checked', '#envia_dados_imc').val(),                    
            },
            function(data)
            {
                var resultado = '';
                var sexo      = '';
                
                resultado = data[0].resultado; 
                resultado = parseFloat(Math.round(resultado * 100) / 100).toFixed(2);   
                sexo      = data[0].sexo;

                $('.bloco_resultadoH').css({display:"none"}); 
                $('.bloco_resultadoM').css({display:"none"}); 
                $('.magreza').css({backgroundColor:""});
                $('.normal').css({backgroundColor:""});
                $('.sobrepeso').css({backgroundColor:""});
                $('.obesidade').css({backgroundColor:""});
                $('.resultado_bloco_resultado2').css({webkitAnimationName:""});  
                $('.resultado_bloco_resultado2').css({webkitAnimationName:""});                      
                $('.magreza').css({webkitAnimationName:""});      
                $('.normal').css({webkitAnimationName:""});      
                $('.sobrepeso').css({webkitAnimationName:""});      
                $('.obesidade').css({webkitAnimationName:""});    
                
                if (sexo == 'H')
                {
                    $('.bloco_resultadoH').css({display:"block"});  
                    $('.bloco_principal').css({marginRight:"3%"});  
                    $('.valor_bloco_resultado').text('');
                    $('.valor_bloco_resultado').text('Valor do seu IMC é:\n' + resultado);

                    if(resultado <= 18.5)
                    {   
                        $('.magreza').css({backgroundColor:"rgb(230, 230, 230)"});
                        $('.magreza').css({webkitAnimationName:"animacao2"}); 
                        $('.resultado_bloco_resultado2').css({backgroundColor:"red"});  
                        $('.resultado_bloco_resultado2').css({webkitAnimationName:"animacao1"});        
                        $('.texto_bloco_resultado').text('Seu IMC é de risco (Consultar o Médico)'); 
                    };

                    if((resultado > 18.5) && (resultado <= 24.9))
                    {   
                        $('.normal').css({backgroundColor:"rgb(230, 230, 230)"});  
                        $('.normal').css({webkitAnimationName:"animacao2"}); 
                        $('.resultado_bloco_resultado2').css({backgroundColor:"rgb(0, 230, 142)"});  
                        $('.resultado_bloco_resultado2').css({webkitAnimationName:"animacao1"});         
                        $('.texto_bloco_resultado').text('');
                        $('.texto_bloco_resultado').text('Seu IMC esta otimo'); 
                    };

                    if((resultado > 24.9) && (resultado <= 30))
                    {   
                        $('.sobrepeso').css({backgroundColor:"rgb(230, 230, 230)"});
                        $('.sobrepeso').css({webkitAnimationName:"animacao2"}); 
                        $('.resultado_bloco_resultado2').css({backgroundColor:"red"});
                        $('.resultado_bloco_resultado2').css({webkitAnimationName:"animacao1"});  
                        $('.texto_bloco_resultado').text('Seu IMC é de risco (Consultar o Médico)'); 
                    };

                    if(resultado > 30)
                    {   
                        $('.obesidade').css({backgroundColor:"rgb(230, 230, 230)"});
                        $('.obesidade').css({webkitAnimationName:"animacao2"}); 
                        $('.resultado_bloco_resultado2').css({backgroundColor:"red"});
                        $('.resultado_bloco_resultado2').css({webkitAnimationName:"animacao1"});  
                        $('.texto_bloco_resultado').text('Seu IMC é de risco (Consultar o Médico)'); 
                    };
                }
                else
                {
                    $('.bloco_resultadoM').css({display:"block"});  
                    $('.bloco_principal').css({marginRight:"3%"});                
                    $('.valor_bloco_resultado').text('');
                    $('.valor_bloco_resultado').text('Valor do seu IMC é:\n' + resultado);

                    if(resultado <= 18.5)
                    {   
                        $('.magreza').css({backgroundColor:"rgb(230, 230, 230)"});
                        $('.magreza').css({webkitAnimationName:"animacao2"}); 
                        $('.resultado_bloco_resultado2').css({backgroundColor:"red"}); 
                        $('.resultado_bloco_resultado2').css({webkitAnimationName:"animacao1"});  
                        $('.texto_bloco_resultado').text('Seu IMC é de risco (Consultar o Médico)'); 
                    };

                    if((resultado > 18.5) && (resultado <= 24.9))
                    {   
                        $('.normal').css({backgroundColor:"rgb(230, 230, 230)"});  
                        $('.normal').css({webkitAnimationName:"animacao2"}); 
                        $('.resultado_bloco_resultado2').css({backgroundColor:"rgb(0, 230, 142)"});
                        $('.resultado_bloco_resultado2').css({webkitAnimationName:"animacao1"});  
                        $('.texto_bloco_resultado').text('');
                        $('.texto_bloco_resultado').text('Seu IMC esta otimo'); 
                    };

                    if((resultado > 24.9) && (resultado <= 30))
                    {   
                        $('.sobrepeso').css({backgroundColor:"rgb(230, 230, 230)"});
                        $('.sobrepeso').css({webkitAnimationName:"animacao2"}); 
                        $('.resultado_bloco_resultado2').css({backgroundColor:"red"});
                        $('.resultado_bloco_resultado2').css({webkitAnimationName:"animacao1"});  
                        $('.texto_bloco_resultado').text('Seu IMC é de risco (Consultar o Médico)'); 
                    };

                    if(resultado > 30)
                    {   
                        $('.obesidade').css({backgroundColor:"rgb(230, 230, 230)"});
                        $('.obesidade').css({webkitAnimationName:"animacao2"}); 
                        $('.resultado_bloco_resultado2').css({backgroundColor:"red"});
                        $('.resultado_bloco_resultado2').css({webkitAnimationName:"animacao1"});  
                        $('.texto_bloco_resultado').text('Seu IMC é de risco (Consultar o Médico)'); 
                    };
                };       
                                
                 // contar numeros de linhas do data  alert(data.length);                 
                 //$('#search').val('');
                 //$('#zero_config').html('');
                 //$('#paginacao').html('');   
                 //$('#zero_config').html(tabela);     
            },
            'json'
        ).fail(function(){

            alert("Sua pesquisa não encontrou nenhum resultado!");
        });
    });
});

