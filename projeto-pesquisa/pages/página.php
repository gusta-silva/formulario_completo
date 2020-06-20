<?php

require 'projeto-pesquisa/util/conexao.php';

if (!empty($_POST)) {
  //Erros de validação

  $p1Erro = null;
  $p2Erro = null;
  $p3Erro = null;
  $p4Erro = null;
  $p5Erro = null;
  $p6Erro = null;
  $p7Erro = null;
  $p8Erro = null;
  $p9Erro = null;
  $p10Erro = null;

  if(isset ($_POST["p1"])) {
  $p1 = $_POST['p1'];}
  if(isset ($_POST["p2"])) {
  $p2 = $_POST['p2'];}
  if(isset ($_POST["p3"])) {
  $p3 = $_POST['p3'];}
  if(isset ($_POST["p4"])) {
  $p4 = $_POST['p4'];}
  if(isset ($_POST["p5"])) {
  $p5 = $_POST['p5'];}
  if(isset ($_POST["p6"])) {
  $p6 = $_POST['p6'];}
  if(isset ($_POST["p7"])) {
  $p7 = $_POST['p7'];}
  if(isset ($_POST["p8"])) {
  $p8 = $_POST['p8'];}
  if(isset ($_POST["p9"])) {
  $p9 = $_POST['p9'];}
  if(isset ($_POST["p10"])) {
  $p10 = $_POST['p10'];}

  $validacao = true;

  if (empty($p1)) {
    $p1Erro = 'Informe a resposta da pergunta 1';
    $validacao = false;
  }

  if (empty($p2)) {
    $p2Erro = 'Informe a resposta da pergunta 2';
    $validacao = false;
  }

  if (empty($p3)) {
    $p3Erro = 'Informe a resposta da pergunta 3';
    $validacao = false;
  }

  if (empty($p4)) {
    $p4Erro = 'Informe a resposta da pergunta 4';
    $validacao = false;
  }

  if (empty($p5)) {
    $p5Erro = 'Informe a resposta da pergunta 5';
    $validacao = false;
  }

  if (empty($p6)) {
    $p6Erro = 'Informe a resposta da pergunta 6';
    $validacao = false;
  }

  if (empty($p7)) {
    $p7Erro = 'Informe a resposta da pergunta 7';
    $validacao = false;
  }

  if (empty($p8)) {
    $p8Erro = 'Informe a resposta da pergunta 8';
    $validacao = false;
  }

  if (empty($p9)) {
    $p9Erro = 'Informe a resposta da pergunta 9';
    $validacao = false;
  }

  if (empty($p10)) {
    $p10Erro = 'Informe a resposta da pergunta 10';
    $validacao = false;
  }

  if ($validacao) 
  {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO perg (p1, p2, p3, p4, p5, p6, p7, p8, p9, p10) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10));
    Banco::desconectar();
    header("Location: index.php");
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <script type="text/javascript">     
      function validar(){
        var p1 = formperguntas.p1.value;
        var p2 = formperguntas.p2.value;
        var p3 = formperguntas.p3.value;
        var p4 = formperguntas.p4.value;
        var p5 = formperguntas.p5.value;
        var p6 = formperguntas.p6.value;
        var p7 = formperguntas.p7.value;
        var p8 = formperguntas.p8.value;
        var p9 = formperguntas.p9.value;
        var p10 = formperguntas.p10.value;
  if (p1 == ""){
            alert ('responda a pergunta de número 1');
            formperguntas.p1.focus()
            return false;
      }

      if (p2 == ""){
            alert ('responda a pergunta de número 2');
            formperguntas.p2.focus()
            return false;
      }

      if (p3 == ""){
            alert ('responda a pergunta de número 3');
            formperguntas.p3.focus()
            return false;
      }
      
      if (p4 == ""){
            alert ('responda a pergunta de número 4');
            formperguntas.p4.focus()
            return false;
      }
      
      if (p5 == ""){
            alert ('responda a pergunta de número 5');
            formperguntas.p5.focus()
            return false;
      }
      
      if (p6 == ""){
            alert ('responda a pergunta de número 6');
            formperguntas.p6.focus()
            return false;
      }
      
      if (p7 == ""){
            alert ('responda a pergunta de número 7');
            formperguntas.p7.focus()
            return false;
      }
      
      if (p8 == ""){
            alert ('responda a pergunta de número 8');
            formperguntas.p8.focus()
            return false;
      }

      if (p9 == ""){
            alert ('responda a pergunta de número 9');
            formperguntas.p9.focus()
            return false;
      }
      
      if (p10 == ""){
            alert ('responda a pergunta de número 10');
            formperguntas.p10.focus()
            return false;
      } 
alert("Seu questionário foi enviado com sucesso!");
        window.location.href = "index.php"; 
    }
  </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Questionário | Funcional</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/C:/Users/Gustavo/Desktop/projeto-master/projeto-pesquisa/static/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/C:/Users/Gustavo/Desktop/projeto-master/projeto-pesquisa/static/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!--
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    -->

    <!-- Main Sidebar Container -->
    
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <img src="/C:/Users/Gustavo/Desktop/projeto-master/projeto-pesquisa/static/img/logo.png" width="120px" height="40px">
                <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
                <p>
                 <!-- Ideflor-bio-->
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 2000px;">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Questionário Sócio-Funcional DGAF</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Pesquisa</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12"><h3>
              Para que possamos melhor nos relacionarmos e proporcionarmos atividades que melhor lhe atendam, marque abaixo a resposta que melhor se aplica a você, de acordo com as perguntas.</h3>
            </div>
          </div>
          <div class="mt-4"></div>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Questionário</h3>
            </div>

            <form name="formperguntas" action="index.php" method="post">
              <div class="card-body">

                <h5>1. É alérgico ?</h5>
                <div class="form-group <?php echo !empty($p1Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Sim<input type="radio" id="p1sim" name="p1" value="Sim" required="p1"><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Não<input type="radio" id="p1nao" name="p1" value="Nao"/><span class="circle"></span>
                    </label>
                  </div>
                        <div><h5>Se sim, a que ?</h5></div><input type="text" name="p1">
                </div>
                  <hr class="hr3">
                
                <h5>2. Tipo de sangue ?</h5>
                <div class="form-group">
                <div class="form-check">
                <input type="text" name="p2">
                    <div><hr class="hr3"></div>
                  </div>
                </div>

                <h5>3. Tem alguma deficiência ?</h5>
                <div class="form-group <?php echo !empty($p3Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Sim<input type="radio" id="p3sim" name="p3" value="Sim" required="p3" /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Não<input type="radio" id="p3nao" name="p3" value="Nao"/><span class="circle"></span>
                    </label>
                  </div>
                  <div><h5>Se sim, qual ?</h5></div><input type="text" name="p3">
                </div>
                <hr class="hr3">
              <h5>4. Quais assuntos gostaria de ter mais conhecimento ? assinale duas alternativas.</h5>
                <div class="form-group <?php echo !empty($p4Erro) ? 'error ' : ''; ?> ">
                              <div class="form-check">     
                                     <div>
                            <label for="saude" class="">Saúde
                            <input class="" type="checkbox" id="saude" value="saúde" name="p4"
                           >
                           
                          </label>
                            </div>
                              </div>
                                    
                              <div>
                              <label for="alimentacao">Alimentação Saudável  
                              <input type="checkbox" id="alimentacao" value="alimentação" name="p4">
                              
                              </label>
                                      
                                              <div>
                              <input type="checkbox" class="" id="esportes" value="esportes" name="p4"
                                     >
                              <label for="esportes">esportes</label>

                            </div>
                            <div>
                              <input type="checkbox" id="tic" value="tecnologia, infomação, ciência" name="p4">
                              <label for="tic">Tecnologia, inovação, ciência</label>
                            </div>

                            <div>
                              <input type="checkbox" id="estetica" value="estética" name="p4"
                                     >
                              <label for="estetica">Estética</label>
                            </div>

                            <div>
                              <input type="checkbox" id="artes" value="artes" name="p4">
                              <label for="artes">Artes</label>
                            </div>

                            <div>
                              <input type="checkbox" id="meio" value="meio ambiente" name="p4"
                                     >
                              <label for="meio">Meio Ambiente</label>
                            </div>

                            <div>
                              <input type="checkbox" id="politica" value="politica" name="p4">
                              <label for="politica">Política</label>
                                              </div>
                                              </div><hr class="hr3">
                                            </div>
                                  
                <h5>5. O que gosta de fazer nas horas vagas ? Assinale duas alternativas.</h5>
              <div class="form-group">
                <div class="form-check">
                
                          <div>
                            <input type="checkbox" id="escolha9" value="ir ao cinema com amigos" name="p5"
                                   >
                            <label for="escolha9">Ir ao cinema com amigos</label>
                          </div>

                          <div>
                            <input type="checkbox" id="escolha10" value="prática de esportes" name="p5">
                            <label for="escolha10">Prática de Esportes</label>
                          </div>

                          <div>
                            <input type="checkbox" id="escolha11" value="ficar em casa descansando" name="p5"
                                   >
                            <label for="escolha11">Ficar em casa descansando</label>
                          </div>

                          <div>
                            <input type="checkbox" id="escolha12" value="ler um livro/estudar" name="p5">
                            <label for="escolha12">Ler um livro e/ou estudar</label>
                          </div>
                                              
                          <div>
                            <input type="checkbox" id="escolha13" value="ir ao cinema com amigos" name="p5"
                                   >
                            <label for="escolhae14">Ir ao cinema com amigos</label>
                          </div>

                          <div>
                            <input type="checkbox" id="escolha14" value="prática de esportes" name="p5">
                            <label for="escolha14">Prática de Esportes</label>
                          </div>

                          <div>
                            <input type="checkbox" id="escolha15" value="ficar em casa descansando" name="p5"
                                   >
                            <label for="escolha15">Ficar em casa descansando</label>
                          </div>

                          <div>
                            <input type="checkbox" id="escolha16" value="visitar amigos/parentes" name="p5">
                            <label for="escolha16">visitar amigos e/ou parentes</label>
                          </div>
                                            </div><hr class="hr3">
                                          </div>

                <h5>6. Em casos de viagem, qual lugar escolheria?</h5>
                <div class="form-group <?php echo !empty($p6Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Cidades praianas<input type="radio" id="a1" name="p6" value="Cidades praianas" required="p6"><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Montanhas <input type="radio" id="a2" name="p6" value="montanhas" /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Fazenda, sítio, campo.<input type="radio" id="a3" name="p6" value="fazenda, sítio, campo"/><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Grande centro urbano<input type="radio" id="a4" name="p6" value="grande centro urbano"/><span class="circle"></span>
                    </label><hr class="hr3">
                  </div>
                </div>

                <h5>7. Como se descreveria?</h5>
                <div class="form-group <?php echo !empty($p6Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Sociável, porém prefiro lugares sossegados, fora de aglomerações<input type="radio" id="a5" name="p7" value="Sociável, porém prefiro lugares sossegados, fora de aglomerações" required="p6"><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Sociável, gosto de lugares agitados, em constante contato com pessoas<input type="radio" id="a6" name="p7" value="Sociável, gosto de lugares agitados, em constante contato com pessoas" /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Sociável, gosto de lugares onde tenho contato com pessoas, mas não tanto aglomerados.<input type="radio" id="a7" name="p7" value="Sociável, gosto de lugares onde tenho contato com pessoas, mas não tanto aglomerados." /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Não gosto de estar em grandes aglomerações, prefiro ficar isolado e/ou com meus familiares ou amigos.<input type="radio" id="a8" name="p7" value="Não gosto de estar em grandes aglomerações, prefiro ficar isolado e/ou com meus familiares ou amigos." /><span class="circle"></span>
                    </label><hr class="hr3">
                  </div>
                </div>

                <h5>8. Quanto ao seu conhecimento profissional?</h5>
                 <div class="form-group <?php echo !empty($p6Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Sou estudante. <input type="radio" id="a9" name="p8" value="Sou estudante" required=""><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Tenho uma carreira solidificada, estou satisfeito com o grau do meu conhecimento.<input type="radio" id="a10" name="p8" value="Tenho uma carreira solidificada, estou satisfeito com o grau do meu conhecimento." /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Tenho uma formação superior e pretendo ainda fazer outra graduação e/ou pós graduação.<input type="radio" id="a11" name="p8" value="Tenho uma formação superior e pretendo ainda fazer outra graduação e/ou pós graduação." /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer"> Tenho mais de uma formação superior e gosto de estar em constante aprendizado, buscando conhecimento.<input type="radio" id="a12" name="p8" value="Tenho mais de uma formação superior e gosto de estar em constante aprendizado, buscando conhecimento." /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Não tenho, ainda uma formação superior, mas estou buscando aprimoramento técnico e/ou graduação superior.<input type="radio" id="a13" name="p8" value="Não tenho, ainda uma formação superior, mas estou buscando aprimoramento técnico e/ou graduação superior." /><span class="circle"></span>
                    </label><hr class="hr3">
                  </div>
                </div>

                <h5>9. Como descreveria sua auto imagem?</h5>
                <div class="form-group <?php echo !empty($p6Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer"> Gosto de minha imagem, me considero uma pessoa bonita e estou satisfeito comigo. <input type="radio" id="a14" name="p9" value="Gosto de minha imagem, me considero uma pessoa bonita e estou satisfeito comigo." required=""><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Gosto de minha imagem, me considero uma pessoa simpática, mas mudaria algumas coisas em meu corpo, pois não estou plenamente satisfeito (a)<input type="radio" id="a15" name="p9" value=">Gosto de minha imagem, me considero uma pessoa simpática, mas mudaria algumas coisas em meu corpo, pois não estou plenamente satisfeito (a)" /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Gosto parcialmente de minha imagem, mudaria muita coisa, não estou plenamente satisfeito (a) com meu corpo<input type="radio" id="a16" name="p9" value="Gosto parcialmente de minha imagem, mudaria muita coisa, não estou plenamente satisfeito (a) com meu corpo" /><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">  Não estou satisfeito (a) com minha imagem, se pudesse mudaria muita coisa em mim.<input type="radio" id="a17" name="p9" value="Não estou satisfeito (a) com minha imagem, se pudesse mudaria muita coisa em mim." /><span class="circle"></span>
                    </label>
                  </div><hr class="hr3">

                <h5>10.  Marque os cincos sentidos ou situações que o(a) fazem sentir-se motivado(a) no trabalho</h5>
                <div class="form-group <?php echo !empty($p10Erro) ? 'error ' : ''; ?> ">
                  

                          <div>
                            <input type="checkbox" value="trabalhar sozinho" id="a18" name="p10">
                            <label for="a18">Trabalhar sozinho </label>
                          </div>

                          <div>
                            <input type="checkbox" id="a19" value="trabalhar em equipe" name="p10"
                                   >
                            <label for="a19">)Trabalhar em Equipe</label>
                          </div>

                          <div>
                            <input type="checkbox" value="Planejar" id="a20" name="p10">
                            <label for="a20">Planejar</label>
                          </div>
                                              
                          <div>
                            <input type="checkbox" value="Expressar minhas idéias" id="a21" name="p10"
                                   >
                            <label for="a21">Expressar minhas idéias </label>
                          </div>

                          <div>
                            <input type="checkbox" id="a22" value="Estar no controle da situação" name="p10">
                            <label for="a22">Estar no controle da situação</label>
                          </div>

                          <div>
                            <input type="checkbox" id="a23" value="Provocar mudanças" name="p10"
                                   >
                            <label for="a23">Provocar mudanças</label>
                          </div>

                          <div>
                            <input type="checkbox" id="a24" value="Prestar atenção aos detalhes" name="p10">
                            <label for="a24">Prestar atenção aos detalhes</label>
                          </div>


         <div>
                            <input type="checkbox" value="Fazer algo funcionar" id="a25" name="p10"
                                   >
                            <label for="a25">Fazer algo funcionar</label>
                          </div>

                          <div>
                            <input type="checkbox" id="a26" value="Produzir e organizar" name="p10">
                            <label for="a26">Produzir e organizar</label>
                          </div>

                          <div>
                            <input type="checkbox" id="a27" value="Me sentir reconhecido e valorizado pelo trabalho desenvolvido" name="p10"
                                   >
                            <label for="a27">Me sentir reconhecido e valorizado pelo trabalho desenvolvido</label>
                          </div>

                          <div>
                            <input type="checkbox" id="a28" value="Usar números, estatísticas" name="p10">
                            <label for="a28">Usar números, estatísticas </label>
                          </div>
                           <div>
                            <input type="checkbox" id="a29" value="Ouvir e falar" name="p10">
                            <label for="a29">Ouvir e falar</label>
                          </div>

                                            </div><hr class="hr3">
                                          
                          
                          <h5>11. No trabalho, me considero:</h5>
                <div class="form-group <?php echo !empty($p1Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Uma pessoa comunicativa e expansiva<input type="radio" id="a30" name="p11" value="Uma pessoa comunicativa e expansiva" required=""><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Um bom ouvinte e reservado<input type="radio" id="a31" name="p11" value="Um bom ouvinte e reservado"/><span class="circle"></span>
                    </label>
                  </div><hr class="hr3">
                 

                 
                  <h5>12. No ambiente de trabalho, tende a perceber:</h5>
                <div class="form-group <?php echo !empty($p1Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Desordem e bagunça<input type="radio" id="a32" name="p12" value="Desordem e bagunça" required=""><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Oportunidade para mudar algo<input type="radio" id="a33" name="p12" value="Oportunidade para mudar algo"/><span class="circle"></span>
                    </label>
                  </div><hr class="hr3">
                  

                  <h5>13. Aguardando o início de uma reunião, prefere:</h5>
                <div class="form-group <?php echo !empty($p1Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Conversar com os outros participantes<input type="radio" id="a34" name="p13" value="Conversar com os outros participantes" required=""><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">Ficar na sua, tranquilo e quieto<input type="radio" id="a35" name="p13" value="Ficar na sua, tranquilo e quieto"/><span class="circle"></span>
                    </label>
                  </div><hr class="hr3">
                  

                  <h5>14.  Em sua rotina profissional, você confia mais..</h5>
                <div class="form-group <?php echo !empty($p1Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Em suas experiências e vivências.<input type="radio" id="a36" name="p14" value="Em suas experiências e vivências." required="p14"><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer"> Em suas intuições e concepções.<input type="radio" id="a37" name="p14" value="Em suas intuições e concepções."/><span class="circle"></span>
                    </label>
                  </div><hr class="hr3">
                  

                  <h5>15.  Você se sente melhor quando seu trabalho...</h5>
                <div class="form-group <?php echo !empty($p1Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">está planejado e organizado<input type="radio" id="a38" name="p15" value="está planejado e organizado" required=""><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">pode ser flexível, para que atue de forma espontânea<input type="radio" id="a39" name="p15" value="pode ser flexível, para que atue de forma espontânea"/><span class="circle"></span>
                    </label>
                  </div><hr class="hr3">
                
                <h5>Agora queremos saber do seu sistema representacional e nas questões abaixo enumere de acordo com a pontuação do quadro, sendo necessário a pontuação de todas as lacunas, começando sempre pela alternativa que melhor lhe descreve, seguindo a ordem DECRESCENTE de 4 a 1, onde 4 , a melhor que descreve você e 1, a que menos descreve você:</h5>


                <div><h4>4 = A que melhor lhe descreve</h4></div><div><h4>3= A próxima melhor descrição</h4></div>
                <h4>2= A próxima melhor</h4></div><h4>1 = A que menos descreve você</h4></div>
                <h5>16 - Tomo decisões importantes baseado em?</h5>

          <input type="text" id="a40" maxlength="10" size="5" name="p16">Intuição
          <input type="text" id="a41" maxlength="10" size="5" name="p16">O que soa melhor
          <input type="text" id="a42" maxlength="10" size="5" name="p16">O que me parece melhor
          <input type="text" id="a43" maxlength="10" size="5" name="p16">Um estudo preciso e minucioso do assunto
                                          </div>
                                          

                                          <h5>17.  Durante uma discussão, sou mais influenciado por?</h5>
                <div class="form-group <?php echo !empty($p1Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">Tom de voz da outra pessoa <input type="radio" id="a44" name="p17" value="Tom de voz da outra pessoa" required=""><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">se eu posso ou não ver o argumento da outra pessoa<input type="radio" id="a45" name="p17" value="se eu posso ou não ver o argumento da outra pessoa"/><span class="circle"></span>
                    </label>
                  </div>
                    <div class="form-check">
                    <label class="radioContainer">a lógica do argumento da outra pessoa<input type="radio" id="a46" name="p17" value="a lógica do argumento da outra pessoa"/><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">se eu entro em contato ou não com os sentimentos reais do outro<input type="radio" id="a47" name="p17" value="se eu entro em contato ou não com os sentimentos reais do outro"/><span class="circle"></span>
                    </label>
                  </div>
                  <hr class="hr3">

                  <h5>18. Eu comunico mais facilmente o que se passa comigo</h5>
                <div class="form-group <?php echo !empty($p1Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer"> no modo como me visto e aparento<input type="radio" id="a48" name="p18" value="no modo como me visto e aparento" required=""><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">pelos meus sentimentos que compartilho<input type="radio" id="a49" name="p18" value="pelos meus sentimentos que compartilho"/><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">pelas palavras que escolho<input type="radio" id="a50" name="p18" value="pelas palavras que escolho"/><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">pelo tom da minha voz<input type="radio" id="a51" name="p18" value="pelo tom da minha voz"/><span class="circle"></span>
                    </label>
                  </div>
                  <hr class="hr3">

                  <h5>19.  É muito fácil para mim:</h5>
                <div class="form-group <?php echo !empty($p1Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">achar volume e a sintonia ideais num sistema de som<input type="radio" id="a52" name="p19" value="achar volume e a sintonia ideais num sistema de som" required=""><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">selecionar o ponto mais relevante a um assunto interessante<input type="radio" id="a53" name="p19" value="selecionar o ponto mais relevante a um assunto interessante"/><span class="circle"></span>
                    </label>
                  </div>
                    <div class="form-check">
                    <label class="radioContainer">escolher os móveis mais confortáveis<input type="radio" id="a54" name="p19" value="escolher os móveis mais confortáveis"/><span class="circle"></span>
                    </label>
                  </div>
                    <div class="form-check">
                    <label class="radioContainer">escolher a combinações de cores mais ricas e atraentes<input type="radio" id="a55" name="p19" value="escolher a combinações de cores mais ricas e atraentes"/><span class="circle"></span>
                    </label>
                  </div>
                  <hr class="hr3">

                  <h5>20. Eu me percebo assim:</h5>
                <div class="form-group <?php echo !empty($p1Erro) ? 'error ' : ''; ?> ">
                  <div class="form-check">
                    <label class="radioContainer">se estou muito em sintonia com os sons do ambiente<input type="radio" id="a56" name="p20" value="se estou muito em sintonia com os sons do ambiente" required=""><span class="circle"></span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="radioContainer">se sou muito capaz de raciocinar com fatos e dados novos<input type="radio" id="a57" name="p20" value="se sou muito capaz de raciocinar com fatos e dados novos"/><span class="circle"></span>
                    </label>
                  </div>

                  <div class="form-check">
                    <label class="radioContainer">eu sou muito sensível à maneira como a roupa veste o meu corpo<input type="radio" id="a58" name="p20" value="eu sou muito sensível à maneira como a roupa veste o meu corpo"/><span class="circle"></span>
                    </label>
                  </div>
                <div class="form-check">
                    <label class="radioContainer">eu respondo fortemente às cores e à aparência de uma sala<input type="radio" id="a59" name="p20" value="eu respondo fortemente às cores e à aparência de uma sala"/><span class="circle"></span>
                    </label>
                  </div>
                  <hr class="hr3">


<h5>Deixe aqui sua sugestão de atividades e eventos:</h5>
<textarea></textarea><br>
<br><div><h5>A Equipe DGAF agradece a colaboração de todos os servidores pelo preenchimento do questionário, que colaborará à Gestão de Recursos Humanos.

A avaliação do sistema seu representacional será encaminhado ao seu e-mail, para que você mesmo se auto avalie! </h5></div>

              <div class="card-footer">
               <input type="submit"  name="enviar" onclick="return validar()" value="Enviar" class="btn btn-success"></input>
              </div>
            </form>

      </div>
    </div>
  </div>
</div>
       </div>


        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        NTI
      </div>
      <!-- Default to the left -->
      <strong>NTI <a href="#">Ideflor-bio</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="static/js/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="static/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="static/js/adminlte.min.js"></script>
</body>

</html>
