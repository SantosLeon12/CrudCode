<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Rutas para plantillas
$routes->get('/', 'PlantillasController::index');
$routes->get('/obtenerPlantilla/(:any)', 'PlantillasController::obtenerPlantilla/$1');
$routes->post('/crear', 'PlantillasController::crear');
$routes->get('/eliminar/(:any)', 'PlantillasController::eliminar/$1');
$routes->post('/actualizar', 'PlantillasController::actualizar');

//Rutas para empresas
$routes->get('/empresas', 'EmpresasController::index');
$routes->get('/obtenerEmpresa/(:any)', 'EmpresasController::obtenerEmpresa/$1');
$routes->post('/createEmpresa', 'EmpresasController::createEmpresa');
$routes->get('/deleteEmpresa/(:any)', 'EmpresasController::deleteEmpresa/$1');
$routes->post('/updateEmpresa', 'EmpresasController::updateEmpresa');

//Rutas para cliente
$routes->get('/clientes', 'ClientesController::index');
$routes->get('/obtenerCliente/(:any)', 'ClientesController::obtenerCliente/$1');
$routes->post('/createCliente', 'ClientesController::createCliente');
$routes->get('/deleteCliente/(:any)', 'ClientesController::deleteCliente/$1');
$routes->post('/updateCliente', 'ClientesController::updateCliente');

//Rutas para sucursales
$routes->get('/sucursales', 'SucursalesController::index');
$routes->get('/obtenerSucursal/(:any)', 'SucursalesController::obtenerSucursal/$1');
$routes->post('/createSucursal', 'SucursalesController::createSucursal');
$routes->get('/deleteSucursal/(:any)', 'SucursalesController::deleteSucursal/$1');
$routes->post('/updateSucursal', 'SucursalesController::updateSucursal');

//Rutas para Areas
$routes->get('/areas', 'AreasController::index');
$routes->get('/obtenerArea/(:any)', 'AreasController::obtenerArea/$1');
$routes->post('/createArea', 'AreasController::createArea');
$routes->get('/deleteArea/(:any)', 'AreasController::deleteArea/$1');
$routes->post('/updateArea', 'AreasController::updateArea');

//Rutas para Usuarios
$routes->get('/usuarios', 'UsuariosController::index');
$routes->get('/obtenerUsuario/(:any)', 'UsuariosController::obtenerUsuario/$1');
$routes->post('/createUsuario', 'UsuariosController::createUsuario');
$routes->get('/deleteUsuario/(:any)', 'UsuariosController::deleteUsuario/$1');
$routes->post('/updateUsuario', 'UsuariosController::updateUsuario');

//Rutas para Articulos
$routes->get('/articulos', 'ArticulosController::index');
$routes->get('/obtenerArticulo/(:any)', 'ArticulosController::obtenerArticulo/$1');
$routes->post('/createArticulo', 'ArticulosController::createArticulo');
$routes->get('/deleteArticulo/(:any)', 'ArticulosController::deleteArticulo/$1');
$routes->post('/updateArticulo', 'ArticulosController::updateArticulo');

//Rutas para OrdenVenta
$routes->get('/ordenventa', 'OrdenVentaController::index');
$routes->get('/obtenerOrdenVenta/(:any)', 'OrdenVentaController::obtenerOrdenVenta/$1');
$routes->post('/createOrdenVenta', 'OrdenVentaController::createOrdenVenta');
$routes->get('/deleteOrdenVenta/(:any)', 'OrdenVentaController::deleteOrdenVenta/$1');
$routes->post('/updateOrdenVenta', 'OrdenVentaController::updateOrdenVenta');