<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <title>Carteira Virtual</title>
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">

    
</head>
<body class="tudo">
    
    <div>
        

        <form class="formulario" method="POST" action="envia_formulario.php">  <!-- inicio do cabeçalho--> 
            <div class = "titulo">
                <a href="index.php"><img src="img/verde.png" alt="verde" width="187,5" height="187,5" class="img"></a>
                
            </div>
            <h1>Cadastro De Usuario</h1>


            <div class="texto-formulario">   <!--meio centro-->
                <div class="nomes">
                        
                <input type="text" name="nome" id="nome" placeholder='Nome' required>
                </div>

                <div>
                        
                        <input type="text" name="sobrenome" id="sobrenome" placeholder='Sobrenome' required>
                            
                </div>

                <div class="email">
                    
                    <input type="email" name="email" placeholder='Nome@E-mail.com' required>
                </div>
                
                <div class="nome">
                    
                    <input type="date" name="idade" id="idade" placeholder='data de nascimento'>

                    
                </div>
                <div>   
                    <input type="cpf" type="" name="cpf" id="cpf" placeholder="CPF  Ex.: 000.000.000-00" maxlength="14" required>
                    <script type="text/javascript">
                        var campoCpf = document.getElementById('cpf');
                        campoCpf.oninput = function (){
                            var cpf = campoCpf.value;
                            if(cpf.length == 3 || cpf.length ==7){
                                campoCpf.value +=".";
                            }
                            if(cpf.length == 11){
                                campoCpf.value +="-"
                            }
                        }
                    </script>
                </div>
                <div>    
                   
                    <input type="text" name="rg" id="rg" placeholder="RG  Ex.: 00.000.000-0"maxlength="12"  >
                    <script type="text/javascript">
                        var campoRg = document.getElementById('rg');
                        campoRg.oninput = function (){
                            var rg = campoRg.value;
                            if(rg.length == 2 || rg.length ==6){
                                campoRg.value +=".";
                            }
                            if(rg.length == 10){
                                campoRg.value +="-"
                            }
                        }
                    </script>
                    
                </div>
                
                <div>
                    
                    <select id="estadocivil" name="estadocivil">
                        <option selected disable value="" >Estado civil </option>
                        <option>Solteiro</option>
                        <option>Casado</option>
                        <option>União estavel</option>
                        <option>viúvo</option>
                    </select>
        
                </div>
                
                        <div class="local" >
                        
                        <select id="estado" name="localizacao">
                            <option selected disable value="" >Naturalidade </option>
                            <option>SP</option>
                            <option>RJ</option>
                            <option>GO</option>
                            <option>DF</option>
                            <option>AM</option>
                        </select>
                       </div>
                       
                       
                       <div class="profisaum" >
                            
                            <select id="profissao" name="profissao">
                            <option selected disable value="" >Profissão </option>
                            <option>Médico</option>
                            <option>Policial</option>
                            <option>ADM</option>
                         </div>
                     </select>
                    
                        <div class="sangue" >
                            
                            <select id="sangue" name="sangue">
                                <option selected disable value="" >Tipo sanguineo</option>
                                <option>-O</option>
                                <option>O</option>
                                <option>A</option>
                                <option>B</option>
                                <option>AB</option>
                                <option>-AB</option>
                                
                            </select>                  
                        </div>
                        
                        <div class="pontos" >
                           
                            <select id="pontos" name="pontos">
                                <option selected disable value="" >Pontos na Carteira</option>
                                <option>0 a 10</option>
                                <option>10 a 20</option>
                                <option>20 a 30</option>
                                <option>30 a 40</option>
                            
                            </select>
                                
                        </div>



                
                    
                    <button class="botao" type="submit"> Concluido</button>
            </div>          
        </form>                     
    </div>

</body>
</html>

