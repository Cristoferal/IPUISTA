<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\LoginController;
use Controllers\PaginasController;
use Controllers\VendedorController;
use Controllers\PropiedadController;

$router = new Router();
//quitarle el propiedades y correr de nuevo el npx y el composer uptadet

//Zona privada
             //URL     Controlador asociado         Metodo
$router->get('/admin', [PropiedadController::class, 'index']);
$router->get('/eventos/crear', [PropiedadController::class, 'crear']);
$router->post('/eventos/crear', [PropiedadController::class, 'crear']);
$router->get('/eventos/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/eventos/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/eventos/eliminar', [PropiedadController::class, 'eliminar']);

$router->get('/presentadores/crear', [VendedorController::class, 'crear']);
$router->post('/presentadores/crear', [VendedorController::class, 'crear']);
$router->get('/presentadores/actualizar', [VendedorController::class, 'actualizar']);
$router->post('/presentadores/actualizar', [VendedorController::class, 'actualizar']);
$router->post('/presentadores/eliminar', [VendedorController::class, 'eliminar']);

//Zona publica
$router->get('/', [PaginasController::class, 'index']);
$router->get('/nosotros', [PaginasController::class, 'nosotros']);
$router->get('/eventos', [PaginasController::class, 'propiedades']);
$router->get('/propiedad', [PaginasController::class, 'propiedad']);
$router->get('/comunidad', [PaginasController::class, 'comunidad']);
$router->get('/nuestraComunidad', [PaginasController::class, 'nuestraComunidad']);
$router->get('/serviciosAdoracion', [PaginasController::class, 'serviciosAdoracion']);
$router->get('/programashombresMujeres', [PaginasController::class, 'programashombresMujeres']);
$router->get('/programasNiñosJovenes', [PaginasController::class, 'programasNiñosJovenes']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);

// Login y autenticacion
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

$router->comprobarRutas();
