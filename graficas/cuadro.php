<div id="container" height="100%" width="100%"></div>
<script type="text/javascript">
	$(function () {
    $('#container').highcharts({

        chart: {
            type: 'heatmap',
            marginTop: 40,
            marginBottom: 80,
            plotBorderWidth: 1
        },


        title: {
            text: 'Distribución de Alumnos por Curso y Dia'
        },

        xAxis: {
            categories: ['CGB', 'CGI', 'CGA', 'CVB', 'CVI', 'CVA', 'CPB', 'CPI', 'CPA', 'CBB']
        },

        yAxis: {
            categories: ['Viernes', 'Jueves', 'Miercoles', 'Martes', 'Lunes'],
            title: null
        },

        colorAxis: {
            min: 0,
            minColor: '#FFFFFF',
            maxColor: Highcharts.getOptions().colors[0]
        },

        legend: {
            align: 'right',
            layout: 'vertical',
            margin: 0,
            verticalAlign: 'top',
            y: 25,
            symbolHeight: 280
        },

        tooltip: {
            formatter: function () {
                return '<b>' + this.series.xAxis.categories[this.point.x] + '</b> tiene <br><b>' +
                    this.point.value + '</b> inscritos <br>el <b>' + this.series.yAxis.categories[this.point.y] + '</b>';
            }
        },

        series: [{
            name: 'Inscripciones por',
            borderWidth: 1,
            data: [[0, 0, 10], [0, 1, 19], [0, 2, 8], [0, 3, 24], [0, 4, 46], [1, 0, 38], [1, 1, 50], [1, 2, 28], 
            [1, 3, 17], [1, 4, 18], [2, 0, 35], [2, 1, 34], [2, 2, 23], [2, 3, 34], [2, 4, 42], [3, 0, 50], [3, 1, 12], 
            [3, 2, 14], [3, 3, 19], [3, 4, 16], [4, 0, 38], [4, 1, 5], [4, 2, 8], [4, 3, 17], [4, 4, 15], [5, 0, 38], 
            [5, 1, 32], [5, 2, 12], [5, 3, 6], [5, 4, 12], [6, 0, 13], [6, 1, 44], [6, 2, 18], [6, 3, 38], [6, 4, 46], 
            [7, 0, 31], [7, 1, 1], [7, 2, 12], [7, 3, 32], [7, 4, 30], [8, 0, 25], [8, 1, 43], [8, 2, 23], [8, 3, 34], 
            [8, 4, 24], [9, 0, 47], [9, 1, 14], [9, 2, 31], [9, 3, 48], [9, 4, 21]],
            dataLabels: {
                enabled: true,
                color: '#000000'
            }
        }]

    });
});
</script>