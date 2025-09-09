<?php
//programa para defenir mensaje de bienvenida
//Creado por Angelica Adilene Sauza Muñoz
//fecha:09/septiembre/2025
//appweb1.php
class texto
{
public $texto1="Bienvenidos a programacion de app web";
public function imprimirtexto()
{
    echo $this->texto1;
    print $this->texto1;
}
}
$obj1=new texto;
$obj1->imprimirtexto();
?>