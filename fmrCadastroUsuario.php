<html>
	<head>
		<title>Cadastro de Usu&aacute;rios</title>
		<link rel="stylesheet" type="text/css" href="./Estilizacao.css">
		<script type="text/jscript" language="jscript">
       function fnValidar(){
				if(document.fmrCadastroUsuario.txtNome.value == '')
				{
					alert('Campo Nome vazio!!!');
					document.fmrCadastroUsuario.txtNome.focus();
				}
				else if(document.fmrCadastroUsuario.txtUsuario.value == '')
				{
					alert('Campo Usuario vazio!!!');
					document.fmrCadastroUsuario.txtUsuario.focus();
				}
				else if(document.fmrCadastroUsuario.txtSenha.value == '')
				{
					alert('Campo Senha vazia!!!');
					document.fmrCadastroUsuario.txtSenha.focus();
				}
				else
				{
					document.fmrCadastroUsuario.action='./fmrCadastrar.php';
					document.fmrCadastroUsuario.submit();
                    
				}
				return false;
			}
 
			function fnVoltar()
			{
				document.fmrCadastroUsuario.action='./index.php';
				document.fmrCadastroUsuario.submit();
				return false;
			}
		</script>
	</head>
	<body>
		<form name="fmrCadastroUsuario" method="post" action="">
			<table width="500" height="200" border="0" cellspacing="0" cellpadding="0" align="center">
				<tr>
					<td colspan="2" height="100" class="clsTitulo">
						Cadastro de Usu&aacute;rios
					</td>
				<tr>
				<tr>
					<td width="200" height="50" class="clsTexto14" align="right">
						Nome:&nbsp;
					</td>
					<td width="300" height="50" align="left">
						<input type="text" name="txtNome" maxlength="50" size="51" value="">
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
						<input type="button" name="btnCadastrar" value="Cadastrar" OnClick="fnValidar();">
						&nbsp;
						<input type="reset" name="btnLimpar" value="Limpar">
						&nbsp;
						<input type="button" name="btnVoltar" value="Voltar" OnClick="fnVoltar();">
					</td>
				<tr>
			</table>
		</form>
	</body>
</html>