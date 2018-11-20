<!DOCTYPE html>
<html lang="pt">
<head>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/lightbox.js"></script>
    <link href="css/lightbox.css" rel="stylesheet" />
    <meta charset="utf-8">
    <title>Centro Infantil Amiguinhos do Rei</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/aparencia.css')}}">
  

</head>
<body >
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
                    <input   type="text"   name="valor1" id ="nome" placeholder="Nome" size="20" />
                    <div id="divisao"></div>
                      
                      <br/>
                     <input type="text"   name="valor2" id= "Senha" placeholder="Senha" size="20" />

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
              <li><a href="{{ route('Quemsomos')}}">Quem Somos</a></li>
              <li><a href="{{ route('preinscricao')}}">Pré-inscrição</a></li>
              <li><a href="{{ route('galeria')}}">Galeria</a></li>   
              <li><a href="{{ route('contactos')}}">Contacte-nos</a></li> 
            </ul> 
       </div>


	   
      <div id="gallery">
        <ul>
          <li><a href="IMG_4358.JPG" rel="lightbox[roadtrip]"><img width="46%" height="20%"
           src="IMG_4358.JPG"></a></li>
          <li><a href="IMG_4380.JPG" rel="lightbox[roadtrip]"><img width="46%" height="20%" src="IMG_4380.JPG"></a></li>
          <li><a href="IMG-20171114-WA0004.JPG" rel="lightbox[roadtrip]"><img width="46%" height="20%" src="IMG-20171114-WA0004.JPG"></li>
          <li><a href="IMG-20171114-WA0005.JPG" rel="lightbox[roadtrip]"><img width="46%" height="20%" src="IMG-20171114-WA0005.JPG"></li>
          <li><a href="IMG-20171114-WA0006.JPG" rel="lightbox[roadtrip]"><img width="46%" height="20%" src="IMG-20171114-WA0006.JPG"></li>
          <li><a href="IMG_4373.JPG" rel="lightbox[roadtrip]"><img width="46%" height="20%" src="IMG_4373.JPG"></li>
          <li><a href="IMG-20171114-WA0007.JPG" rel="lightbox[roadtrip]"><img width="46%" height="20%" src="IMG-20171114-WA0007.JPG"></li>
          <li><a href="IMG-20171114-WA0008.JPG" rel="lightbox[roadtrip]"><img width="46%" height="20%" src="IMG-20171114-WA0008.JPG"></li>
          <li><a href="IMG-20171114-WA0009.JPG" rel="lightbox[roadtrip]"><img width="46%" height="20%" src="IMG-20171114-WA0009.JPG"></li>
          <li><a href="IMG-20171114-WA0010.JPG" rel="lightbox[roadtrip]"><img width="46%" height="20%" src="IMG-20171114-WA0010.JPG"></li>
        </ul>
		  </div>
      

     
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