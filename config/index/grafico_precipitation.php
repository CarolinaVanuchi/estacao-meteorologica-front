<script type="text/javascript">

        google.charts.load('current', {packages: ['corechart', 'line']});
        google.charts.setOnLoadCallback(drawBasic);
      function drawBasic() {

        var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Máxima');
      data.addColumn('number', 'Mínima');
      data.addColumn('number', 'Instantânea');
      data.addRows([
        [0, 0, 0, 0],    [1, 10, 5, 4],   [2, 23, 15, 20],  [3, 17, 9, 11],   [4, 18, 10, 15],  [5, 9, 5, 3],
        [6, 11, 3, 5],   [7, 27, 19, 25],  [8, 33, 25, 30],  [9, 40, 32, 37]
      ]);

            var options = {
            hAxis: {
                title: 'Hora'
            },
            vAxis: {
                title: 'W/m^2'
            }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_precipitation'));

            chart.draw(data, options);
        }
    </script>