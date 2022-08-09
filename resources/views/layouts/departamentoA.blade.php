@extends('layouts.template.plantilla')

@section('title','Departamento A')

@section('content')

<div>Departamento A</div>
<div class="text-center w-full">
    <div class="inline-flex m-2">
        <a class="flex " href="seccion1">
            <button id="map" class="bg-white sticky duration-500 border-2 rounded-md hover:shadow-xl border-black-400 hover:border-withLight-200 w-24 transform hover:translate-x-1 h-10 text-2xl hover:bg-black-400 hover:text-withLight-200 text-black-400">
                <i class="fa-solid fa-map"></i>
            </button>
        </a>
    </div>
</div>
<figure class=" highcharts-figure w-full">
    <div id="container1" class="border-4 border-sky-500 border-withLight-50 shadow-xl rounded"></div>
</figure>
<div class="pt-2 grid gap-2 grid-cols-2 w-full">
    <div id="container2" class="border-4 border-sky-500 border-withLight-50 shadow-xl rounded"></div>
    <div id="container3" class="border-4 border-sky-500 border-withLight-50 shadow-xl rounded"></div>
</div>
</div>
<div id="pointChart" >
    <script>
        Highcharts.chart('container1', {
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Tiempo promedio de espera en llamadas por hora'
            },
            subtitle: {
                text: 'Source: WorldClimate.com'
            },
            xAxis: {
                categories: [
                    '08:00 - 09:00',
                    '09:00 - 10:00',
                    '10:00 - 11:00',
                    '11:00 - 12:00',
                    '12:00 - 13:00',
                    '13:00 - 14:00',
                    '14:00 - 15:00',
                    '15:00 - 16:00',
                    '16:00 - 17:00',
                    '17:00 - 18:00',
                ],
                accessibility: {
                    description: 'Months of the year'
                }
            },
            yAxis: {
                title: {
                    text: 'Calls'
                }
            },
            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                spline: {
                    marker: {
                        radius: 4,
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },
            series: [{
                name: 'Departamento A',
                marker: {
                    symbol: 'square'
                },
                data: <?= $dataWaiting ?>

            }]
        });
    </script>
</div>
<div>
    <script>
        // Create the chart
        Highcharts.chart('container2', {
            chart: {
                type: 'column'
            },
            title: {
                align: 'left',
                text: 'CANTIDAD DE LLAMADAS POR HORA'
            },
            subtitle: {
                align: 'left',
                text: ''
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'llamadas'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.1f}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
                name: "Departamento A",
                colorByPoint: true,
                data: <?= $dataCallsQuantity ?> 
            }],
        });
    </script>
</div>
<div>
    <script>
        Highcharts.chart('container3', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Duracion promedio de llamadas por hora'
            },
            xAxis: {
                categories: ['08:00:00', '09:00:00', '10:00:00', '11:00:00', '12:00:00', '13:00:00', '14:00:00', '15:00:00', '16:00:00', '17:00:00', ],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population (millions)',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' % '
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Tiempo departamento A',
                data: <?= $dataCallsDuration ?>
            }]
        });
    </script>
</div>

<!-- <script>
    function reloadItem(){
        document.getElementById("pointChart").contentWindow.location.reload(true);
    }
    
</script> -->


@endsection