@extends('layouts.template.plantilla')

@section('title','Departamento B')

@section('content')
<div>Departamento B</div>
        <figure class=" highcharts-figure grid gap-2 grid-cols-2 w-full"> 
            <div id="container" class="border-4 border-sky-500 border-withLight-400 shadow-xl rounded"></div>
            <div id="container2" class="border-4 border-sky-500 border-withLight-400 shadow-xl rounded"></div>
            <div id="container3" class="border-4 border-sky-500 border-withLight-400 shadow-xl rounded"></div>
            <div class=" border-4 border-sky-500 border-withLight-400 shadow-xl rounded"></div>
        </figure>
    </div>
        <script>
            Highcharts.chart('container', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Promedio de llamadas por regiones'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Promedio',
                    colorByPoint: true,
                    data: [{
                        name: 'Tijuana',
                        y: 61.41,
                        sliced: true,
                        selected: true
                    }, {
                        name: 'Mexicali',
                        y: 11.84
                    }, {
                        name: 'Ensenada',
                        y: 10.85
                    }, {
                        name: 'Tecate',
                        y: 4.67
                    }, {
                        name: 'Playas de rosarito',
                        y: 5.38
                    }, {
                        name: 'San Quintín',
                        y: 4.25
                    }, {
                        name: 'San Felipe',
                        y: 1.6
                    }]
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
                    text: 'Total de llamadas mensuales'
                },
                xAxis: {
                    categories: [
                        'Jan',
                        'Feb',
                        'Mar',
                        'Apr',
                        'May',
                        'Jun',
                        'Jul',
                        'Aug',
                        'Sep',
                        'Oct',
                        'Nov',
                        'Dec'
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