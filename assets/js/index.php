
<?php
  if (!isset($_POST)) {
    echo "hoa";
  }else {
  ?>
  <script>
        // Llenar el promedio de Notas
let ctx = document.getElementById("promediosNotas").getContext("2d");
let promedioValores =  new Chart(ctx,{
    type:"line",
    data:{
        labels:[
          'Enero', 'Febrero', 'marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre',
        ],
        datasets:[{
            label: "Promedio De Notas",
            data:[<?php
              for ($i=1; $i <= 12; $i++) { 
                $cantidad = 0;
                $total =0;
                $sql = "SELECT * FROM VNotasMes WHERE id = {$i}";
                $result = sqlsrv_query($conn, $sql);
                    while($row = sqlsrv_fetch_array($result)){
                      if($row["id"] == $i){
                        $total = $row["notas"] + $total;
                        $cantidad ++;
                      }
                    }

                  ?> 
                  '<?php 
                    
                    if ($total != 0) {
                      if ($cantidad != 0) {
                        $promedio = $total / $cantidad;
                        echo $promedio;
                      }
                    }
                  ?>',
                  <?php
                }
            ?>],
            borderColor:[
                'rgba(14, 160, 255, 0.5)'
            ],
            backgroundColor:[
                'rgba(0, 0, 0, 0)'
            ],
        }]
    },
    options:{
        scales:{
            yAxes:[{
                    ticks:{
                        beginAtZero:true    
                    }
            }]
        }
    }
});

//Llenar el promedio fortalezas
let pfx = document.getElementById("promediosFortalezas").getContext("2d");

let promedioFortalezas =  new Chart(pfx,{
    type:'pie',
    data:{
        labels:['Enero', 'Febrero', 'marzo'],
        datasets:[{
            label: "Promedio De Notas",
            data:[10, 12, 29],
            backgroundColor:[
                'rgb(14, 160, 255)'
            ]
        }]
    }
});

//Llenar el recuadro de pagos
let ppx = document.getElementById("promediosPagos").getContext("2d");
let promedioPagos =  new Chart(ppx,{
    type:"line",
    data:{
        labels:['Enero', 'Febrero', 'marzo'],
        datasets:[{
            label: "Promedio De Notas",
            data:[10, 12, 29],
            backgroundColor:[
                'rgb(14, 160, 255)'
            ]
        }]
    }
});
<?php
  }
?>
</script>