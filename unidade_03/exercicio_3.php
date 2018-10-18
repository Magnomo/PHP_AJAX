<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP com AJAX</title>
</head>

<body>
	<div id="nome"></div>
	<div id="msg"></div>
	<script src="jquery.js"></script>
	<script>

		$.ajax({
			url: 'nome.php'
		}).done(function(data){
			$('#nome').html(data);	
		}).fail(function(){
			$('#nome').html("falha no carregamento");
		}).always(function(){
			$('#msg').html("Mensagem qualquer");
		})
	</script>
</body>
</html>