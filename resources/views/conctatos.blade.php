<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>Centro Infantil Amiguinhos do Rei</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/aparencia.css')}}">
    <script type="text/javascript">
      function desabilitar(id) {
        // body...
        document.getElementById(id).disable=tru
      }
    </script>
</head>
<body>
    <div id="main_container">
      
      <div id="top_head">
     <div id="top_left"> 
      
     </div>
     <div id="top_mid">
      <div id="imagem_2">
      <img img width="100%" height="25%"  src="amigo.png">
      </div>
     </div>
     <div id="top_right">
       <p>
                <form action="" name="Form1" method="get">
                    <input   type="text"  name="valor1" id ="nome" placeholder="Nome" size="20" />
                    <div id="divisao"></div>
                      
                      <br/>
                     <input type="text"  name="valor2" id= "Senha" placeholder="Senha" size="20" />

                     <div id="divisao_1"></div>

                      <div id="alinhar">
                      <input  type="button" name="" value="Entrar" onclick="">
                      </div>
                      <div id="alinhar1">
                         <div id="textcolor">
                           <p > ESQUECEU A SENHA?</p>
                         </div>
                      </div>
                </form>
              </p>



     </div>
     </div> 
    
      <div id="lateral_a"></div> 
      <div id="conteudo">

      <div id="divisao_1"></div>
      <div id="menu-opcoes-1">
      
      </div>
    
      <div id="menu-opcoes">
      <ul >             
              <li><a href="{{ route('welcome')}}">Inicio</a></li>     
              <li><a href="testarpro.html">Quem Somos</a></li>
              <li><a href="preinscricao.html">Pré-inscrição</a></li>
              <li><a href="{{ route('galeria')}}">Galeria</a></li>   
              <li><a href="{{ route('contactos')}}">Contacte-nos</a></li>  
            </ul> 
       </div>

      <div id="imagem1">
      <p>
        <a href="https://www.google.com/maps/@-25.840448,32.6220932,15z">
          <img width="50%" height="50%" align="center" src="amg.JPG">
        </a>
    </p>
    </div>

    <div id="rodapel" > 
     <div id="central">       
          Contactos
         </div>
        </div>


     <div id="texto-1">
     </br>

     
     
    </div>

     </p>
     <div id="rodape">
       <div id="texto">
        <br/>
       <span style="font-weight: bold"> Copyright © 2018</span> Amguinhos do Rei. Todos os direitos reservados
        </div>

    </div>
    
    
    <div id="lateral_d">
      
    </div>  
  
  </div>

</body>
</html>