<?php
$variable1 = $_GET['base'];
?>

<html> 
  <head> 
    <meta charset = "utf-8" />
    <title> Calculadora </title> 
  </head>
  <body>
    <h1>Multiplicador</h1>

    <?php
    for($i = 1; $i < 11; $i++)
    {
        echo "<table>";
        echo "<tr>";
        echo "<td>".$variable1." x ".$i." = ".($i*$variable1)."</td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>
      
  </body>
</html>