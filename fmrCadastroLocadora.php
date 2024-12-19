<?php
include 'BancolocadoraJogos.php';



	$link = mysqli_connect('localhost', 'root', '');
	if (!$link){
		die('Problema na conexao: ' . mysqli_error());
	}

	$db_selected = mysqli_select_db($link,'locadoraJogos');
	if (!$db_selected){
		die ('Erro ao abrir o banco bddados : ' . mysqli_error());
	}

  


	$result=mysqli_query($link,"SELECT * FROM tbljogo WHERE jgNome='".$_REQUEST["txtNome"]."'");

	$row=mysqli_fetch_array($result);
	if ($row){

		echo "<script type='text/javascript'>	alert('Livro ja Pego... Tente outro...');	</script>";
	} else {
        $strSql = "INSERT INTO tbljogo (jgid,jgNome,jgTipo,jgDataDevolucao) values (NULL,";
        $strSql .= "'" . $_POST["txtNome"]. "',";
        $strSql .= "'" . $_POST["txtTipo"]. "',";
        $strSql .= "'" . $_POST["txtDataDevolucao"]. "')";

        $resultado = mysqli_query($link, $strSql);

        if(!$resultado){
          echo "<script type='text/javascript'>	alert('Problema na inclusao do jogo... Tente novamente !!!');	</script>";
       
        } else {
          echo "<script type='text/javascript'>	alert('jogo Cadastrado com sucesso !!!');	</script>";
          
        }
    }

    mysqli_free_result($result);
    $fechou = mysqli_close($link);
    header( 'Location: ./index.php' );
    

    ?>