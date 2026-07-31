<?php
namespace App\Controllers;
use App\Model\Producto;
use App\Model\Categoria;
class ProductoController {
    public function index(): void {
    
    $categoria = new Categoria(1,'electronics','productos electronicos');
    $P1 = new Producto(2,"Laptop",5000.00, 10, "dell", $categoria);
    $P2 = new Producto(3,"mouse", 2500.00, 5, "logitech", $categoria);
    $productos = [$P1, $P2];
    require_once __DIR__ . '/../../views/Cuerpo.php';
   }
}