<?php

namespace Model;
class Boleta extends ActiveRecord
{
    protected static $tabla = 'eva_bol_asim';
    protected static $columnasDB = ['asim_cat_evaluado', 'asim_periodo', 'asim_evaluador', 'asim_perfil', 'asim_pafe', 'asim_demeritos', 'asim_arrestos', 'asim_total_salud', 'asim_total_concep', 'asim_total', 'asim_cat_g1', 'asim_cat_comte', 'asim_obs', 'asim_situacion'];
    protected static $idTabla = 'asim_id';


    public $asim_cat_evaluado ;
    public $asim_periodo;
    public $asim_evaluador;
    // public $asim_ceom;
    public $asim_perfil;
    public $asim_pafe;
    public $asim_demeritos;
    public $asim_arrestos;
    public $asim_total_salud;
    public $asim_total_concep;
    public $asim_total;
    public $asim_cat_g1;
    public $asim_cat_comte;
    public $asim_obs;
    public $asim_situacion;
   

    public function __construct($args = [])
    {
      
        $this-> asim_cat_evaluado  = $args['asim_cat_evaluado'] ?? null;
        $this-> asim_periodo = $args['asim_periodo'] ?? null;
        $this-> asim_evaluador = $args['asim_evaluador'] ?? '';
        // $this-> asim_ceom = $args['asim_ceom'] ?? null;
        $this-> asim_perfil = $args['asim_perfil'] ?? null;
        $this-> asim_pafe = $args['asim_pafe'] ?? null;
        $this-> asim_demeritos = $args['asim_demeritos'] ?? null;
        $this-> asim_arrestos = $args['asim_arrestos'] ?? null;
        $this-> asim_total_salud = $args['asim_total_salud'] ?? null;
        $this-> asim_total_concep = $args['asim_total_concep'] ?? null;
        $this-> asim_total = $args['asim_total'] ?? null;
        $this-> asim_cat_g1 = $args['asim_cat_g1'] ?? null;
        $this-> asim_cat_comte = $args['asim_cat_comte'] ?? null;
        $this-> asim_obs = $args['asim_obs'] ?? '';
        $this-> asim_situacion = $args['asim_situacion'] ?? 1;
     
    }
}