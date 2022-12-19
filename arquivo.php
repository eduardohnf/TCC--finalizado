<?php
 include "conexao.php";
 
 	$vnome=$_POST["nome"];
	$vdatanas=$_POST["dt_nasc"];
	$vsexo=$_POST["sexo"];
	$vcpf=$_POST["cpf"];
	$vrg=$_POST["rg"];
	$vestadocivil=$_POST["estado_civil"];
	$vtelefone=$_POST["telefone"];
	$vtelefone2=$_POST["telefone_2"];
	$vendereco=$_POST["endereco"];
	$vnumero=$_POST["numero"];
	$vbairro=$_POST["bairro"];
	$vpontoref=$_POST["ponto_ref"];
	$vcidade=$_POST["cidade"];
	$vcep=$_POST["cep"];
	$vtemporesi=$_POST["tempo_resi"];
	$vtipo=$_POST["tipo"];
	$vvalor=$_POST["preco"];
	$vcad=$_POST["cad"];
	$vpcd=$_POST["pcd"];
	$vpcdinfo=$_POST["pcd_info"];

//    $id=$_POST['id_beneficios'];
//	  $vbolsa=$_POST["bolsafamilia"];
//    $vrendaci=$_POST["rendacidada"];
//    $vbpc=$_POST["bpc"];
//    $vaposen=$_POST["aposentadoria"];
//    $vpen=$_POST["pensao"];
//    $vots=$_POST["outros"];
//    $vnhm=$_POST["nenhum"];
//    $vtu=$_POST["valor_tipo1"];
//    $vtd=$_POST["valor_tipo2"];
//    $vtt=$_POST["valor_tipo3"];
//    $vtq=$_POST["valor_tipo4"];
//   $vtc=$_POST["valor_tipo5"];
//    $vts=$_POST["valor_tipo6"];

	$vnomed=$_POST["nomedepen"];
	$vidaded=$_POST["idaded"];
	$vcpfd=$_POST["cpfd"];
	$vparentescod=$_POST["parentescod"];
	$vprofissaod=$_POST["profissaod"];
	$vsalariod=$_POST["salariod"];

	$vnomed2=$_POST["nomedepen2"];
	$vidaded2=$_POST["idaded2"];
	$vcpfd2=$_POST["cpfd2"];
	$vparentescod2=$_POST["parentescod2"];
	$vprofissaod2=$_POST["profissaod2"];
	$vsalariod2=$_POST["salariod2"];

	$vnomed3=$_POST["nomedepen3"];
	$vidaded3=$_POST["idaded3"];
	$vcpfd3=$_POST["cpfd3"];
	$vparentescod3=$_POST["parentescod3"];
	$vprofissaod3=$_POST["profissaod3"];
	$vsalariod3=$_POST["salariod3"];

//	$vfuncao=$_POST["u_funcao"];
//	$vtempo=$_POST["t_desem"];
//	$vempresa=$_POST["empresa"];
//	$vcargo=$_POST["cargo"];
//	$vdescr=$_POST["descricao"];
//	$vdentra=$_POST["d_entrada"];
//	$vdsaida=$_POST["d_saida"];

	$vpart=$_POST["participacao"];
	$vdtentrada=$_POST["dt_entrada"];
	$vlocal=$_POST["locall"];
	$vmotivo=$_POST["motivo"];

	$vgrau=$_POST["grau"];
	$vinst=$_POST["instituicao"];
	$vinicio=$_POST["inicio"];
	$vconclusao=$_POST["conclusao"];

	$pesquisa = $_POST['Sexo'];

//	$sql1="INSERT INTO dados_pessoais VALUES('$vcpf','$vnome','$vsexo','$vrg','$vdatanas','$vestadocivil','$vendereco','$vnumero','$vbairro','$vpontoref','$vcidade','$vcep','$vtelefone','$vtelefone2','$vtemporesi','$vtipo','$vvalor','$vcad','$vpcd','$vpcdinfo')";
//	mysqli_query($conexao,$sql1);


$sql1="INSERT INTO dados_pessoais VALUES('$vcpf','$vnome','$vsexo','$vrg','$vdatanas','$vestadocivil','$vendereco','$vnumero','$vbairro','$vpontoref','$vcidade','$vcep','$vtelefone','$vtelefone2','$vtemporesi','$vtipo','$vvalor','$vcad','$vpcd','$vpcdinfo')";
mysqli_query($conexao,$sql1);
	
//$sql2="INSERT INTO beneficios(tipo1,valor_tipo1,tipo2,valor_tipo2,tipo3,valor_tipo3,tipo4,valor_tipo4,tipo5,valor_tipo5,tipo6,valor_tipo6,nenhum,cpf_bene) VALUES('{$vbolsa}','{$vtu}','{$vrendaci}','{$vtd}','{$vbpc}','{$vtt}','{$vaposen}','{$vtq}','{$vpen}','{$vtc}','{$vots}','{$vts}','{$vnhm}','{$vcpf}')";
//mysqli_query($conexao,$sql2);

$sql3="INSERT INTO dependentes VALUES('$vcpfd','$vnomed','$vidaded','$vparentescod','$vprofissaod','$vsalariod','$vcpf')";
mysqli_query($conexao,$sql3);

$sql4="INSERT INTO dependentes VALUES('$vcpfd2','$vnomed2','$vidaded2','$vparentescod2','$vprofissaod2','$vsalariod2','$vcpf')";
mysqli_query($conexao,$sql4);

$sql5="INSERT INTO dependentes VALUES('$vcpfd3','$vnomed3','$vidaded3','$vparentescod3','$vprofissaod3','$vsalariod3','$vcpf')";
mysqli_query($conexao,$sql5);

//$sql4="INSERT INTO experiencia(u_funcao,t_desem,empresa,cargo,descricao,d_entrada,d_saida,cpf_principal) values('$vfuncao','$vtempo','$vempresa','$vcargo','$vdescr','$vdentra','$vdsaida','$vcpf')"
//mysqli_query($conexao,$sql4);

$sql7="INSERT INTO frentet(participacao,dt_entrada,locall,motivo,cpf_frentet) VALUES('$vpart','$vdtentrada','$vlocal','$vmotivo','$vcpf')";
mysqli_query($conexao,$sql7);

$sql8="INSERT INTO escolaridade(grau,instituicao,inicio,conclusao,cpf_escola) VALUES('$vgrau','$vinst','$vinicio','$vconclusao','$vcpf')";
mysqli_query($conexao,$sql8);



$linhas=mysqli_affected_rows($conexao);

	if ($linhas == 1){
		echo "Registro gravado com sucesso <br/>";
	} else {
		echo "Falha na gravação do registro <br/>";
	}

	mysqli_close($conexao);

?>






<!--
<
	$vnome=$_POST["nome"];
	$vdatanas=$_POST["data_nasc"];
	
	echo "Nome: ".$vnome."<br/>Data de Nascimento: ".$vdatanas."<br/>"
?>
-->