<html>
  <head>
  <link rel="stylesheet" href="..\stylee04.css" media="Screen">
  <link rel="stylesheet" href="styleee.css" media="Screen">
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
  <link rel="manifest" href="../favicon/site.webmanifest">
    <?php
        include (dirname(__FILE__) . "\dbConnect.php");
        include (dirname(__FILE__) . "\queryVotos.php");
    ?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Curso', 'quantidade de votos'],
          ['Desenvolvimento de Sistemas', <?=$queryVotos[1]?>],
          ['Nutrição', <?=$queryVotos[2]?>],
          ['Finanças',  <?=$queryVotos[3]?>],
          ['Administração',  <?=$queryVotos[4]?>],
          ['Contabilidade',  <?=$queryVotos[5]?>],
          ['Guia de Turismo',  <?=$queryVotos[6]?>],
          ['Gastronomia',  <?=$queryVotos[7]?>],
          ['Marketing',  <?=$queryVotos[8]?>],
          ['Serviços Públicos',  <?=$queryVotos[9]?>],
          ['Eventos',  <?=$queryVotos[10]?>]
          
        ]);

        var options = {backgroundColor: 'transparent',
          title: 'Votos para cada Curso',
          legend:{textStyle:{fontSize:'Times New Roman', fontName:'18'}}
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <title>Cursos CA</title>

  </head>
  <body>
    <header>
      <div style="width: min-content;">
        <img src="..\img\logo-camargo-Aranha-PNG.png" width="140">
      </div>
      <div>
        <h1>Formulário dos Cursos da Camargo Aranha</h1>
      </div>
      <div id="linkVoltar">
        <a href="..\index.html"><h4>Voltar para Formulário</h4></a>
      </div>
    </header>
      <main>
        <section id="sec1">
        <h2>Votos para cada curso</h2>
          <table>
            
            <?php
                  for ($x = 1; $x <= 10; $x++){
                    echo "<tr class='trr trrr'><td>• ". utf8_encode($queryCursos[$x - 1]) . "</td><td class='tdd'>". $queryVotos[$x] ." votos</td></tr>";
                  }
            ?>
          </table>
        </section>
        <section id="secPiechart">
          <div id="piechart" style="width: 1100px; height: 700px;"></div>
          <div id="BackChart"></div>
        </section>
      </main>
      <footer>
        <a href="../devs.html">
          <img src="../img/lalala.png" width="220">
        </a> 
        </footer>
  </body>
</html>