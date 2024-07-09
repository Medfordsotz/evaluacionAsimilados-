<?php

namespace Controllers;

use Exception;
use Model\Boleta;
use Model\Evaluado;
use Model\Evaluador;
use Model\Notas;
use Model\Personal;
use Model\Pregunta;
use MVC\Router;



class EvaluadoController
{

    public static function index(Router $router)
    {


        $router->render('evaluados/index', []);
    }



    // public static function modificarAPI() {
    //     try {

    //         $id = $_POST['id'];
    //         $meritos = $_POST['Meritos'];

    //         $tipoOpcion = $_POST['tipo_opcion'];

    //         if ($tipoOpcion === 'cursos') {

    //             $cursos = Curso::find($id);
    //             $cursos->cur_creditos = $meritos;
    //             $resultado = $cursos->actualizar();

    //         } elseif ($tipoOpcion === 'condecoraciones') {

    //             $conde = Conde::find($id);
    //             $conde->con_creditos = $meritos;
    //             $resultado = $conde->actualizar();
    //         }


    //         if ($resultado['resultado'] == 1) {
    //             echo json_encode([
    //                 'mensaje' => 'Registro modificado correctamente',
    //                 'codigo' => 1
    //             ]);
    //         } else {
    //             echo json_encode([
    //                 'mensaje' => 'No se encontraron registros para actualizar',
    //                 'codigo' => 0
    //             ]);
    //         }
    //     } catch (Exception $e) {
    //         echo json_encode([
    //             'detalle' => $e->getMessage(),
    //             'mensaje' => 'Error al realizar la operación',
    //             'codigo' => 0
    //         ]);
    //     }
    // }



    // public static function buscarCursos()
    // {
    //     $sql = "SELECT cur_codigo as id_meritos, cur_desc_lg as descripcion, cur_creditos as meritos
    //     from cursos";

    //     try {
    //         $cursos = Curso::fetchArray($sql);
    //         return $cursos;

    //     } catch (Exception $e) {
    //         return [];
    //     }
    // }


    // public static function buscarCond()
    // {
    //     $sql = "SELECT 
    //             con_codigo as id_meritos, con_desc_lg as descripcion, con_creditos as meritos
    //             from cond";

    //     try {
    //         $condecoraciones = Conde ::fetchArray($sql);
    //         return $condecoraciones;
    //     } catch (Exception $e) {
    //         return [];
    //     }
    // }

    public static function getPreguntas()
    {

        $sql = " SELECT pre_descripcion FROM eva_preguntas WHERE pre_proyeccion  = 4";

        $resultado = Pregunta::fetchArray($sql);
        return $resultado;
    }

