<?php 
header('Access-Control-Allow-Origin:*');
$conn = mysqli_connect("localhost","root","", "andes")or die("falha ao estabelecer conexão com a base");
$select = ("select nomeproduto,precounitario,imagempequena from produtos");
 $produtos = mysqli_query($conn,$select);
 $retorno = array();
 while($linha =mysqli_fetch_object($produtos)){
 	$retorno[] = $linha;
 }
 echo json_encode($retorno);

mysqli_close($conn);
?>
