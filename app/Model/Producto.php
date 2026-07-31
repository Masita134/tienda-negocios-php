<?php
namespace App\Model;
class producto {
    private int $id;
    private string $name;
    private float $precio;
    private int $stock;
    private string $marca;
    private Categoria $categoria;
    public function __construct(int $id, string $name, float $precio, int $stock , string $marca, Categoria $categoria)
    {
        $this->id = $id;
        $this->name = $name;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->marca = $marca;
        $this->categoria = $categoria;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getPrecio(): float
    {
        return $this->precio;
    }
    public function getStock(): int
    {
        return $this->stock;
    }
    public function getMarca(): string 
    {
    return $this->marca;
    }
    public function getCategoria(): Categoria 
    {
        return $this->categoria;
    }   public function setPrecio(float $precio): void 
    {
        $this->precio = $precio;
    }

    public function setStock(int $stock): void 
    {
        $this->stock = $stock;
    }
    public function setname(string $name): void 
    {
        $this->name = $name;
    }
    public function setMarca(string $marca): void 
    {
        $this->marca = $marca;
    }
    public function setCategoria(Categoria $categoria): void 
    {
        $this->categoria = $categoria;
    }
}