    public static function llenarFormularioApi()
    {

        $cat = $_GET['catalogo'];
        $sql = "SELECT per_catalogo,
        gra_codigo, gra_desc_md,arm_desc_md,
         trim(per_nom1)||' ' ||trim(per_nom2)||' '||trim( per_ape1)||' '||trim(per_ape2) as nombres,
          per_desc_empleo, 
          org_dependencia, 
          dep_desc_lg,
           dep_llave,
           t_puesto,
           org_ceom FROM morg,mper, armas, grados, mdep, tiempos
                WHERE per_grado = gra_codigo AND per_arma = arm_codigo AND per_plaza = org_plaza AND org_dependencia = dep_llave
                AND per_catalogo = t_catalogo and t_catalogo=$cat AND gra_clase = 3";

        try {
            $preguntas = static::getPreguntas();
            $resultado = Personal::fetchArray($sql);

            $data = [
                'resultado' => $resultado,
                'preguntas' => $preguntas
            ];

            echo json_encode($data);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

    public static function fecha()
    {
        date_default_timezone_set('America/Guatemala');
        $Fecha = date('Y-m-d');


        if ($Fecha <> "") {
            $trozos = explode("-", $Fecha);
            $dia = $trozos[2];
            $mes = $trozos[1];
            $annio = $trozos[0];
            switch ($mes) {
                case 1:
                    $mes = "Enero";
                    break;
                case 2:
                    $mes = "Febrero";
                    break;
                case 3:
                    $mes = "Marzo";
                    break;
                case 4:
                    $mes = "Abril";
                    break;
                case 5:
                    $mes = "Mayo";
                    break;
                case 6:
                    $mes = "Junio";
                    break;
                case 7:
                    $mes = "Julio";
                    break;
                case 8:
                    $mes = "Agosto";
                    break;
                case 9:
                    $mes = "Septiembre";
                    break;
                case 10:
                    $mes = "Octubre";
                    break;
                case 11:
                    $mes = "Noviembre";
                    break;
                case 12:
                    $mes = "Diciembre";
                    break;
            }
            $fecha1 = $dia . " de " . $mes . " de " . $annio;
        }
        $value = "";
        $eva1 = 1;
        $eva2 = 2;
        $annio_menos = $annio - 1;

        if ($mes == 1 || $mes == 2 || $mes == 3) {
            $value = $eva1 . $annio_menos;
        } elseif ($mes == 4 || $mes == 5 || $mes == 6 || $mes == 7 || $mes == 8) {
            $value = $eva1 . "-" . $annio;
        } else {
            $value = $eva2 . "-" . $annio;
        }
        return $value;
    }

    public static function llenarFormularioEvaluadoApi()
    {

        $fecha = self::fecha();

        $cat = $_GET['catalogo'];
        $sql = "SELECT per_catalogo,
        gra_codigo,  gra_codigo, trim(gra_desc_md)||' '||'DE'||' '||trim(arm_desc_md) as grado,
        arm_codigo,
         trim(per_nom1)||' ' ||trim(per_nom2)||' '||trim( per_ape1)||' '||trim(per_ape2) as nombres,
          per_desc_empleo, 
          org_dependencia, 
          dep_desc_lg,
           dep_llave,
           t_puesto,
           org_ceom FROM morg,mper, armas, grados, mdep, tiempos
                WHERE per_grado = gra_codigo AND per_arma = arm_codigo AND per_plaza = org_plaza AND org_dependencia = dep_llave
                AND per_catalogo = t_catalogo and t_catalogo=$cat";

        try {

            $resultado = Personal::fetchArray($sql);
            $data = [
                'resultado' => $resultado,
                'fecha' => $fecha
            ];

            echo json_encode($data);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }


    public static function buscarApi()
    {
        $anio = date("Y");
        $sql = "SELECT dep_desc_lg, dep_llave FROM mdep,mper, morg 
		 WHERE per_plaza = org_plaza AND org_dependencia = dep_llave 
		AND per_catalogo  =  USER";

        try {

            $resultado = Personal::fetchArray($sql);

            foreach ($resultado as $key => $value) {

                $dependencia = $value['dep_llave'];

                $sql2 = "SELECT per_catalogo as catalogo, trim (gra_desc_ct) || ',' || ' '|| trim (per_nom1) ||' '|| trim ( per_nom2)||' '|| trim(per_ape1) ||' '|| trim( per_ape2)as nombres, per_grado
                            from mper, grados, mdep, morg
                            where per_grado = gra_codigo and
                            per_plaza = org_plaza and
                            org_dependencia  = dep_llave and
                            per_catalogo not in (SELECT asim_cat_evaluado FROM eva_bol_asim WHERE asim_periodo LIKE '%$anio%')
                            and dep_llave = $dependencia  
                            and gra_clase = 3
                            group by per_catalogo, per_nom1, per_nom2, per_ape1, per_ape2, gra_desc_ct, per_grado
                            order by per_grado desc, per_catalogo asc";
                $resultado2 = Personal::fetchArray($sql2);
            }

            echo json_encode($resultado2);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }


    public static function datatableEvaluacionesIngresadas()
    {

        try {

            $catalogo = $_GET['catalogo'];
            $fecha = $_GET['fecha'];
            $sql = "SELECT 
                        evaluado.datevaluado_evaluado AS catalogo, 
                        bol.asim_id as id,
                        TRIM(graevaluado.gra_desc_ct)|| ', ' ||TRIM(perevaluado.per_nom1)|| ' ' ||TRIM(perevaluado.per_nom2)|| ' ' ||TRIM(perevaluado.per_ape1)|| ' ' ||TRIM(perevaluado.per_ape2) AS nombres       
                    FROM  
                        eva_bol_asim bol  
                    INNER JOIN 
                        eva_datevaluado_asim evaluado ON bol.asim_cat_evaluado = evaluado.datevaluado_evaluado
                    INNER JOIN 
                        eva_datevaluador_asim evaluador ON bol.asim_evaluador = evaluador.datevaluador_evaluador
                    INNER JOIN 
                        armas arm ON  arm.arm_codigo = evaluador.datevaluador_arma
                    INNER JOIN 
                        mper perevaluado ON perevaluado.per_catalogo = evaluado.datevaluado_evaluado
                    INNER JOIN 
                        grados graevaluado ON evaluado.datevaluado_grado = graevaluado.gra_codigo 
                    INNER JOIN 
                        mdep depevaluado ON evaluado.datevaluado_dependencia = depevaluado.dep_llave 
                    WHERE  bol.asim_situacion = 1";


            if ($catalogo !== '') {
                $sql .= " AND evaluado.datevaluado_evaluado = '$catalogo'";
            }

            if ($fecha !== '') {
                $sql .= " AND bol.asim_periodo LIKE '%$fecha%' ";
            }

            $resultado = Boleta::fetchArray($sql);
          

            if ($resultado['resultado' === 1]) {
                echo json_encode([
                    'detalle' => $resultado,
                    'mensaje' => 'Datos encontrados',
                    'codigo' => 1
                ]);
            } else {
                echo json_encode([
                    
                    'mensaje' => 'Sin datos',
                    'codigo' => 2
                ]);
            }
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

    public static function buscarEvaluacionesGuardadasApi()
    {
        $id = $_GET['id'];
        $sql = "SELECT 
                    evaluado.datevaluado_evaluado AS catalogo,
                    TRIM(graevaluado.gra_desc_ct) AS gradoEvaluado,
                    TRIM(perevaluado.per_nom1)|| ' ' ||TRIM(perevaluado.per_nom2)|| ' ' ||TRIM(perevaluado.per_ape1)|| ' ' ||TRIM(perevaluado.per_ape2) AS nombres,
                    depevaluado.dep_desc_lg AS dependencia,
                    evaluado.datevaluado_puesto AS puesto, 
                    evaluado.datevaluado_tiempo AS tiempo,
                    evaluador.datevaluador_evaluador AS evaluador,                
                    TRIM(graevaluador.gra_desc_ct)||' '||'DE'||' '||TRIM(arm.arm_desc_md) as gradoE,
                    TRIM(perevaluador.per_nom1)|| ' ' ||TRIM(perevaluador.per_nom2)|| ' ' ||TRIM(perevaluador.per_ape1)|| ' ' ||TRIM(perevaluador.per_ape2) AS nombresEvaluador,
                    depevaluador.dep_desc_lg AS dependenciaEvaluador,
                    evaluador.datevaluador_puesto AS puestoEvaluador, 
                    evaluador.datevaluador_tiempo AS tiempoEvaluador,
                    bol.asim_perfil AS perfil,
                    bol.asim_pafe AS pafe,
                    bol.asim_demeritos AS demeritos,
                    bol.asim_arrestos AS arrestos,
                    bol.asim_total_salud AS salud,
                    bol.asim_total AS conceptualizacion,
                    bol.asim_cat_g1 AS g1,
                    bol.asim_cat_comte AS comte,
                    bol.asim_obs AS observaciones,
                    bol.asim_periodo AS periodo                    
                FROM  
                    eva_bol_asim bol  
                INNER JOIN 
                    eva_datevaluado_asim evaluado ON bol.asim_cat_evaluado = evaluado.datevaluado_evaluado
                INNER JOIN 
                    eva_datevaluador_asim evaluador ON bol.asim_evaluador = evaluador.datevaluador_evaluador
                INNER JOIN 
                    armas arm ON  arm.arm_codigo = evaluador.datevaluador_arma
                INNER JOIN 
                    mper perevaluado ON perevaluado.per_catalogo = evaluado.datevaluado_evaluado
                INNER JOIN 
                    grados graevaluado ON evaluado.datevaluado_grado = graevaluado.gra_codigo 
                INNER JOIN 
                    mdep depevaluado ON evaluado.datevaluado_dependencia = depevaluado.dep_llave 
                INNER JOIN 
                    mper perevaluador ON perevaluador.per_catalogo = evaluador.datevaluador_evaluador
                INNER JOIN 
                    grados graevaluador ON evaluador.datevaluador_grado = graevaluador.gra_codigo 

                INNER JOIN 
                    mdep depevaluador ON evaluador.datevaluador_dependencia = depevaluador.dep_llave
                WHERE   bol.asim_id = $id";

        $resultado1 = Boleta::fetchArray($sql);




        try {
            $valores = [];
            foreach ($resultado1 as $key => $value) {
                $catalogo2 = $value['catalogo'];

                $sql2 = "SELECT 
                            pre_descripcion, 
                            notapsim_id, 
                            notapsim_pregunta, 
                            notapsim_periodo, 
                            notapsim_catalogo, 
                            notapsim_cantidad
                        FROM 
                            eva_notapreg_asim
                        INNER JOIN 
                            eva_preguntas ON notapsim_pregunta = pre_codigo
                        WHERE 
                            notapsim_catalogo = $catalogo2";

                $resultado2 = Notas::fetchArray($sql2);

                $value['notas'] = $resultado2;
                $valores[] = $value;
            }

            echo json_encode([
                'detalle' => $valores,
                'mensaje' => 'Datos recuperados correctamente',
                'codigo' => 1
            ]);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }


    public static function guardarApi()
    {
        try {


            $evaluado = new Evaluado($_POST);

            $evaluadoResultado = $evaluado->crear();




            if ($evaluadoResultado['resultado'] == 1) {


                $evaluador = new Evaluador($_POST);

                $evaluadorResultado = $evaluador->crear();

                // $array=[];
                // $array=[
                //     $evaluadorResultado,
                //     $evaluadoResultado
                // ];
                // echo json_encode($array);
                // exit;

                if ($evaluadorResultado['resultado'] == 1) {
                    $batzEvaluacion = [];

                    $batzEvaluacion = [
                        'asim_cat_evaluado' => $_POST['datevaluado_evaluado'],
                        'asim_periodo' => $_POST['asim_periodo'],
                        'asim_evaluador' => $_POST['datevaluador_evaluador'],
                        'asim_perfil' => $_POST['asim_perfil'],
                        'asim_pafe' => $_POST['asim_pafe'],
                        'asim_demeritos' => $_POST['asim_demeritos'],
                        'asim_arrestos' => $_POST['asim_arrestos'],
                        'asim_total_salud' => $_POST['asim_total_salud'],
                        'asim_total_concep' => $_POST['asim_total_concep'],
                        'asim_total' => $_POST['asim_total'],
                        'asim_cat_g1' => $_POST['asim_cat_g1'],
                        'asim_cat_comte' => $_POST['asim_cat_comte'],
                        'asim_obs' => $_POST['asim_obs'],
                    ];

                    $evaluacion = new Boleta($batzEvaluacion);
                    $resultadoEvaluacion = $evaluacion->crear();

                    if ($resultadoEvaluacion['resultado'] == 1) {
                        $idEvaluacion = $resultadoEvaluacion['id'];
                        $notapsim_periodo = $_POST['asim_periodo'];
                        $notapsim_catalogo = $_POST['datevaluado_evaluado'];


                        $notasPregsArray = array();
                        for ($i = 1; $i <= 10; $i++) {
                            $notapsim_pregunta = $_POST['pregunta' . $i];
                            $notapsim_cantidad = $_POST[$i];
                            $notasPregsArray[] = array(
                                'notapsim_id' => $idEvaluacion,
                                'notapsim_periodo' => $notapsim_periodo,
                                'notapsim_pregunta' => $notapsim_pregunta,
                                'notapsim_cantidad' => $notapsim_cantidad,
                                'notapsim_catalogo' => $notapsim_catalogo

                            );
                        }

                        // $notasPregsArray2=[];

                        $todosExitosos = true;

                        foreach ($notasPregsArray as $notasPregsData) {
                            $notasPregs = new Notas($notasPregsData);
                            $notasPregsResultado = $notasPregs->crear();
                            $resultados[] = $notasPregsResultado;

                            if ($notasPregsResultado['resultado'] != 1) {
                                $todosExitosos = false;
                            }
                        }
                        if ($todosExitosos) {
                            echo json_encode([
                                'mensaje' => 'Datos Guardados Correctamente',
                                'codigo' => 1
                            ]);
                        } else {
                            echo json_encode([
                                'mensaje' => 'Error al guardar notas',
                                'codigo' => 0
                            ]);
                            exit;
                        }
                    } else {
                        echo json_encode([
                            'mensaje' => ' Error en la boleta ',
                            'codigo' => 0
                        ]);
                        exit;
                    }
                } else {
                    echo json_encode([
                        'mensaje' => ' Error en el evaluador ',
                        'codigo' => 1
                    ]);
                    exit;
                }
            } else {
                echo json_encode([
                    'mensaje' => ' Error en el evaluado ',
                    'codigo' => 0
                ]);
                exit;
            }
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Error',
                'codigo' => 0
            ]);
        }
    }
}
