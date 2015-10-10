<div id="container" height="100%" width="100%"></div>
<pre id="tsv" style="display:none">Browser Version	Total Market Share
Microsoft Internet Explorer 8.0	26.61%
Microsoft Internet Explorer 9.0	16.96%
Chrome 18.0	8.01%
Chrome 19.0	7.73%
Firefox 12	6.72%
Microsoft Internet Explorer 6.0	6.40%
Firefox 11	4.72%
Microsoft Internet Explorer 7.0	3.55%
Safari 5.1	3.53%
Firefox 13	2.16%
Firefox 3.6	1.87%
Opera 11.x	1.30%
Chrome 17.0	1.13%
Firefox 10	0.90%
Safari 5.0	0.85%
Firefox 9.0	0.65%
Firefox 8.0	0.55%
Firefox 4.0	0.50%
Chrome 16.0	0.45%
Firefox 3.0	0.36%
Firefox 3.5	0.36%
Firefox 6.0	0.32%
Firefox 5.0	0.31%
Firefox 7.0	0.29%
Proprietary or Undetectable	0.29%
Chrome 18.0 - Maxthon Edition	0.26%
Chrome 14.0	0.25%
Chrome 20.0	0.24%
Chrome 15.0	0.18%
Chrome 12.0	0.16%
Opera 12.x	0.15%
Safari 4.0	0.14%
Chrome 13.0	0.13%
Safari 4.1	0.12%
Chrome 11.0	0.10%
Firefox 14	0.10%
Firefox 2.0	0.09%
Chrome 10.0	0.09%
Opera 10.x	0.09%
Microsoft Internet Explorer 8.0 - Tencent Traveler Edition	0.09%</pre>

<script type="text/javascript">
	$(function () {
    // Create the chart
    $('#container').highcharts({
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Browser market shares. January, 2015 to May, 2015'
        },
        subtitle: {
            text: 'Click the slices to view versions. Source: netmarketshare.com.'
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.name}: {point.y:.1f}%'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },
        series: [{
            name: "Brands",
            colorByPoint: true,
            data: [{
                name: "Microsoft Internet Explorer",
                y: 56.33,
                drilldown: "Microsoft Internet Explorer"
            }, {
                name: "Chrome",
                y: 24.03,
                drilldown: "Chrome"
            }, {
                name: "Firefox",
                y: 10.38,
                drilldown: "Firefox"
            }, {
                name: "Safari",
                y: 4.77,
                drilldown: "Safari"
            }, {
                name: "Opera",
                y: 0.91,
                drilldown: "Opera"
            }, {
                name: "Proprietary or Undetectable",
                y: 0.2,
                drilldown: null
            }]
        }],
        drilldown: {
            series: [{
                name: "Microsoft Internet Explorer",
                id: "Microsoft Internet Explorer",
                data: [
                    ["v11.0", 24.13],
                    ["v8.0", 17.2],
                    ["v9.0", 8.11],
                    ["v10.0", 5.33],
                    ["v6.0", 1.06],
                    ["v7.0", 0.5]
                ]
            }, {
                name: "Chrome",
                id: "Chrome",
                data: [
                    ["v40.0", 5],
                    ["v41.0", 4.32],
                    ["v42.0", 3.68],
                    ["v39.0", 2.96],
                    ["v36.0", 2.53],
                    ["v43.0", 1.45],
                    ["v31.0", 1.24],
                    ["v35.0", 0.85],
                    ["v38.0", 0.6],
                    ["v32.0", 0.55],
                    ["v37.0", 0.38],
                    ["v33.0", 0.19],
                    ["v34.0", 0.14],
                    ["v30.0", 0.14]
                ]
            }, {
                name: "Firefox",
                id: "Firefox",
                data: [
                    ["v35", 2.76],
                    ["v36", 2.32],
                    ["v37", 2.31],
                    ["v34", 1.27],
                    ["v38", 1.02],
                    ["v31", 0.33],
                    ["v33", 0.22],
                    ["v32", 0.15]
                ]
            }, {
                name: "Safari",
                id: "Safari",
                data: [
                    ["v8.0", 2.56],
                    ["v7.1", 0.77],
                    ["v5.1", 0.42],
                    ["v5.0", 0.3],
                    ["v6.1", 0.29],
                    ["v7.0", 0.26],
                    ["v6.2", 0.17]
                ]
            }, {
                name: "Opera",
                id: "Opera",
                data: [
                    ["v12.x", 0.34],
                    ["v28", 0.24],
                    ["v27", 0.17],
                    ["v29", 0.16]
                ]
            }]
        }
    });
});
</script>