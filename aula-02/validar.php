<?php 
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($senha == 123 && $usuario == 'guto'){
    echo "dados correto";
}else{
    echo "dados incorretos";
}
?>