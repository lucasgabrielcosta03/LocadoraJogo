<?php
include 'BancolocadoraJogos.php';

if(isset($_COOKIE["usuario"]) && !empty($_COOKIE["usuario"])){

	
}else {
	header( 'Location: ./index.php ' );
	exit();	
}

?>
<html>
	<head>
		<title>Login Aluno</title>
		<link rel="stylesheet" type="text/css" href="./Estilizacao.css">
        <script type="text/jscript" language="jscript">
            function Validar(){
                if(document.fmrLogin.txtNome.value == ''){

                    alert('Campo Livro Vazio !!! ');
                    document.fmrLogin.txtNome.focus();

                }else if (document.fmrLogin.txtTipo.value == '') {
                    
                    alert('Campo Autor Vazio !!!');
                    document.txtLogin.txtTipo.focus();

                } else if (document.fmrLogin.txtDataDevolucao.value == ''){

                    alert('Campo Descricao Vazio !!!');
                    document.fmrLogin.txtDataDevolucao.focus();
                
                } else  {
                     document.fmrLogin.action='./fmrCadastroLocadora.php';
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
						Bem Vindo a Locadora De Jogos
					</td>
				<tr>
				<tr>
					<td width="200" height="50" class="clsTexto14" align="right">
						Nome do &aacute; Jogo&nbsp;
					</td>
					<td width="300" height="50" align="left">
						<input type="text" name="txtNome" maxlength="10" size="11" value="">
					</td>
				<tr>
				<tr>
					<td width="200" height="50" class="clsTexto14" align="right">
						Tipo:&nbsp;
					</td>
					<td width="300" height="50" align="left">
						<input type="text" name="txtTipo" maxlength="20" size="7" value="">
					</td>
				<tr>
				<tr>

                <tr>
				<tr>
					<td width="200" height="50" class="clsTexto14" align="right">
						DataDe&aacute;Volução:&nbsp;
					</td>
					<td width="300" height="50" align="left">
						<input type="text" name="txtDataDevolucao" maxlength="10" size="11" value="">
					</td>
				<tr>
				<tr>
					
					<td colspan="2" align="center" valign="middle" height="50">
						<input type="button" name="btnLogar" value="Cadastrar" OnClick="Validar();">
						&nbsp;
						<input type="reset" name="btnLimpar" value="Limpar">
						&nbsp;
						
					</td>
				<tr>
			</table>
		</form>
	</body>
</html>