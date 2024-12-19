<?php
include 'BancolocadoraJogos.php';

?>
<html>
	<head>
		<title>Login e senha</title>
		<link rel="stylesheet" type="text/css" href="./Estilizacao.css">
        <script type="text/jscript" language="jscript">
            function Validar(){
                if(document.fmrLogin.txtUsuario.value == ''){

                    alert('Campo Usuarios Vazio !!! ');
                    document.fmrLogin.txtUsuario.focus();

                }else if (document.fmrLogin.txtSenha.value == '') {
                    
                    alert('Campo Senha Vazio !!!');
                    document.txtLogin.txtSenha.focus();
                } else  {
                     document.fmrLogin.action='./fmrValidarAcesso.php';
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
						Acesso Restrito
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
				<tr>
					<td width="200" height="50" class="clsTexto14" align="right">
						Senha:&nbsp;
					</td>
					<td width="300" height="50" align="left">
						<input type="password" name="txtSenha" maxlength="6" size="7" value="">
					</td>
				<tr>
				<tr>
					<td colspan="2" align="center" valign="middle" height="50">
						<input type="button" name="btnLogar" value="Logar" OnClick="Validar();">
						&nbsp;
						<input type="reset" name="btnLimpar" value="Limpar">
						&nbsp;
						<a href="./fmrCadastroUsuario.php">
							Cadastre-se
						</a>
					</td>
				<tr>
			</table>
		</form>
	</body>
</html>
