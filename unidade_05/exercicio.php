<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css">
    <meta charset="UTF-8">
    <title>PHP com AJAX</title>
</head>

<body>
    <button id="botao">Carregar</button>
    <div id="listagem"></div>
    <script src="jquery.js"></script>
    <script>
        $('#botao').click(function(){
            $('#listagem').css('display','block');
            carregarDados();
        });
        function carregarDados(){
            $.getJSON('_json/produtos.json',function(data){
                var elemento;
                elemento = "<ul>";

                $.each(data,function(i,valor){
                    elemento += "<li class='nome'>"+ valor.nomeproduto + "</li>";
                    elemento += "<li class='preco'>"+ valor.precounitario + "</li>";
                });
                $('#listagem').html(elemento);
                elemento+="</ul>";
            });
        }
    </script>
</body>
</html>