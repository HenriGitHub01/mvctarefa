<?php

include_once __DIR__ . "/../../vendor/autoload.php";

use App\model\Usuario;

$u = new Usuario("huguinho",30);

echo $_GET["atributo"];

if ( $_GET["atributo"] == "nome"){
 return $u->getNome();
}

if ( $_GET["atributo"] == "idade"){
    return $u->getIdade();
   }

   echo  $_GET['user'];
   $permissoes = $_GET['permissoes'];
   echo $permissoes;
?>