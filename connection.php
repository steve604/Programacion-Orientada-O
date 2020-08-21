<?php

    $serverName="localhost";
    $connectionInfo = array(
        "Database" => "Poo",
        "UID" => "UsuarioSQL",
        "PWD" => "1234",
        "CharacterSet" => "UTF-8"
    );

    $conn = sqlsrv_connect($serverName, $connectionInfo);
?>