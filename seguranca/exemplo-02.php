<?php

$id = (isset($_GET['id'])) ? $_GET['id'] : 1;
$conn = mysqli_connect('localhost', 'root', '', 'dbphp7' );
$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";
$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
    echo $resultado->deslogin . '<br>';
    echo $resultado->dessenha . '<br>';
    var_dump($resultado);
}