<?php

namespace Model;
class Pregunta extends ActiveRecord
{
    protected static $tabla = 'eva_preguntas ';
    protected static $columnasDB = ['pre_descripcion ', ' pre_proyeccion'];
    protected static $idTabla = 'pre_codigo';

    public $gra_codigo;
    public $pre_descripcion ;
    public $pre_proyeccion;
   
   

    public function __construct($args = [])
    {
        $this->gra_codigo = $args['gra_codigo'] ?? null;
        $this->pre_descripcion  = $args['pre_descripcion '] ?? null;
        $this-> pre_proyeccion = $args['pre_proyeccion'] ?? null;
     
     
    }
}