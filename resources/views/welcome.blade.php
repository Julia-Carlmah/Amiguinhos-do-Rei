<!doctype html>
<html lang="pt">
<head>
    
    <meta charset="utf-8">
    <title>Centro Infantil Amiguinhos do Rei</title>
    <link rel="stylesheet" type="text/css" href="aparencia.css">
    
</head>
        <!-- Styles -->
        <style>
            #main_container{width: 1000px;  height: 100%;font-family: Trebuchet MS, sans-serif  ;background-image: url("Amiguinhos do Rei Prototipo.png") 
;background-repeat:repeat-y;margin: auto;}
#top_head{ width: 100%; height: 100px; 
/* background: red;  <img width="200" height="200" align="middle" src="IMG_4358.JPG"> */}
#gallery>ul>li>a>img{min-height: 230.68px;  max-height: 230.68px;}
input,button{border-radius: 20px;}
input[type='text']{background-color: #5caccb; color:#ffffff;}
#top_left{ width: 200px; height: 100px;  float: left;}
#top_mid{  width: 400px; height: 100px;  float: left;}
#top_right{ width: 200px; height: 100px; float: left;}
#cabecalho {background-color: white; height: 35pt; } 
#lateral_a { float: left; width: 15%}
#divisao{margin-top:0px ;margin-bottom:-13px;}
#divisao_1{margin-top:10px ;margin-bottom:0px;}
#divisao_2{margin-top:0px ;margin-bottom:0px;margin-left: 30px; margin-right: 30px;}
#divisao3{margin-top:0px ;margin-bottom:-45px;}
#lateral_d {float:right;width: 15%; } 
#conteudo {margin-left:5%; margin-right: 10%}
a {text-decoration: none;  color: black;} 
#alinhar{margin-right: 0%;margin-left: 40%;}
#alinha{margin-right: 0%;margin-left: 80%;}
#alinhar1{margin-right: 0%;margin-left: 0%; }
#alinhar2{margin-left: 80%;}
#menu-opcoes-1 { background-color:#5CACCB ;height: 4pt ;margin-top:50px ;margin-bottom: 0px ;}
#rodape { background-color: #5CACCB; height:35pt;} 
#textcolor{color: #5CACCB; font-size: 12pt}
#texto{margin-left:20%; margin-right: 20%; align-content: center; }
#texto-1{margin-left:41px; margin-right: 66px; align-content: center; }
#imagemform{margin-top: 12px;  margin-left:90% ;margin-right:0%}
#cont{ margin-left:30% }
#menu-opcoes ul li{list-style: none; float: left; padding: 12px 37px 12px 37px; 
    margin-left: 1px;background: #FEC225;  margin-top: -14px; 
    margin-bottom: 15px; }
#lateral-c{float: left; width: 15%}
#lateral-e{margin-left:20%; margin-right: 20%; float: left;}
#lateral-f{float: right; width: 15%}
#imagem{ margin-top: 12px; align-content: center; margin-left:41px ;margin-right:66px}
#imagem1{ margin-top: 12px; align-content: center; margin-left:60pt ;margin-right:60pt}
#menu-opcoes ul li:hover{ background-color: #FEC225;text-decoration: none; font-size: 15px }
#corpo{background-position: center; background-size: cover;
    background-image: url("Amiguinhos do Rei Prototipo.png"); min-height: 75%;}
#bgimg { background-position: center; background-size: cover; background-image: url("/w3images/coffeehouse.jpg");
    min-height: 75%;}
#menu ul li{position: relative;list-style: none; float: left; padding: 12px 37px 12px 37px;
    margin-left: 1px;background: #5CACCB; align-content: center; }
