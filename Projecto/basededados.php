<?php
	include_once("conexao.php");

	$apelido =$_POST['apelido'];
	$nome =$_POST['nome'];
	$genero =$_POST['genero'];
	$tipo_ident =$_POST['tipodeident'];
	$numero_ident =$_POST['numeroident'];
	$data_Nascimento =$_POST['dataNasc'];
	$bairro =$_POST['bairro'];
	$rua =$_POST['rua'];
	$doenca_especial =$_POST['normal'];
	$qual_doenca =$_POST['doenca'];
	$apelidoEnc =$_POST['apelidoenc'];
	$nomeEnc =$_POST['nomeenc'];
	$grau_parentesco =$_POST['grau'];
	$tipo_ident_Enc =$_POST['identificacaoenc'];
	$numero_ident_Enc =$_POST['numeroidenti'];
	$orgao_Emissor =$_POST['emissor'];
	$validade =$_POST['validade'];
	$profissao =$_POST['profissao']; 
	$nivel_Academico =$_POST['nivelacademico'];
	$local_trabalho =$_POST['localtrabalho'];
	$tel =$_POST['tel'];
	$recolher =$_POST['recolha'];



	$sql = "insert into formulario (Apelido,Nome,Genero,Tipo_ident,numero_ident,data_nascimento,bairro,rua,condicao_Saude,Qual,Apelido_Enc,Nome_Enc,	Grau_Parentesco,Tipo_Ident_Enc,Numero_Ident_Enc,Orgao_Emissor,Validade,Profissao,Nivel_Academico,Local_Trabalho,Telefone,recolher_crianca) values ('$apelido','$nome','$genero','$tipo_ident','$numero_ident','$data_Nascimento','$bairro','$rua','$doenca_especial','$qual_doenca','$apelidoEnc','$nomeEnc','$grau_parentesco','$tipo_ident_Enc','$numero_ident_Enc','$orgao_Emissor','$validade','$profissao','$nivel_Academico','$local_trabalho','$tel','$recolher')";

	mysqli_query($scon,$sql) or die(mysqli_error($scon));
	mysqli_close($scon);
	echo "Pre - inscricao feita com sucesso!<br>";





?>


													