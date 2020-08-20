// Llenar el promedio de Notas
let ctx = document.getElementById("promediosNotas").getContext("2d");
let promedioValores =  new Chart(ctx,{
    type:"line",
    data:{
        labels:['Enero', 'Febrero', 'marzo'],
        datasets:[{
            label: "Promedio De Notas",
            data:[100, 42, 279],
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


