<?php
require_once('../connection.php');
$total=0;
$cantidad = 0;
global $valores = array();


        $sql = "SELECT * FROM VNotasMes";
        $result = sqlsrv_query($conn, $sql);
            while($row = sqlsrv_fetch_array($result)){
                $total = $row["notas"] + $total;
                $cantidad ++;
                $valores = $row;

            }
?>