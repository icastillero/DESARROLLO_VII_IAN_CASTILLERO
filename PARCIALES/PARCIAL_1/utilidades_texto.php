<?php
//PARCIAL_01

//Punto01

function contar_palabra($palabras) {
    echo "Palabra / Frase Completa es: $palabras!<br>";
    $palabras_rray = explode(" ", $palabras);
    echo "Array de frutas:</br>";
    //print_r($palabras_rray[0]);
    $num_palabra = count($palabras_rray);
    
    echo"<br>La frase ingresa cuenta con $num_palabra palabras<br>";
    echo"<br>La palabras que completan la  frase son: <br>";

    for ($i = 0; $i <= ($num_palabra-1); $i++) {
        
        echo ($i + 1) . ". " . $palabras_rray[$i] . "<br>";
        echo "<br>";
    }

    for ($j = 0; $j <= ($num_palabra-1); $j++) {
        $pal = strlen($palabras_rray[$j]);
        printf("La palabra %s contiene %d letras <br>", $palabras_rray[$j],$pal) ."<br>";
                
        for ($i = 0; $i <= ($pal); $i++) {
            $aux = substr($palabras_rray[$j], $i);  
            echo "$aux<br>";  
       }    

    }

}

contar_palabra("Juan Perez");

?>