#menu ul li:hover{  font-size: 20px }
#rodapel { background-color: #FEC225; height:25pt;clear:both} 
#central{margin-left:40% ;margin-right:40%}
#central_1{margin-left:20% ;margin-right:30%}
#imagem_1{ margin-top: 12px; align-content: center; margin-left:10% ;margin-right:12%; margin-bottom:15px;}
#imagem_2{ margin-top: 12px; align-content: center; margin-left:33% ;margin-right:33%}
#gallery {padding: 10px; width: auto; margin-top: 50px; margin-bottom: 15px; margin-left:5% ;margin-right:13%;}
#gallery ul{ list-style: none; }
#gallery ul li{ display: inline; }
#gallery ul img{ border: 5px solid #444444; border-width: 5px 5px 20px;}
#gallery ul a:hover img {border: 5px solid #fff; border-width: 5px 5px 20px; color: #fff;}
#gallery ul a:hover { color: #fff; }
#botao{ margin-top: 12px; color: ;align-content: center; margin-left:79% ;margin-right:80%;margin-bottom:15px;}
/* Collapse*/
.wrap-collabsible {
  margin-bottom: 1.2rem 0;
}

input[type='checkbox'] {
  display: none;
}

.lbl-toggle {
  display: block;

  font-weight: bold;
  font-family: monospace;
  font-size: 1.2rem;
  text-transform: uppercase;
  text-align: center;

  padding: 1rem;

  color: #A77B0E;
  background: #FAE042;

  cursor: pointer;

  border-radius: 7px;
  transition: all 0.25s ease-out;
}

.lbl-toggle:hover {
  color: #7C5A0B;
}

.lbl-toggle::before {
  content: ' ';
  display: inline-block;

  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 5px solid currentColor;
  vertical-align: middle;
  margin-right: .7rem;
  transform: translateY(-2px);

  transition: transform .2s ease-out;
}

.toggle:checked + .lbl-toggle::before {
  transform: rotate(90deg) translateX(-3px);
}

.collapsible-content {
  max-height: 0px;
  overflow: hidden;
  transition: max-height .25s ease-in-out;
}

.toggle:checked + .lbl-toggle + .collapsible-content {
  max-height: 350px;
}

.toggle:checked + .lbl-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.collapsible-content .content-inner {
  background: rgba(250, 224, 66, .2);
  border-bottom: 1px solid rgba(250, 224, 66, .45);
  border-bottom-left-radius: 7px;
  border-bottom-right-radius: 7px;
  padding: .5rem 1rem;
}
.crianca{
    margin-bottom: 14px;
    margin-top: 14px;
        border: 4px solid #FEC225;
        box-shadow: 3px 3px 3px #5CACCB;
        opacity: 2px;
        padding: 10px;
        
        box-sizing: border-box;
        transition: opacity;
}
.enca{
margin-bottom: 14px;
    margin-top: 14px;
    border: 4px solid #FEC225;
        box-shadow: 3px 3px 3px #5CACCB;

}

#cab{
font-family: sans-serif;
font-weight: normal;


}
body{


}
#divGeral{
background-image:url("fundo.png") ;
color: black;


    
}



body h2{
font-family: Arial, sans-serif ;
font-size: 50px;
margin-left:20% ;margin-right:30%;
color:#5CACCB;
text-shadow: 3px 2px 2px rgba(0,0,0,.6);

}


 .dadosC{
font-family: Arial, sans-serif ;
font-size: 30px;
color:#5CACCB;
text-shadow: 1px 1px 1px rgba(0,0,0,.6);

}
.morada{
font-family: Arial, sans-serif ;
font-size: 20px;
color:#5CACCB;
text-shadow: 1px 1px 1px rgba(0,0,0,.6);



}
.ficha{

border: 1px #FEC225 solid;

}
.Nome{

    padding-right: 19px;
  
    margin: 0px 0px 0px 12px;
    }

.Apelido{
padding-right: 19px;


}
#enderecoc{
padding-right: 110px;

}


.Tel{
    margin: 0px 0px 0px 1px;


}
.prof{

    margin: 0px 0px 0px 30px;
    padding-right: 4px;

}
.parent{
margin: 0px 0px 0px 17px;
}
        </style>
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
             <span style="font-weight: bold"> Copyright © 2018</span> Amguinhos do Rei. Todos os direitos reservados
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