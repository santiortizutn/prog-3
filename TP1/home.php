
<?php


include 'clases/paises.php';


$pais = new Paises('americas', 'eu', 'vi', 'buenos aires'); 
// se eligen los atributos para los fitros (continente, region, idioma, capital).

echo '------LISTADO------ <br>';
//$pais->mostrarCont(); // muestra el listado de paises por CONTINENTE.
//$pais->mostrarReg(); // muestra el listado de paises por REGION.
//$pais->mostrarId(); // muestra el listado de paises por IDIOMA.
$pais->mostrarCap(); // muestra el listado de paises por CAPITAL.



