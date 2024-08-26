<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ver_niveles','NivelesController::verNiveles');
$routes->get('ver_ciudadanos','CiudadanosController::verCiudadanos');
$routes->get('ver_municipios','MunicipiosController::verMunicipios');
$routes->get('ver_departamentos','DepartamentosController::verDepartamentos');
$routes->get('ver_regiones','RegionesController::verRegiones');

$routes->get('insertar_nivel','NivelesController::insertarNivel');
$routes->get('eliminar_nivel/(:num)','NivelesController::eliminarNivel/$1');
$routes->get('actualizar_nivel/(:num)','NivelesController::actualizarNivel/$1');
$routes->post('guardar_nivel','NivelesController::guardarNivel');
$routes->post('modificar_nivel','NivelesController::modificarNivel');

$routes->get('insertar_ciudadano','CiudadanosController::insertarCiudadano');
$routes->get('eliminar_ciudadano/(:num)','CiudadanosController::eliminarCiudadano/$1');
$routes->get('actualizar_ciudadano/(:num)','CiudadanosController::actualizarCiudadano/$1');
$routes->post('guardar_ciudadano','CiudadanosController::guardarCiudadano');
$routes->post('modificar_ciudadano','CiudadanosController::modificarCiudadano');

$routes->get('insertar_municipio','MunicipiosController::insertarMunicipio');
$routes->get('eliminar_municipio/(:num)','MunicipiosController::eliminarMunicipio/$1');
$routes->get('actualizar_municipio/(:num)','MunicipiosController::actualizarMunicipio/$1');
$routes->post('guardar_municipio','MunicipiosController::guardarMunicipio');
$routes->post('modificar_municipio','MunicipiosController::modificarMunicipio');

$routes->get('insertar_departamento','DepartamentosController::insertarDepartamento');
$routes->get('eliminar_departamento/(:num)','DepartamentosController::eliminarDepartamento/$1');
$routes->get('actualizar_departamento/(:num)','DepartamentosController::actualizarDepartamento/$1');
$routes->post('guardar_departamento','DepartamentosController::guardarDepartamento');
$routes->post('modificar_departamento','DepartamentosController::modificarDepartamento');

$routes->get('insertar_region','RegionesController::insertarRegion');
$routes->get('eliminar_region/(:num)','RegionesController::eliminarRegion/$1');
$routes->get('actualizar_region/(:num)','RegionesController::actualizarRegion/$1');
$routes->post('guardar_region','RegionesController::guardarRegion');
$routes->post('modificar_region','RegionesController::modificarRegion');








