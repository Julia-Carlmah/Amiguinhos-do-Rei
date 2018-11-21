<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>Centro Infantil Amiguinhos do Rei</title>
    <link rel="stylesheet" type="text/css" href="aparencia.css">
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
		 <div id="top_left">OI</div>
		 <div id="top_mid">OLa</div>
		 <div id="top_right">
		 	<form action="" name="Form1" method="get">
	          <input  type="text" value="Nome"  name="valor1" id ="nome" size="20" />
              <br/>
              <br/>
              <input type="text"  value="Senha" name="valor2" id= "Senha" size="20" />
              <br/>
              <input type="button" name="" value="Entrar" 
              onclick="">
              <p> Esqueceu a Senha??</p>
	         </form>



		 </div>
	   </div> 
		
	    <div id="lateral_a"></div> 
	    <div id="conteudo">
		
		 <div id="menu-opcoes">
			<ul>							
              <li>Sua Conta</li>	
              <li>Lista	de Desejos</li>
              <li>Cartão Fidelidade</li>	
              <li>Sobre</li>	
              <li>Ajuda</li>			
            </ul>	
	    </div>
	    
	    <p>
	   
		 <img width="200" height="200" align="middle" src="IMG_4358.JPG">
		</p>

		<div id="rodapel" >
			
				<ul>							
                  
                  <br>
                    <h4 id="center"><b>CADASTRO DOS DADOS DO CLIENTE</b></h4>
                    <br> 
                    <form method="post" 
                          action="{{route('cliente.store')}}" 
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>

                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="bi">Numero de Bi</label>
                                <input type="text" name="bi" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>

                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="dataNasc">Data de Nascimento</label>
                                <input type="date" name="dataNasc" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="sexo">Sexo</label>
                                <input type="text" name="sexo" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>


                        <div class="col-md-6">              
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="text" name="email" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="text" name="senha" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="numeroDcasa">Numero de casa</label>
                                <input type="text" name="numeroDcasa" 
                                       class="form-control" 
                                       required>
                            </div>    
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="quarteirao">Quarteirao</label>
                                <input type="text" name="quarteirao" 
                                       class="form-control" 
                                       required>
                            </div>
                        </div>         

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bairro"> Bairro </label>
                                <input type="text" name="bairro"                               
                                       class="form-control">
                            </div>
                        </div> 

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="provincia"> Provincia </label>
                                <input type="text" name="provincia"                               
                                       class="form-control">
                            </div>
                        </div>                  




                        <div class="col-md-12">                   
                            <button type="reset" class="btn btn-default">
                                Limpar
                            </button>
                            <button type="submit" 
                                    class="btn btn-warning" id="black">
                                Cadastrar
                            </button>
                        </div>
                    </form>             
                </div>
            </div>
        </div>

        <br/>							
              <li>Sua Conta</li>	
              <li>Lista	de Desejos</li>
              <li>Cartão Fidelidade</li>	
             </ul>
     </div>

    </div>
    
    <div id="lateral_d">
    	
    </div>  
	
  </div>

</body>
</html>