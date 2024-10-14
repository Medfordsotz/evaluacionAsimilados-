<?php
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\AppController;
use Controllers\EvaluadoController;
use Controllers\GenerarController;

$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);

$router->get('/', [AppController::class, 'index']);

$router->get('/evaluados', [EvaluadoController::class, 'index']);
$router->get('/API/evaluados/buscar', [EvaluadoController::class, 'buscarApi']);
$router->get('/API/evaluados/buscarBoletaLlena', [EvaluadoController::class, 'buscarEvaluacionesGuardadasApi']);
$router->get('/API/evaluados/datatableEvaluacionesIngresadas', [EvaluadoController::class, 'datatableEvaluacionesIngresadas']);
$router->get('/API/evaluados/llenar', [EvaluadoController::class, 'llenarFormularioApi']);
$router->get('/API/evaluados/llenarEvaluado', [EvaluadoController::class, 'llenarFormularioEvaluadoApi']);
$router->post('/API/evaluados/guardarEvaluado', [EvaluadoController::class, 'guardarApi']);


$router->get('/pdf', [GenerarController::class, 'pdf']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
