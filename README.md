# Tienda RGB Zone- PHP
Este es un sistema básico de gestión de productos y categorías desarrollado en PHP aplicando Programación Orientada a Objetos (POO) y arquitectura MVC.
## requisitos previos 
Asegúrate de tener instaladas las siguientes herramientas en tu sistema:
**PHP** 
**XAMPP** (o un servidor local equivalente con Apache)
**Composer**
## instalacion 
1. descargar el repositorio y colocalo dentro de la carpeta local de tu servidor:
   * En XAMPP: `C:\xampp\htdocs\proyecto`
2. **Instalar dependencias y regenerar el autocargador:**
   Abre una terminal en la carpeta raíz del proyecto y ejecuta:
   ```bash
   composer dump-autoload
## ejecucion 
1.Abre el panel de control de XAMPP e inicia el servicio Apache.

2.Abre tu navegador e ingresa a la siguiente URL:
    http://localhost/proyecto/
##  Arquitectura del Proyecto (MVC)

El proyecto utiliza el patrón **Modelo-Vista-Controlador (MVC)** organizado de la siguiente manera:

- **Modelo (`app/Model/`)**: Define la estructura de datos y las clases del dominio (`Producto`, `Categoria`, `Usuario`, `Carrito`).
- **Controlador (`app/Controllers/`)**: Contiene la lógica de negocio (`ProductoController`), obtiene los datos del modelo y los envía a la vista.
- **Vista (`views/`)**: Contiene los archivos HTML/PHP (`Listado.php`) encargados de mostrar la información al usuario final.
- **Front Controller (`index.php`)**: Es el punto de entrada principal a la aplicación.