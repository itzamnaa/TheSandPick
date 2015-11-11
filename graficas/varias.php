<div id="container" height="100%" width="100%"></div>
<script type="text/javascript">
	$(function () {
    $('#container').highcharts({
        title: {
            text: 'Situación Financiera'
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
        },
        labels: {
            items: [{
                html: 'Resumen Anual',
                style: {
                    left: '50px',
                    top: '18px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },
        series: [{
            type: 'column',
            name: 'Ventas',
            data: [6805, 7347, 10485, 15304, 19389, 20984, 22372, 23123, 24562, 27398, 13940, null]
        }, {
            type: 'column',
            name: 'Costos',
            data: [2205, 2047, 4585, 4004, 6689, 6584, 6572, 7223, 9562, 9398, 10398, 10234]
        }, {
            type: 'spline',
            name: 'Objetivo',
            data: [4008, 6088, 8168, 10248, 12328, 14408, 16488,18668, 20648, 22728, 24808, 26888],
            marker: {
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'white'
            }
        }, {
            type: 'pie',
            name: '%',
            data: [{
                name: 'Ventas',
                y: 77,
                color: Highcharts.getOptions().colors[0] // Jane's color
            }, {
                name: 'Costos',
                y: 23,
                color: Highcharts.getOptions().colors[1] // John's color
            }],
            center: [100, 80],
            size: 100,
            showInLegend: false,
            dataLabels: {
                enabled: false
            }
        }]
    });
});
</script>