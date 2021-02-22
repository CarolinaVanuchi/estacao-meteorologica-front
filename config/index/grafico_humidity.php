<script type="text/javascript">

        google.charts.load('current', {packages: ['corechart', 'line']});
        google.charts.setOnLoadCallback(drawBasic);
      function drawBasic() {

            var data = new google.visualization.DataTable();
            data.addColumn('number', 'X');
            data.addColumn('number', 'Intensidade de Chuva');
            

            data.addRows([
            [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
            [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
            [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
            [18, 52], [19, 54]
            ]);

            var options = {
            hAxis: {
                title: 'Hora'
            },
            vAxis: {
                title: 'mm'
            }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_chuva'));

            chart.draw(data, options);
        }
    </script>