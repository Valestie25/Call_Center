@extends('layouts.template.plantilla')

@section('title','Departamento B')

@section('content')

<div>Departamento B</div>
<div class="text-center w-full">
    <div class="inline-flex m-2">
        <a class="flex " href="seccion1">
            <button id="map" class="bg-white sticky duration-500 border-2 rounded-md border-black-400 hover:border-withLight-200 w-24 transform hover:translate-x-1 h-10 text-2xl hover:bg-black-400 hover:text-withLight-200 text-black-400">
                <i class="fa-solid fa-map"></i>
            </button>
        </a>
    </div>
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
                                '22:00 - 23:00'],
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

                }, {
                    name: 'Departamento B',
                    marker: {
                        symbol: 'square'
                    },
                    data: [{
                        y: 3.9,
                    }, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
                }, {
                    name: 'Departamento C',
                    marker: {
                        symbol: 'square'
                    },
                    data: [{
                        y: 3.9,
                    }, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
                }, {
                    name: 'Departamento D',
                    marker: {
                        symbol: 'square'
                    },
                    data: [{
                        y: 3.9,
                    }, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
                }]
            });
        </script>
    </div>
    <div>
        <script>
            Highcharts.chart('container2', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Promedio de llamadas registradas por hora'
                },
                xAxis: {
                    categories: [
                        '00:00',
                        '01:00',
                        '02:00',
                        '03:00',
                        '04:00',
                        '05:00',
                        '06:00',
                        '07:00',
                        '08:00',
                        '09:00',
                        '10:00',
                        '11:00',
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Llamadas'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} call</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Departamento A',
                    data: [49.9, 71.5, 200.4, 328.2, 190.0, 176.0, 200.4, 328.2, 190.0, 194.1, 95.6, 54.4]

                }, {
                    name: 'Departamento B',
                    data: [83.6, 78.8, 98.5, 93.4, 106.0, 200.4, 328.2, 190.0, 104.3, 91.2, 83.5, 106.6]

                }, {
                    name: 'Departamento C',
                    data: [48.9, 38.8, 39.3,200.4, 328.2, 190.0 , 59.0, 59.6, 52.4,200.4, 328.2, 190.0]

                }, {
                    name: 'Departamento D',
                    data: [42.4, 200.4, 328.2, 190.0, 52.6, 75.5, 57.4, 200.4, 328.2, 190.0, 46.8, 51.1]

                }]
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
                    text: 'Promedio tiempo de llamada'
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
                    data: [8.6, 48, 4.2, 2.6, 33, 4.6]
                }, {
                    name: 'Tiempo departamento B',
                    data: [4.2, 8.6, 4.6, 33, 2.6, 48]
                }, {
                    name: 'Tiempo departamento C',
                    data: [2.6, 48, 8.6, 4.2,  4.6, 33]
                }, {
                    name: 'Tiempo departamento D',
                    data: [48, 4.6, 2.6, 8.6, 33, 4.2]
                }]
            });
        
        </script>
    </div>
@endsection