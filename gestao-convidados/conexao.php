<?php

$servidor = '127.0.0.1';
$usuario = 'cauane';
$senha = 'etec';
$banco = 'etec';
//print-
$conexao = new mysqli($servidor, $usuario, $senha,$banco);
if(isset($_GET['nome'])){
if ($conexao-> connect_error){
      echo "não possível conectar";
}else if(isset($_GET['id-convidado']) && ($_GET['id-convidado'] != "")){
        $id = $_GET['id-convidado'];

    $sqlUpdate = "UPDATE tb_convidados SET nome='$_GET[nome]', acompanhantes='$_GET[acompanhante]' WHERE id_convidados='$id'";
    $conexao->query($sqlUpdate);
    $resultado = $conexao->query("SELECT * FROM tb_convidados");

  

}else{
    //echo "conectado com sucesso!";
    $sqlGravar = "INSERT INTO tb_convidados(nome,acompanhantes)VALUES('$_GET[nome]',$_GET[acompanhante])";
    $conexao->query($sqlGravar);

    $resultado = $conexao->query("SELECT * FROM tb_convidados");
    //print_r($resultado->nun_rows);
    //while($row = $resultado->fetch_assoc()){
   //     printf("</br><tr><td>%s</td></tr>", $row ["nome"],"</table>");
   // }
   //foreach($resultado as $convidado){
     //  echo "<br>" . $convidado["nome"];
   
}
}else{
    $resultado = $conexao->query("SELECT * FROM tb_convidados");
}
?>