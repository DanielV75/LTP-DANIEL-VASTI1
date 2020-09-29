<?php
include "connection.php";

$conexao = new Connection("localhost", "root", "", "bancoDB");

if (is_null($conexao->Connected())){
    echo "<br> A conexão não foi realizada kkkk <BR> Verifique os parâmetros informados.";

}
else{
    echo "<br> Conectado ao bancoDB";
}