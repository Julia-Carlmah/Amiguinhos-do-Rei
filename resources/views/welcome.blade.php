<!doctype html>
<html lang="pt">
<head>
    
    <meta charset="utf-8">
    <title>Centro Infantil Amiguinhos do Rei</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/aparencia.css')}}">
    
</head>
        <!-- Styles -->
        
    </head>
    <body>
    <div id="main_container" >
        
        <div id="top_head">
         <div id="top_left"> 
         
         </div>
         <div id="top_mid">
          
          <div id="imagem_2">
            <div id="divisao_2"> 
             </div>
            <img img width="100%" height="25%"  src="amigo.png">
          </div>
         </div>
         <div id="top_right">
            
                    
                      <p>
                        <form action="login.php" name="Form1" method="post">
                            <input   type="text"   name="valor1" placeholder="Nome" size="20" />
                            <div id="divisao"></div>
                            
                            <br/>
                             <input type="text"   name="valor2" placeholder="Senha" size="20" />

                             <div id="divisao_1"></div>

                            <div id="alinhar">
                              <input  type="submit" name="" value="Entrar" onclick="">
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
              <li><a href="htmlpro.html">Inicio</a></li>    
              <li><a href="testarpro.html">Quem Somos</a></li>
              <li><a href="preinscricao.html">Pré-inscrição</a></li>
              <li><a href="galeria.html">Galeria</a></li>   
              <li><a href="contactos.html">Contacte-nos</a></li>    
            </ul>   
        </div>


        <div id="imagem">
        <p>
          <img id="foto" width="100%" height="25%" align="center" src="IMG_4358.JPG" >
        </p>
        </div>
          <div id="botao">
            <button id="btn">Next</button>
          </div>

        <div id="rodapel" > 
         <div id="central">

          Informacao Geral
         </div>
        </div>
        <div id="texto-1">

         </br>
         
         O layout muda automaticamente para se adaptar à largura do navegador do usuário;
         • Mudança no número de colunas, inclusive;
         • Geralmente construído via JavaScript;
         • Pouco usual.
          O nome div vem de divisão, e esta tag vai dar o simples poder de dividir qualquer trecho de seu código. Isso mesmo, você pode criar um bloco, uma divisão, e dentro deste bloco ter uma imagem, links, textos e o que mais você quiser.
         • E qual a vantagem disto? Vai poder aplicar o CSS nesse bloco, e tudo que estiver dentro da div, seja imagem, texto, link ou o que mais for, vai receber aquelas regras de estilo.
         • Se fizer isso usando CLASS, por exemplo, vai ter de colocar esse seletor em cada tag.
        </div>
     </p>
     <div id="rodape">
         <div id="texto">
            <br/>
             <span style="font-weight: bold"> Copyright © 2018</span> Amiguinhos do Rei. Todos os direitos reservados
        </div>

    </div>
    
    <div id="lateral_d">
        
    </div>  
    
  </div>
  <script src="jquery.js"></script>
  <script src="mudafoto.js"></script>
  <script>
    let myLabels = document.querySelectorAll('.lbl-toggle');

Array.from(myLabels).forEach(label => {
  label.addEventListener('keydown', e => {
    // 32 === spacebar
    // 13 === enter
    if (e.which === 32 || e.which === 13) {
      e.preventDefault();
      label.click();
    };
  });
});
  </script>

</body>
</html>