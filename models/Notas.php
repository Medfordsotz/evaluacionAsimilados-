<?php

namespace Model;
class Notas extends ActiveRecord
{
    protected static $tabla = 'eva_notapreg_asim';
    protected static $columnasDB = ['notapsim_id','notapsim_catalogo','notapsim_pregunta','notapsim_periodo','notapsim_cantidad', 'notapsim_situacion'];
    protected static $idTabla = ['notapsim_id','notapsim_pregunta'];

    public $notapsim_cantidad;
    public $notapsim_situacion;
    public $notapsim_id;
    public $notapsim_pregunta;
    public $notapsim_periodo;
    public $notapsim_catalogo;

    public function __construct($args = [])
    {
        $this->notapsim_cantidad = $args['notapsim_cantidad'] ?? null;
        $this->notapsim_id = $args['notapsim_id']?? null;
        $this->notapsim_pregunta = $args['notapsim_pregunta'] ?? null;
        $this->notapsim_periodo = $args['notapsim_periodo'] ?? null;
        $this->notapsim_catalogo = $args['notapsim_catalogo'] ?? null;
        $this->notapsim_situacion = $args['notapsim_situacion'] ?? 1;
     
    }
}