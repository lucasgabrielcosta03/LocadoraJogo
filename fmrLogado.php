<html>
	<head>
		<title>Login e senha</title>
		<link rel="stylesheet" type="text/css" href="./Estilizacao.css">
		<script type="text/jscript" language="jscript">
        function fnContinuar() {
            document.fmrLogado.action= './usuario.php';
            document.fmrLogado.submit();
            return false;
        }
        </script>
    	</head>
	<body>
		<form name="fmrLogado" method="post" action="">
			<table width="500" height="150" border="0" cellspacing="0" cellpadding="0" align="center">
				<tr>
					<td colspan="2" height="100" class="clsTitulo">
						Usu&aacute;rio logado com sucesso !!!
					</td>
				<tr>
				<tr>
					<td colspan="2" align="center" valign="middle" height="50">
						<input type="button" name="btnVoltar" value="Continuar" OnClick="fnContinuar();">
					</td>
				<tr>
			</table>
		</form>
	</body>
</html>