<?php

 $link = mysqli_connect('localhost', 'root', '');
 
 if(!$link){
   die('Problema na Conexao: ' . mysqli_error());
 }
 $db_selected= mysqli_select_db($link , "locadoraJogos");
 
 if(!$db_selected){
   die('Erro ao abrir Banco de Dados: ' . mysqli_error());
 }

 // Sanitizar entradas
$usuario = mysqli_real_escape_string($link, $_REQUEST["txtUsuario"]);
$senha = mysqli_real_escape_string($link, $_REQUEST["txtSenha"]);

 $result = mysqli_query($link, "SELECT * FROM tblusuarios WHERE usrusuario = '$usuario' AND usrsenha = '$senha' ");
 if (!$result) {
  die('Erro na consulta: ' . mysqli_error($link));
} 

 $row = mysqli_fetch_array($result);

 if(!$row) {
    echo "<script type='text/javascript'>	
             alert('Usuario inexistente... Tente outro...');	
              window.location.replace('index.php');	
         </script> 
         ";
 } else {
     
      setcookie("usuario", $usuario, time() + 3600, "/");  
    
      
      session_start();
      $_SESSION['usuario'] = $usuario;
   
    header('Location: ./fmrLogado.php');
 }
 mysqli_free_result($result);
 $fechou = mysqli_close($link);

?>