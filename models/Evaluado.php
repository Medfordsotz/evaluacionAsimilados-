<?php

namespace Model;
class Evaluado extends ActiveRecord
{
    protected static $tabla = 'eva_datevaluado_asim';
    protected static $columnasDB = ['datevaluado_evaluado','datevaluado_grado', 'datevaluado_dependencia', 'datevaluado_puesto', 'datevaluado_tiempo', 'datevaluado_situacion'];
    protected static $idTabla = 'datevaluado_id';


    public $datevaluado_grado;
    public $datevaluado_dependencia;
    public $datevaluado_puesto;
    public $datevaluado_tiempo;  
    public $datevaluado_situacion;
    public $datevaluado_evaluado;
   

    public function __construct($args = [])
    {
        $this->datevaluado_evaluado = $args['datevaluado_evaluado'] ?? null;   
        $this->datevaluado_grado = $args['datevaluado_grado'] ?? null;
        $this->datevaluado_dependencia = $args['datevaluado_dependencia'] ?? null;
        $this->datevaluado_puesto = $args['datevaluado_puesto'] ?? '';
        $this->datevaluado_tiempo = $args['datevaluado_tiempo'] ?? null;     
        $this-> datevaluado_situacion = $args[' datevaluado_situacion'] ?? 1;
     
    }
}