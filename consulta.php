<?php
 // Conectando ao banco de dados:
 include_once("conexao.php");
 
 // Recebendo os dados a pesquisar
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGEH</title>

    <link rel="shortcut icon" type="image/icon" href="assets/images/logo/logo1 - Copia.png"/>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='#' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    .navbar-nav {
      margin-left: 50%;
      font-size: 17px;
    }

    .imglogo{
      margin-top: 8;
      margin-left: 20;
    }

    .container{
      margin-top:110px;
    }

    .titulo{
      color: #000;
      font-size: 30px;
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      padding-bottom: 15;
    }

    .escolha{
      color: #000;
      font-size: 20px;
      margin-left: 8%;
      margin-right: 8%;
    }

    .descricao{
      color: #000;
      font-size: 20px;
      text-align: justify;
      margin-left: 8%;
      margin-right: 8%;
      margin-top:2%;
    }

    .titulo2{
      color: #000;
      font-size: 25px;
      text-align: justify;
      margin-left: 8%;
      margin-right: 8%;
      margin-top:2%;
      font-family: 'Playfair Display', serif;
      font-weight: 700;
    }

    .row{
      margin-left: 25%;
      margin-right: 4%;
      margin-top: 3%;
    }

    .botao{
      width: 80;
      height: 50;
      border: 0;
      margin-left: 50%;
      background: #481658;
      color: #fff;
      font-weight: 700;
    }

    .th{
      text-align:center;
    }
  </style>

</head>
<body>

  <!--Menu-->
    <nav class="navbar navbar-expand-sm  navbar-dark fixed-top" style="background-color: #481658;" >
      <!-- Brand/logo -->   
      <a class="navbar-brand" href="index2.html">
        <img class="imglogo" src="assets/images/logo/logo3.png" alt="logo" width="60">
      </a>
                
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index2.html">Página Inicial</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="programas.html">Programas</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="consulta.php">Consulta</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="cadastro.html">Cadastro</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="sobre.html">Sobre</a>
        </li>
      </ul>
    </nav>
  <!--Menu-->

  <div class="container">
    <div class="titulo"><center>Consulta do Banco de Currículos</center></div>

    <div class="imgcurri">
        <center><img src="assets/images/aleatoria/curriculo.jpg" width="800px"></center>
    </div>

    <div class="descricao"> 
        Após realizar o cadastro do currículo, é possível visualizar e filtrar os usuários cadastrados.
        Basta selecionar abaixo, em relação ao perfil do pretendido empregado, os principais filtros: grau de escolaridade, sexo, cidade e área de atuação.
    </div>

    <div class="descricao"> 
        Lembrando, para realização do currículo é necessário o preenchimento do seguinte formulário de cadastro do mesmo. 
        Caso não tenha cadastrado ainda, <a href="consulta.html">clique aqui</a>.
    </div>

    <div class="titulo2"> Procure um currículo </div>


    <form name="cadastro" action="#tabela" method="POST">
        <div class="escolha"> Selecione os filtros:</div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="grau"><h5>Grau de Escolaridade:</h5></label>
                            <select class="form-control" name="graub" id="graub">
                                <option value="">Grau de Escolaridade</option>
                                <option value="Superior Completo">Superior Completo</option>
                                <option value="Superior Incompleto">Superior Incompleto</option>
                                <option value="Ensino Médio Completo">Ensino Médio Completo</option>
                                <option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>
                                <option value="Ensino Fundamental Completo">Ensino Fundamental Completo</option>
                                <option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>
                                <option value="Lê e Escreve">Lê e Escreve</option>
                                <option value="Analfabetismo">Analfabetismo</option>
                            </select>
                    </div>
                </div>
                            
                    <div class="form-group">
                        <label for="sexob"><h5>Sexo:</h5></label>
                            <select class="form-control" name="sexob" id="sexob" >
                                <option value="">Sexo</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Outros">Outros</option>
                            </select>
                    </div>

                    <div class="col-md-3">
                        <label for="cidadeb"><h5>Cidade:</h5></label>
                            <input type="text" class="form-control" name="cidadeb" placeholder="Cidade">
                    </div>

                </div>
        <button class="botao" type="submit" name="enviar" value="Enviar"> Filtrar </button> 
    </form> 
  </div> 


<?php
$pesquisa = $_POST['graub'];
$pesquisa2 = $_POST['sexob'];
$pesquisa3 = $_POST['cidadeb'];
?>

<!-- Criando tabela e cabeçalho de dados: -->
 <table border="1" style='width:90%' align='center' id="tabela">
 <tr class="th">
 <th>CPF</th>
 <th>Nome</th>
 <th>Sexo</th>
 <th>Idade</th>
 <th>Cidade</th>
 <th>Grau de escolaridade</th>
 <th>Instituição</th>
 </tr>
 
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 $sql = "SELECT dados_pessoais.cpf, dados_pessoais.nome, YEAR(CURDATE()) - YEAR(dados_pessoais.dt_nasc),dados_pessoais.sexo, dados_pessoais.cidade, escolaridade.grau, escolaridade.instituicao FROM dados_pessoais INNER JOIN escolaridade ON dados_pessoais.cpf = escolaridade.cpf_escola WHERE escolaridade.grau = '$pesquisa' AND dados_pessoais.sexo = '$pesquisa2' AND dados_pessoais.cidade = '$pesquisa3'";
 $resultado = mysqli_query($conexao,$sql) or die("Erro ao retornar dados");
 
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   $cpf = $registro['cpf'];
   $nome = $registro['nome'];
   $sexo = $registro['sexo'];
   $idade = $registro['YEAR(CURDATE()) - YEAR(dados_pessoais.dt_nasc)'];
   $cidade = $registro['cidade'];
   $grau = $registro['grau'];
   $ins = $registro['instituicao'];
   echo "<tr>";
   echo "<td>".$cpf."</td>";
   echo "<td>".$nome."</td>";
   echo "<td>".$sexo."</td>";
   echo "<td>".$idade."</td>";
   echo "<td>".$cidade."</td>";
   echo "<td>".$grau."</td>";
   echo "<td>".$ins."</td>";   
   echo "</tr>";
 }
 mysqli_close($conexao);
 echo "</table><br><br><br><br><br><br>";
?>
</div>


</body>
</html>