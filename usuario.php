<?php
include 'BancolocadoraJogos.php';

session_start(); 

if (isset($_COOKIE["usuario"]) && !empty($_COOKIE["usuario"])) {
   
} else {
  
    echo "O cookie do usuário não foi definido ou expirou.";
   
    header('Location: ./index.php'); 
    exit();  
}

?>

<html>
	<head>
		<title>Login Aluno</title>
		<link rel="stylesheet" type="text/css" href="./Estilizacao.css">
        <script type="text/jscript" language="jscript">
            function Validar(){
                if(document.fmrLogin.txtUsuario.value == ''){

                    alert('Campo Usuarios Vazio !!! ');
                    document.fmrLogin.txtUsuario.focus();

                } else if (document.fmrLogin.txtTelefone.value == ''){

                    alert('Campo Telefone Vazio !!!');
                    document.fmrLogin.txtTelefone.focus();
                
                } else if (document.fmrLogin.txtDataPegaJogo.value == ''){
                  
                  alert('Compo DataPegaLivro Vazia !!!');
                  document.fmrLogin.txtDataPegaJogo.focus();

                } else  {
                     document.fmrLogin.action='./fmrCadastroComprador.php';
                     document.fmrLogin.submit();
					 
                }
                return false;
            }
        </script>
        </head>
	<body>
		<form name="fmrLogin" method="post" action="">
			<table width="500" height="200" border="0" cellspacing="0" cellpadding="0" align="center">
				<tr>
					<td colspan="2" height="100" class="clsTitulo">
						Acesso Usuario
					</td>
				<tr>
				<tr>
					<td width="200" height="50" class="clsTexto14" align="right">
						Usu&aacute;rio:&nbsp;
					</td>
					<td width="300" height="50" align="left">
						<input type="text" name="txtUsuario" maxlength="10" size="11" value="">
					</td>
				<tr>
	        	<!-- -->
				<tr>

                <tr>
				<tr>
					<td width="200" height="50" class="clsTexto14" align="right">
						Tele&aacute;fone:&nbsp;
					</td>
					<td width="300" height="50" align="left">
						<input type="text" name="txtTelefone" maxlength="10" size="11" value="">
					</td>
				<tr>
				<tr>
					<td width="200" height="50" class="clsTexto14" align="right">
						DataPegaJogo:&nbsp;
					</td>
					<td width="300" height="50" align="left">
						<input type="text" name="txtDataPegaJogo" maxlength="10" size="10" value="">
					</td>
				<tr>
				<tr>

					<td colspan="2" align="center" valign="middle" height="50">
						<input type="button" name="btnLogar" value="Continuar" OnClick="Validar();">
						&nbsp;
						<input type="reset" name="btnLimpar" value="Limpar">
						&nbsp;
					
					</td>
				<tr>
			</table>
		</form>
	</body>
</html>



