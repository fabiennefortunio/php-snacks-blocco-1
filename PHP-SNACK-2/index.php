<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>  
<?php
if(isset($_GET["name"])){
    print_r($_GET);
    $correct=true;

    if(mb_strlen($_GET["name"])<=3){
        $correct=false;
    }

    if(!is_numeric($_GET["age"])){
        $correct=false;
    }
    if(strpos($_GET["email"],".")==-1 || strpos($_GET["email"],"@")==-1){
        $correct=false;
    }
 
//  $a="Hola que tal";
//  $b=strpos($a,"z");
//   $b==-1


    if($correct){
        echo "<h1>Welcome.</h1>";
    }
    else{
        echo "<h1>Access denied.</h1>";
    }
}
else{
?>
<form action="" method="GET">
    <label for="name">
        <p style="font-weight:bold;">Name:</p> 
        <input id="name" type="text" name="name" value="" placeholder="Your name here...">
    </label>

    <label for="age">
        <p style="font-weight:bold;">Age:</p>

        <input id="age" type="number" name="age" value="" placeholder="You age here...">
    </label>
    <label for="email">
        <p style="font-weight:bold;">Email:</p>
        <input id="email" type="email" name="email" value="" placeholder="Your email here...">
    </label>
    <button type="submit">Login</button>
</form>
<?php } ?>
</body>
</html>
<!-- SNACK 2
Pase como parámetros GET "name", "mail" y "age" y compruebe (buscando el
que no conocemos en la documentación) que:
● "nombre" es más largo que 3 caracteres;
● "mail" contiene un punto y un arroba;
● "edad" es un número.
Si todo está bien, imprima "Acceso exitoso", de lo contrario "Acceso denegado". -->




<?php


?>








<!-- 
SNACK 3:
Crear una array: Cada array secundaria tendrá una fecha como clave en este
formato: DD-MM-AAAA (ex 01-01-2007) y como valor un conjunto de puestos
asociado con esa fecha.
Imprima cada fecha con sus correspondientes POST.

Aquí está la array de ejemplo:
https://www.codepile.net/pile/R2K5d68z -->


<!-- PHPSnack 4
Crear una función que devuelva un array con 15 números aleatorios, manteniendo
que el array no debe contener el mismo número más de una vez

 -->

 <!-- PHPSnack 5

Cree un párrafo bastante largo que contenga varias frases. Toma el
párrafo y dividirlo en muchos párrafos: cada vez que se encuentra un punto,
tienes que crear un nuevo párrafo. -->



<!-- 
PHPSnack 6

Utilice este array: https://pastebin.com/CkX3680A.
Imprimimos nuestro array poniendo a los maestros en un rectángulo gris y el
PM en un rectángulo verde. -->


<!-- PHPSnack 7

Crear un array que contenga algunos estudiantes de una clase hipotética. Cada estudiante
tendrá nombre, apellido y una lista de sus calificaciones escolares.
Imprimir el nombre, apellido y las notas medias de cada estudiante. -->

