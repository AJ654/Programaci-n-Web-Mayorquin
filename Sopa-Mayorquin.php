<?php
$palabra = $_GET ['palabra'];

if (empty ($palabra)) $palabra = null;

$sopa = [
    ['Y','R','E','U','Q','J','S','M','A','P'],
    ['R','A','H','L','X','W','P','Q','Z','A'],
    ['E','L','C','M','K','A','A','W','L','H'],
    ['V','B','A','T','P','C','N','W','E','B'],
    ['R','H','P','H','Q','V','G','N','V','Y'],
    ['E','T','A','M','B','F','U','F','A','B'],
    ['S','T','O','U','J','C','L','M','R','L'],
    ['T','P','I','R','C','S','A','V','A','J'],
    ['W','R','H','S','T','A','R','F','L','Q'],
    ['W','H','S','P','Q','G','T','Q','Y','S']
];


function buscarPalabra ($palabra, $sopa)
{
    // Horizontal
    for ($i = 0; $i < 10; $i++) 
    {
        for ($j = 0; $j < 10; $j++) 
        {
            
            if ($sopa [$i] [$j] == $palabra [0]) 
            {
                $encontrado = true;

                if ($j + strlen ($palabra) <= 10)
                {
                    for ($k = 1; $k < strlen ($palabra); $k++) 
                    {
                        if ($sopa [$i] [$j + $k] != $palabra [$k]) 
                        {
                            $encontrado = false;
                            break;
                        }
                    }

                    if ($encontrado) 
                    {
                        echo "<p>Palabra: '$palabra'<br>Horizontal.<br>Fila: ".($i + 1)."<br>Columna: ".($j + 1).".</p>";
                        return true;
                    }
                }
            }
        }
    }

    // Horizontal inversa
    for ($i = 0; $i < 10; $i++) 
    {
        for ($j = 9; $j >= 0; $j--) 
        {
            if ($sopa [$i] [$j] == $palabra [0]) 
            {
                $encontrado = true;

                if ($j - (strlen ($palabra) - 1) >= 0) 
                {
                    for ($k = 1; $k < strlen ($palabra); $k++) 
                    {
                        if ($sopa [$i] [$j - $k] != $palabra [$k]) 
                        {
                            $encontrado = false;
                            break;
                        }
                    }

                    if ($encontrado) 
                    {
                        echo "<p>Palabra: '$palabra'<br>Horizontal Inversa.<br>Fila: ".($i + 1)."<br>Columna: ".($j + 1).".</p>";
                        return true;
                    }
                }
            }
        }
    }

    // Vertical
    for ($i = 0; $i < 10; $i++) 
    {
        for ($j = 0; $j < 10; $j++) 
        {
            
            if ($sopa [$j] [$i] == $palabra [0]) 
            {
                $encontrado = true;

                if ($j + strlen ($palabra) <= 10)
                {
                    for ($k = 1; $k < strlen ($palabra); $k++) 
                    {
                        if ($sopa [$j + $k] [$i] != $palabra [$k]) 
                        {
                            $encontrado = false;
                            break;
                        }
                    }

                    if ($encontrado) 
                    {
                        echo "<p>Palabra: '$palabra'<br>Vertical.<br>Fila: ".($j + 1)."<br>Columna: ".($i + 1).".</p>";
                        return true;
                    }
                }
            }
        }
    }

    // Vertical inversa
    for ($i = 0; $i < 10; $i++) 
    {
        for ($j = 9; $j >= 0; $j--) 
        {
            if ($sopa [$j] [$i] == $palabra [0]) 
            {
                $encontrado = true;


                if ($j - (strlen ($palabra) - 1) >= 0) 
                {
                    for ($k = 1; $k < strlen ($palabra); $k++) 
                    {
                        if ($sopa [$j - $k] [$i] != $palabra [$k]) 
                        {
                            $encontrado = false;
                            break;
                        }
                    }

                    if ($encontrado) 
                    {
                        echo "<p>Palabra: '$palabra'<br>Vertical Inversa.<br>Fila: ".($j + 1)."<br>Columna: ".($i + 1).".</p>";
                        return true;
                    }
                }
            }
        }
    }

    
    // Diagonal superior
    for ($i = 0; $i < 10; $i++) 
    {
        for ($j = 0; $j < 10; $j++) 
        {
            
            if ($sopa [$i] [$j] == $palabra [0]) 
            {
                $encontrado = true;
                $n = $i + 1;
                $m = $j + 1;

                if ($i + (strlen ($palabra) - 1) < 10 && $j + (strlen ($palabra) - 1) < 10) 
                {
                    for ($k = 1; $k < strlen ($palabra); $k++) 
                    {
                        if ($sopa [$n] [$m] != $palabra [$k]) 
                        {
                            $encontrado = false;
                            break;
                        }

                        $n++;
                        $m++;
                    }

                    if ($encontrado) 
                    {
                        echo "<p>Palabra: '$palabra'<br>Diagonal Arriba.<br>Fila: ".($i + 1)."<br>Columna: ".($j + 1).".</p>";
                        return true;
                    }
                }
            }
        }
    }

    // Diagonal superior inversa
    for ($i = 0; $i < 10; $i++) 
    {
        for ($j = 9; $j >= 0; $j--) 
        {
            if ($sopa [$i] [$j] == $palabra [0]) 
            {
                $encontrado = true;
                $n = $i + 1;
                $m = $j - 1;

                if ($j - (strlen ($palabra) - 1) >= 0 && $i + (strlen ($palabra) - 1) < 10)
                {
                    for ($k = 1; $k < strlen ($palabra); $k++) 
                    {
                        if ($sopa [$n] [$m] != $palabra[$k]) 
                        {
                            $encontrado = false;
                            break;
                        }
                        
                        $n++;
                        $m--;
                    }

                    if ($encontrado) 
                    {
                        echo "<p>Palabra: '$palabra'<br>Diagonal Inversa Arriba.<br>Fila: ".($i + 1)."<br>Columna: ".($j + 1).".</p>";
                        return true;
                    }
                }
            }
        }
    }

    // Diagonal inferior
    for ($i = 0; $i < 10; $i++) 
    {
        for ($j = 0; $j < 10; $j++) 
        {
            
            if ($sopa [$i] [$j] == $palabra [0]) 
            {
                $encontrado = true;
                $n = $i - 1;
                $m = $j + 1;

                if ($i - (strlen ($palabra) - 1) < 10 && $j + (strlen ($palabra) - 1) < 10) 
                {
                    for ($k = 1; $k < strlen ($palabra); $k++) 
                    {
                        if ($n < 0 || $m >= 10 || $sopa[$n][$m] != $palabra[$k]) 
                        {
                            $encontrado = false;
                            break;
                        }
                        
                        $n--;
                        $m++;
                    }

                    if ($encontrado) 
                    {
                        echo "<p>Palabra: '$palabra'<br>Diagonal Abajo.<br>Fila: ".($i + 1)."<br>Columna: ".($j + 1).".</p>";
                        return true;
                    }
                }
            }
        }
    }

    // Diagonal inferior inversa
    for ($i = 0; $i < 10; $i++) 
    {
        for ($j = 9; $j >= 0; $j--) 
        {
            if ($sopa [$i] [$j] == $palabra [0]) 
            {
                $encontrado = true;
                $n = $i - 1;
                $m = $j - 1;

                if ($j - (strlen($palabra) - 1) >= 0 && $i - (strlen($palabra) - 1) >= 0)
                {
                    for ($k = 1; $k < strlen ($palabra); $k++) 
                    {
                        if ($n < 0 || $m < 0 || $sopa[$n][$m] != $palabra[$k]) 
                        {
                            $encontrado = false;
                            break;
                        }

                        $n--;
                        $m--;
                    }

                    if ($encontrado) 
                    {
                        echo "<p>Palabra: '$palabra'<br>Diagonal Inversa Abajo.<br>Fila: ".($i + 1)."<br>Columna: ".($j + 1).".</p>";
                        return true;
                    }
                }
            }
        }
    }
    echo "<p>No se encontro la palabra</p>";
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Sopa</title>
</head>
<body>

    <h1>Sopa de Letras</h1>

    <form action="Sopa.php">
        <label>Escribe una palabra: </label>
        <input type="text" name="palabra" id="idPalabra">
        <input type="submit" value="Buscar">
    </form>

    <table border="1">
    <?php
    for ($i = 0; $i < 10; $i++) 
    {
        echo "<tr>";

        for ($j = 0; $j < 10; $j++) 
        {
                echo "<td>".$sopa [$i] [$j]."</td>";
        }
        echo "</tr>";
    }
    ?>
    </table>

    <?php
    if ($palabra == null) 
    {
        echo "<p><strong>No has ingresado una palabra!</strong></p>";
    } 
    else {
        buscarPalabra($palabra, $sopa);
    }
    ?>

</body>
</html>