@extends('template.template')


@section('content')
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Вариант 2', 0.61769788259058],
          ['Вариант 3', 0.51194169033347],
          ['Вариант 4', 0.38318665733874]
        ]);

        // Set chart options
        var options = {'title':'Взаимная энтропия:',
                       'width':600,
                       'height':600};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    
    <div style="margin:0 auto;width: 100%;text-align: -webkit-center;" id="chart_div"></div>
    
@stop