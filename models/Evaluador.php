<?php

namespace Model;
class Evaluador extends ActiveRecord
{
    protected static $tabla = 'eva_datevaluador_asim';
    protected static $columnasDB = ['datevaluador_evaluador','datevaluador_grado', 'datevaluador_dependencia', 'datevaluador_puesto', 'datevaluador_tiempo', 'datevaluador_arma', 'datevaluador_situacion'];
    protected static $idTabla = 'datevaluador_id';

    public $gra_codigo;
    public $datevaluador_grado;
    public $datevaluador_dependencia;
    public $datevaluador_puesto;
    public $datevaluador_tiempo;
    public $datevaluador_arma;
    public $datevaluador_situacion;
    public $datevaluador_evaluador;
   

    public function __construct($args = [])
    {
        $this->gra_codigo = $args['gra_codigo'] ?? null;
        $this->datevaluador_evaluador = $args['datevaluador_evaluador'];
        $this->datevaluador_grado = $args['datevaluador_grado'] ?? null;
        $this->datevaluador_dependencia = $args['datevaluador_dependencia'] ?? null;
        $this->datevaluador_puesto = $args['datevaluador_puesto'] ?? '';
        $this->datevaluador_tiempo = $args['datevaluador_tiempo'] ?? null;
        $this->datevaluador_arma = $args['datevaluador_arma'] ?? null;
        $this-> datevaluador_situacion = $args[' datevaluador_situacion'] ?? 1;
     
    }
}