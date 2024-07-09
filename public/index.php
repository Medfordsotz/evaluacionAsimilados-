<?php 
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\AppController;
use Controllers\EvaluadoController;

$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);

$router->get('/', [AppController::class,'index']);

$router->get('/evaluados', [EvaluadoController::class,'index'] );
$router->get('/API/evaluados/buscar', [EvaluadoController::class,'buscarApi'] );
$router->get('/API/evaluados/buscarBoletaLlena', [EvaluadoController::class,'buscarEvaluacionesGuardadasApi'] );
$router->get('/API/evaluados/datatableEvaluacionesIngresadas', [EvaluadoController::class,'datatableEvaluacionesIngresadas'] );
$router->get('/API/evaluados/llenar', [EvaluadoController::class,'llenarFormularioApi'] );
$router->get('/API/evaluados/llenarEvaluado', [EvaluadoController::class,'llenarFormularioEvaluadoApi'] );
$router->post('/API/evaluados/guardarEvaluado', [EvaluadoController::class,'guardarApi'] );
// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
