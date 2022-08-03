@extends('layouts.template.plantilla')

@section('title','Departamento A')

@section('content')

<div>Departamento A</div>
<div class="container items-center w-full">
    <a class="flex m-2" href="seccion1">
        <button class="text-base  rounded-r-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
        hover:bg-gray-200  
        bg-gray-100 
        text-black-500 
        border duration-200 ease-in-out 
        border-gray-600 transition">
        <div class="flex leading-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-5 h-5">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
            Back
        </div>
    </button>
    <button class="text-base  rounded-l-none  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
        hover:bg-gray-200  
        bg-gray-100 
        text-black-500 
        border duration-200 ease-in-out 
        border-gray-600 transition">
            <div class="flex leading-5">Next
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-5 h-5 ml-1">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </button>
    </a>
</div>
<figure class=" highcharts-figure w-full">
    <div id="container1" class="border-4 border-sky-500 border-withLight-400 shadow-xl rounded"></div>
</figure>
<div class="pt-2 grid gap-2 grid-cols-2 w-full">
    <div id="container2" class="border-4 border-sky-500 border-withLight-400 shadow-xl rounded"></div>
    <div id="container3" class="border-4 border-sky-500 border-withLight-400 shadow-xl rounded"></div>
    <div class=" border-4 border-sky-500 border-withLight-400 shadow-xl rounded"></div>
</div>
</div>
<div>
    <script>
        Highcharts.chart('container1', {
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Monthly Average Temperature'
            },
            subtitle: {
                text: 'Source: WorldClimate.com'
            },
            xAxis: {
                categories: ['00:00 - 01:00',
                    '02:00 - 03:00',
                    '04:00 - 05:00',
                    '06:00 - 07:00',
                    '08:00 - 09:00',
                    '10:00 - 11:00',
                    '12:00 - 13:00',
                    '14:00 - 15:00',
                    '16:00 - 17:00',
                    '18:00 - 19:00',
                    '20:00 - 21:00',
                    '22:00 - 23:00'
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
                data: [200, 300, 553, 580, 300, 295, 250, 658, 789, 1952, 2056]

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
                        format: '{point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
                name: "CALLS",
                colorByPoint: true,
                data: <?= $dataCallsInformation ?>
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
                categories: ['> 300 sec', '60 - 300', '30 - 60 sec', '15 - 30 sec', '5 - 15 sec', '0 - 5 sec'],
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
                data: <?= $dataCalls?>
            }]
        });
    </script>
</div>
@endsection