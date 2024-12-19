<?php
include 'Banco_Biblioteca.php';

	$link = mysqli_connect('localhost', 'root', '');
	if (!$link){
		die('Problema na conexao: ' . mysqli_error());
	}
  echo "Conexão estabelecida com sucesso.<br>";

	$db_selected = mysqli_select_db($link,'locadoraJogos');
	if (!$db_selected){
		die ('Erro ao abrir o banco locadoraJogos : ' . mysqli_error());
	}
  echo "Banco de dados selecionado.<br>";
  

	$result=mysqli_query($link,"SELECT * FROM tblcomprador WHERE usrUsuario='".$_REQUEST["txtUsuario"]."'");

	$row=mysqli_fetch_array($result);
	if ($row){

		echo "<script type='text/javascript'>	alert('Usuario existente... Tente outro...');	</script>";
	} else {
        $strSql = "INSERT INTO tblcomprador (usrid,usrUsuario,usrTelefone,usrDataPegaJogo) values (NULL,";
        $strSql .= "'" . $_POST["txtUsuario"]. "',";
        $strSql .= "'" . $_POST["txtTelefone"]. "',";
        $strSql .= "'" . $_POST["txtDataPegaJogo"]. "')";

        $resultado = mysqli_query($link, $strSql);

        if(!$resultado){
          echo "<script type='text/javascript'>	alert('Problema na inclusao do usuario... Tente novamente !!!');	</script>";
       
        } else {
          echo "<script type='text/javascript'>	alert('Usuario Cadastrado com sucesso !!!');	</script>";
        }
    }

    mysqli_free_result($result);
    $fechou = mysqli_close($link);
    header( 'Location: ./fmrLocadora.php' );

    ?>