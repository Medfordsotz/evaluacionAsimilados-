<?php
namespace Controllers;

use \Mpdf\Mpdf;
use MVC\Router;
use Model\Boleta;
use Exception;

class GenerarController
{
    public static function pdf(Router $router)
    {


        $id = $_GET['31'];


        try {
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
                WHERE   bol.asim_id = 31"; // Tu consulta SQL aquí
            $resultado1 = Boleta::fetchArray($sql);
            echo json_encode($resultado1);

            // Captura el contenido HTML
            ob_start($resultado1);
            include 'pdf/pdf.php'; // Ruta a tu vista
            $html = ob_get_clean();

            // Generar el PDF
            $mpdf = new Mpdf([
                "orientation" => "P",
                "default_font_size" => 12,
                "default_font" => "arial",
                "format" => "letter",
                "mode" => 'utf-8'
            ]);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}



