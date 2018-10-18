<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link  href="_css/estilo.css" rel="stylesheet" type="text/css" >
    <title>PHP com AJAX</title>
</head>

<body>
    <button id="botao">Caregar</button>
    <div id="listagem"></div>

    <script src="jquery.js"></script>
    <script>
        $('#botao').click(function(){
            $('#listagem').css('display','block');
            carregaDados();
        })
        function carregaDados() {
            // body...
            $.ajax({
                url: '_xml/produtos.xml'

            }).then(sucesso,falha);
            function sucesso(arquivo){
                var elemento ;
                elemento = "<ul>";
                $(arquivo).find('produto').each(function(){
                    var nome = $(this).find('nomeproduto').text();
                    var preco = $(this).find('precounitario').text();
                    elemento += "<li class='nome'>" + nome +"</li>";
                    elemento += "<li class='preco'>" + preco + "</li>";
                });
                elemento+= "</ul>";
                $('#listagem').html(elemento);
            }
            function falha(){

            }
        }
    </script>
</body>
</html>