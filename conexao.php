<?php
    $banco = mysqli_connect("localhost","root","","noite_banco");
    if (!$banco) {
        echo "Não foi possivel conectar com o BD.<br>Causa: ".mysqli_connect_error();
    }
    else{
        echo "Conexão com o BD ocorreu normalmente.<br>";
    }
?>