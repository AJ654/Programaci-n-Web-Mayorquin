<?php
$variable1 = $_GET['base'];
?>

<html> 
  <head> 
    <meta charset = "utf-8" />
    <title> Tablas </title> 
  </head>
  <body>
    <h1> Tabla de Multiplicar </h1>

    <form action="Multiplicador2-Mayorquin.php" >
        <input type = "text" name = "base" id = "idNombre">
        <input type = "submit" value = "Crear Tabla">
    </form>

    <?php
    echo "<br> <h2> Tabla del ".$variable1."</h2>";
    ?>
    <table border = "1">
      <?php
      for($i = 1; $i < 11; $i++)
      {?>
          <tr>
            <td> <?php echo $variable1; ?> X <?php echo $i; ?> </td> 
            <td> <?php echo $i*$variable1; ?> </td>
          </tr>
      <?php }
      ?>
    </table>
      
  </body>
</html>