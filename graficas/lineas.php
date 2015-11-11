<div id="container" height="100%" width="100%"></div>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        title: {
            text: 'Comportamiento de Ventas por mes',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: WorldClimate.com',
            x: -20
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
        },
        yAxis: {
            title: {
                text: 'MXN'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '$'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: '2015',
            data: [6805, 7347, 10485, 15304, 19389, 20984, 22372, 23123, 24562, 27398, null, null]
        }, {
            name: '2014',
            data: [203, 394, 5293, 11236, 17093, 20284, 20944, 21293, 20905, 22985, 28094, 32394]
        }, {
            name: '2013',
            data: [290, 909, 3394, 8384, 13394, 15390, 18209, 17986, 16910, 17239, 23392, 31283]
        }]
    });
});
</script>