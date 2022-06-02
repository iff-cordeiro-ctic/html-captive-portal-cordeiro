
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge; text/html; charset=UTF-8">
	<title>Captive Portal Login Page</title>
	<link rel="stylesheet" href="assets_servidores/css/main.css" />
	<link rel="stylesheet" href="assets_servidores/css/bootstrap.min.css" />
	<script src="assets_servidores/js/jquery-3.6.0.min.js"> </script>
</head>

<body>
<div id="content">
	<div class="login-card">
		<h1>IFF PÁDUA</h1>
		<img  src="assets_servidores/logo-servidor.png"  style="width:64px;height:64px;" /><br>
		<h2 class="boas-vindas">Bem Vindo(a) Servidor(a)</h2>
		<div id="error-message">
			
		</div>
		
		<form name="login_form" method="post" action="$PORTAL_ACTION$" autocomplete="on" id="form"  >
			<div class="mb">
				<input  name="auth_user"  type="text" placeholder="cpf (somente números)" id="usuario" class="form-control" />
			</div>

		
			<div class="input-group mb">
				<input  name="auth_pass" type="password" placeholder="senha do Suap" id="senha"  class="form-control" />
				<span class="input-group-text" id="basic-addon2">
					<img title="exibir/ocultar senha" alt="exibir/ocultar senha" src="assets_servidores/eye-open.png" style="width: 24px;" id="imgEye" onclick="mostrarSenhaFunction()" />
				</span>
			</div>


			
			
		
										

			<input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$"/>
			<input name="zone" type="hidden" value="$PORTAL_ZONE$"/>
						
			<div class="div_botao">
				<input  type="submit" name="accept" class="login login-submit" value="Autenticar" id="login" >
			</div>
		</form>
				
		<br/>
		<span> <i>2022 - Coordenação de TIC</i> </span>
	</div>
</div>




<script>
	function mostrarSenhaFunction() {
		var x = document.getElementById("senha");
		var y = document.getElementById("exibirsenha");
		if (x.type === "password") {
			x.type = "text";
			//y.innerHTML = "Esconder Senha";
			
			document.getElementById("imgEye").src = "assets_servidores/eye-close.png";

		} else {
			x.type = "password";
			//y.innerHTML = "Exibir Senha";
			document.getElementById("imgEye").src = "assets_servidores/eye-open.png";
		}
	}

	$(document).ready( function() { // Wait until document is fully parsed
	$("#form").on('submit', function(e){
		var usuario = document.getElementById("usuario").value;
		var senha = document.getElementById("senha").value;

		//document.cookie = "usuario="+usuario+"; expires=Thu, 18 Dec 2050 12:00:00 UTC";
		//document.cookie = "senha="+senha+"; expires=Thu, 18 Dec 2050 12:00:00 UTC";

		localStorage.setItem("usuario_captive", usuario);
		localStorage.setItem("senha_captive", senha);

		
		console.log(localStorage.getItem("usuario"));

		console.log(localStorage.getItem("senha"));
		

		e.preventDefault();

	});
	})

	document.getElementById("usuario").value = localStorage.getItem("usuario_captive") ;
	document.getElementById("senha").value = localStorage.getItem("senha_captive");



</script>


</body>
</html>
