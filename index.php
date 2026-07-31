<?php
require_once 'vendor/autoload.php';
use App\Model\Categoria;
use App\Model\Producto;
use App\Controllers\productoController;
$controller = new ProductoController();
$controller->index();
?>