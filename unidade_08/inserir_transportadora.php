  <?php
  $conecta = mysqli_connect("localhost","root","","andes");
  if ( mysqli_connect_errno()  ) {
    die("Conexao falhou: " . mysqli_connect_errno());
}

if(isset($_POST["nometransportadora"])) {
    $nome       = utf8_decode($_POST["nometransportadora"]);
    $endereco   = utf8_decode($_POST["endereco"]);
    $cidade     = utf8_decode($_POST["cidade"]);
    $estado     = $_POST["estados"];

    $inserir    = "INSERT INTO transportadoras ";
    $inserir    .= "(nometransportadora,endereco,cidade,estadoID) ";
    $inserir    .= "VALUES ";
    $inserir    .= "('$nome','$endereco','$cidade', $estado)";
    $retorno = array();
    $operacao=mysqli_query($conecta, $inserir);
    if($operacao){
       $retorno["sucesso"] =true;
       $retorno["mensagem"] ="Transportadora ". $nome. " inserida com sucesso.";
    }else {
        $retorno["sucesso"] =false;
        $retorno['mensagem']= "falha ao tentar inserir a transportadora" . $nome;
    }
    echo json_encode($retorno);
}
?>