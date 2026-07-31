<?php
require_once 'vendor/autoload.php';
use App\Model\Categoria;
use App\Model\Producto;
$categoriatech = new Categoria(1, "teclados", "teclados mecanicos");
$teclado = new producto(101, "teclado kurama", 45000.0 , 10, "redragon", $categoriatech);
echo "producto: " . $teclado->getName() . "<br>";
echo "marca: " . $teclado->getMarca() . "<br>";
echo "categoria: " . $teclado->getCategoria()->getNombre() . "<br>";
?>