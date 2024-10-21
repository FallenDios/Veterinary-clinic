<?php

/*Una veterinaria de la ciudad de Neuquén mantiene información sobre los animales 
que atiende en un dia, para lo cual se necesita un programa 
que solicite los datos de una cantidad indefinida de mascotas.*/

/*INT $totalAnimales, $cantlGranja, $cantCompeticion, $cantMascota, $edadMasJoven, $edadAnimal, $masAtencion
FLOAT $porcentajeGranja
STRING $nombreMascota, $nombreDueño, $tipo $mascotaMasJoven, $rta, $nombreDeDueñoMasJoven*/

$totalAnimales=0;
$cantlGranja=0;
$cantCompeticion=0;
$edadMasJoven=9999;
$cantMascota=0;
$mascotaMasJoven="";
$masAtencion="";
$nombreDeDueñoMasJoven="";
$rta="s";

echo"Desea ingresar una mascota? (s/n)\n";
$rta= trim(fgets(STDIN));

while ($rta=="s"){
    echo"Ingrese el nombre del dueño\n";
    $nombreDueño=trim(fgets(STDIN));
    echo"Ingrese el nombre de la mascota\n";
    $nombreMascota=trim(fgets(STDIN));
    echo"Ingrese la edad de la mascota\n";
    $edadAnimal=trim(fgets(STDIN));
    echo"Ingrese el tipo de animal (M=mascota, G=granja, C=competición)\n";
    $tipo=trim(fgets(STDIN));
    $totalAnimales=$totalAnimales+1;
    if ($tipo=="m"){
        $cantMascota=$cantMascota+1;
    }elseif ($tipo=="g"){
        $cantlGranja=$cantlGranja+1;
    }elseif ($tipo=="c"){
        $cantCompeticion=$cantCompeticion+1;
    }else{
        echo"ERROR INGRESAR TIPO VALIDADO";
    }

    if ($edadAnimal<$edadMasJoven){
        $edadMasJoven=$edadAnimal;
        $mascotaMasJoven=$nombreMascota;
        $nombreDeDueñoMasJoven=$nombreDueño;
    }

    echo"Desea ingresar una mascota? (s/n)\n";
    $rta= trim(fgets(STDIN));
}

if ($totalAnimales>0){
    $porcentajeGranja=($cantlGranja/$totalAnimales)*100;

 // Verificar el tipo con mayor atención
 if ($cantMascota > $cantCompeticion && $cantMascota > $cantlGranja) {
    $masAtencion = "Mascota";
} elseif ($cantCompeticion > $cantlGranja) {
    $masAtencion = "Competición";
} else {
    $masAtencion = "Granja";
}
echo"La mascota mas joven es de :$nombreDeDueñoMasJoven y la mascota es $mascotaMasJoven\n";
echo"El porcentaje de animales de la granja es: $porcentajeGranja\n";
echo"El tipo de animal con mayor atencion es: $masAtencion\n";
}

else{
    echo"No se ingresaron animales";
}

?>