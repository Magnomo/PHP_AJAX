<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <script type="text/javascript">
        	function retornarProdutos(data){
        		console.log(data[0].nomeproduto);
        	}
        </script>
     
    </head>

    <body>
    		<script type="text/javascript" src='http://localhost/curso/php_ajax/unidade_07/gerar_json.php?callback=retornarProdutos'>
    			
    		</script>
    </body>
</html>