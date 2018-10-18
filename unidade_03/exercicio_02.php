<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP com AJAX</title>
</head>

<body>
	<div id="nome"></div>
	<script src="jquery.js"></script>
	<script>

		$.ajax({
			url: 'nomes.php'
		}).then(sucesso,falha);
		function sucesso(valor){
			$("#nome").html(valor);
		}
		function falha(){
			$("#nome").html("falha no carregamento");
		}
	</script>
</body>
</html>