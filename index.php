<!-- Olá! Este site foi feito as pressas, e por este motivo, ainda pode estar com alguns bugs
e também algumas variáveis e gambiarras indefinidas, mas tudo será atualizado conforme
com o tempo. 

~~Alison 

-->

<html>

   <head>

      <title>Conversor</title>

      <meta charsert=UTF-8 />
      <link rel="icon" type="imagem/png" href="assets/media/img/favicon.ico" />

      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <link rel="stylesheet" href="assets/css/main.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
      <script src="assets/js/script.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

   </head>

   <body onload='checkHasResult()'>

      <!-- Icons Alerts SVG -->
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
         <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
         </symbol>
         <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
         </symbol>
         <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
         </symbol>
      </svg>

      <div id=container>

         <div id="modals" style="display:none">
         
            <div id="credits"> 
               Criadores 
               <hr>
               <p> Este site foi desenvolvido por <a target="_blank" href="//github.com/alisonchs/"> Alison Christian </a> e <a target="_blank" href="//https://github.com/Felipe3003p/"> Felipe Carvalho </a> apenas para um trabalho escolar.</p> 
               <hr>
               <button type="button" onclick="credits()" class="btn btn-dark">Fechar</button> 
            </div>

            <div id="languages"> 
               Linguagens usadas
               <hr>
               <p> Este site foi desenvolvido apenas com: <br><br>
                  
                      HTML5 <br>
                      CSS3 <br>
                      JAVASCRIPT (CLIENT) <br>
                      PHP <br>
                      BOOTSTRAP <br> 
                  
               </p> 
               <hr>
               <button type="button" onclick="languages()" class="btn btn-dark">Fechar</button> 
            </div>
                  
         </div>

         <div id="alerts">

            <!-- Alerta para FORMULA -->
            <div style='display:none;' id='formulaAlert'>
               <div style='padding: 0.5rem 1rem; font-size: 0.4em;' class="alert alert-primary d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                  <div> -- <!-- PHP usado para definir a fórmula -->
                     <?php
                           if($_POST) {
                           
                              $scale = $_POST['scale'];
                              $scaleconvert = $_POST['scaleconvert'];
                              $number = $_POST['number'];
                           
                                 if ($scale == "celsius") {
                                       if($scaleconvert == "celsius") {
                                          echo 'Não houve conversão aqui';
                                       }
                           
                                       elseif ($scaleconvert == "fahrenheit") {
                                          echo 'A fórmula para esta conversão é C x 1.8 + 32';
                                       }
                           
                                       elseif ($scaleconvert == "kelvin") {
                                          echo 'A fórmula para esta conversão é C + 273';
                                       }
                           
                                       else {
                                          echo "Erro ao selecionar";
                                       }
                                 }
                           
                                 elseif ($scale == "fahrenheit") {
                                       if($scaleconvert == "celsius") {
                                          echo 'A fórmula para esta conversão é F - 32 / 1.8';
                                       }
                           
                                       elseif ($scaleconvert == "fahrenheit") {
                                          echo 'Não houve conversão aqui';
                                       }
                           
                                       elseif ($scaleconvert == "kelvin") {
                                          echo 'A fórmula para esta conversão é (F-32) x 5/9 + 273';
                                       }
                           
                                       else {
                                          echo "Erro ao selecionar";
                                       }
                                 }
                           
                                 elseif ($scale == "kelvin") {
                                       if($scaleconvert == "kelvin") {
                                          echo 'Não houve conversão aqui'; 
                                       }
                           
                                       elseif ($scaleconvert == "fahrenheit") {
                                          echo 'A fórmula para esta conversão é (K - 273) x 1.8 + 32';
                                       }
                           
                                       elseif ($scaleconvert == "celsius") {
                                          echo 'A fórmula para esta conversão é K - 273';
                                       }
                           
                                       else {
                                          echo "Erro ao selecionar";
                                       }
                                 }
                                                                  
                              }
                           
                           
                           ?>
                     <button onclick='closeAlert("formulaAlert")' style='padding: .50rem 1rem; ' type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               </div>
            </div>
            

            <!-- Alerta para form vazio -->
            <div style='display:none' id='numberAlert'>
               <div style='padding: 0.35rem 2.5rem; font-size: 0.4em;' class="alert alert-danger alert-dismissible fade show" role="alert">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                     <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                  -- Você deve <strong>inserir um número</strong> antes de continuar.
                  <button onclick='closeAlert("numberAlert")' style='padding: .50rem 1rem; 'type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
            </div> 

            <!-- Alerta para sucesso de cálculo -->
            <div style='display:none' id='sucessAlert'>
               <div style='padding: 0.35rem 1rem; font-size: 0.4em' class="alert alert-success d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                     <use xlink:href="#check-circle-fill"/>
                  </svg>
                  <div id="logSucess">-- A conversão de <?php echo $_POST['number']; ?> do <?php echo $_POST['scale']; ?> para <?php echo $_POST['scaleconvert']; ?> foi feita com sucesso. </div>
                  <button onclick='closeAlert("sucessAlert")' style='padding: .10rem 1rem; 'type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
            </div>

            <!-- Alerta para tutorial para efetuação do cálculo -->
            <div id='tutorialAlert'>
               <div style='padding: 0.35rem 4rem; font-size: 0.4em;' class="alert alert-warning d-flex align-items-center" role="alert">
               <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                  -- Insira um número a ser convertido, escolha a temperatura e escala; Por fim, clique no botão de 'igual'. 
                  <button onclick='closeAlert("tutorialAlert")' style='padding: .50rem 1rem; 'type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
            </div>

         </div>

         <h1> Conversor de temperaturas <a> <</a>PHP/> </h1>

         <div class="calc">
             
            <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" id="myForm">
               
                <div class="valores">

                    <input name=number id=number type="number" value="<?php if ($_POST) {echo $_POST['number'];} ?>" class="valor btn-dark" placeholder=0></input> 
                    
                    <button type=button onclick="validar()" class="btn btn-dark">=</button>
                    <input name=result id='result' type="number" class="valor btn-dark" placeholder=0 readonly value=
                    
                    <?php // PHP para exibir resultado direto no segundo INPUT
                        if($_POST) {
                        
                            $scale = $_POST['scale'];
                            $scaleconvert = $_POST['scaleconvert'];
                            $number = $_POST['number'];
                        
                                if ($scale == "celsius") {
                                    if($scaleconvert == "celsius") {
                                        echo $number;
                                    }
                        
                                    elseif ($scaleconvert == "fahrenheit") {
                                        echo ($number * 1.8 + 32);
                                    }
                        
                                    elseif ($scaleconvert == "kelvin") {
                                        echo ($number + 273);
                                    }
                        
                                    else {
                                        echo "Erro ao selecionar";
                                    }
                                }
                        
                                elseif ($scale == "fahrenheit") {
                                    if($scaleconvert == "celsius") {
                                        echo (($number - 32) / 1.8);
                                    }
                        
                                    elseif ($scaleconvert == "fahrenheit") {
                                        echo $number;
                                    }
                        
                                    elseif ($scaleconvert == "kelvin") {
                                        echo (($number-32) * 5/9 + 273);
                                    }
                        
                                    else {
                                        echo "Erro ao selecionar";
                                    }
                                }
                        
                                elseif ($scale == "kelvin") {
                                    if($scaleconvert == "kelvin") {
                                        echo $number; 
                                    }
                        
                                    elseif ($scaleconvert == "fahrenheit") {
                                        echo (($number - 273) * 1.8 + 32);
                                    }
                        
                                    elseif ($scaleconvert == "celsius") {
                                        echo ($number - 273);
                                    }
                        
                                    else {
                                        echo "Erro ao selecionar";
                                    }
                                }
                                                                
                            }
                        
                        
                        ?>>
               </div>
               
               <!-- Selects para verificar as temperaturas das conversões -->
               <div class="selects">

                  <select id=scale name="scale" class="form-control form-control-sm btn-dark">
                     <option value=celsius>Grau CELSIUS</option>
                     <option value=fahrenheit>Grau FAHRENHEIT</option>
                     <option value=kelvin>Kelvin</option>
                  </select>

                  <select id=scaleconvert name="scaleconvert" class="form-control form-control-sm btn-dark">
                     <option value=celsius>Grau CELSIUS</option>
                     <option value=fahrenheit>Grau FAHRENHEIT</option>
                     <option value=kelvin>Kelvin</option>
                  </select>

               </div>

            </form>

         </div>
         
         <!-- Botões funcionais no fim da página -->
         <div class="d-grid gap-2 d-md-block">
            <button type="button" onclick="reset()" class="btn btn-dark">Limpar tudo</button>
            <a href="//github.com/AlisonChs" target="_blank"><button type="button" class="btn btn-dark">Ver código-fonte completo  | <i class='fab fa-github' style='font-size:20px'></i></button></a>
            <button type="button" onclick="credits()" class="btn btn-dark">Info</button>
            <button type="button" onclick="languages()" class="btn btn-dark">Linguagens usadas</button>
            <button type="button" onclick="showAlert('tutorialAlert')" class="btn btn-dark">Tutorial de como usar</button>
         </div>
         
      </div>

      <script language=javascript type=javascript src="assets/js/script.js"> </script>
      
   </body>
</html>
