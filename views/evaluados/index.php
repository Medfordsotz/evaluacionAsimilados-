<button data-bs-toggle="modal" data-bs-target="#modalBuscarPer" id="btnBuscar1" class="btn btn-info btn-lg rounded-circle  float-button"><i class="bi bi-search"></i></button>

<div class="modal fade modal-sm" id="modalFormularioBuscar" tabindex="-1" role="dialog" aria-labelledby="modalFormularioBuscar" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document" style="max-width: 95%; max-height: 100vh;">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body" style="background: radial-gradient(circle, #020024, #7c9d7d 40%, #020024 80%); color: #515155;">
                <div class="row justify-content-center mt-5 mx-auto w-90">


                    <form class="border bg-light p-4 mt-4 mx-auto" id="formularioBoletasIngresadas" name="formularioBoletasIngresadas" style="width: 30%; min-height: 30vh; margin-top: 60px; display: flex; flex-direction: column; align-items: center;">
                        <div class="text-center mb-4">
                            <h1> Buscar Boletas Ingresadas</h1>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-6">
                                <label for="ste_cat"> <i class="bi bi-universal-access"></i>Catalogo</label>
                                <input value="" id="ste_cat" name="ste_cat" class="form-control" type="number" placeholder="Número de catálogo">
                            </div>
                            <div class="col-lg-6">
                                <label for="ste_fecha"><i class="bi bi-calendar-date-fill"></i> Fecha de la Evaluacion</label>
                                <input value="" id="ste_fecha" name="ste_fecha" class="form-control" type="month">
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <button type="button" id="btnBuscar" name="btnBuscar" data-bs-target="#carouselEvaluacion" class="btn btn-outline-info w-100 overflow-visible text-wrap">Buscar</button>
                            </div>
                        </div>
                    </form>
                    <div class="row justify-content-center mt-5" id="containerTableIngresos" >
                        <div class="col table-responsive;" style="max-width: 100%; padding: 10px; background-color: white;">
                            <table id="tablaAsimilados2" class="table table-bordered table-hover">
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" id="btnCancelarEvaluacion">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<div class="row justify-content-center">
    <div class="col table-responsive" style="max-width: 80%; padding: 10px;">
        <table id="tablaAsimilados" class="table table-bordered table-hover">
        </table>
    </div>
</div>

<div class="modal fade modal-sm" id="modalEvaluacion" tabindex="-1" role="dialog" aria-labelledby="modalEvaluacion" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document" style="max-width: 95%; max-height: 100vh;">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body" style="background: radial-gradient(circle, #020024, #7c9d7d 40%, #020024 80%); color: #515155;">
                <div class="row justify-content-center mt-5 mx-auto w-90">

                    <div class="col-lg-10">
                        <div id="carouselEvaluacion" class="carousel slide">

                            <div class="carousel-indicators">
                                <button type="button" class="bg-dark active" data-bs-target="#carouselEvaluacion" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" class="bg-dark" id="botonSlide2" data-bs-target="#carouselEvaluacion" data-bs-slide-to="1" aria-label="Slide 2"></button>

                            </div>
                            <form class="carousel-inner border bg-light p-4" id="formularioEvaluadoAsimilados" name="formularioEvaluadoAsimilados" style="min-height: 50vh;">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h3>I. Datos del Evaluado</h3>
                                        </div>
                                    </div>

                                    <div class="row justify-content-around mb-4">
                                        <div class="col-lg-4">
                                            <label for="datevaluado_evaluado"><i class="bi bi-universal-access"></i>Catálogo</label>
                                            <input value="" id="datevaluado_evaluado" name="datevaluado_evaluado" class="form-control" type="number" placeholder="Número de catálogo" disabled>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="datevaluado_grado"><i class="bi bi-clipboard-data-fill"></i>Grado Militar</label>
                                            <input value="" id="gradoEvaluado" name="gradoEvaluado" class="form-control" type="Text" placeholder="Grado" disabled>
                                            <input value="" id="datevaluado_grado" name="datevaluado_grado" class="form-control" type="hidden">

                                        </div>
                                        <div class="col-lg-4">
                                            <label for="ste_cat"><i class="bi bi-clipboard-data-fill"></i>Nombres y Apellidos</label>
                                            <input value="" id="nombre" name="nombre" class="form-control" type="Text" placeholder="Nombres" disabled>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around mb-4">
                                        <div class="col-lg-4">
                                            <label for="datevaluado_dependencia"><i class="bi bi-calendar-date-fill"></i>Lugar de Alta</label>
                                            <input type="text" id="dependeciaEvaluado" name="dependenciaEvaluado" class="form-control" placeholder="Lugar de alta" disabled>
                                            <input value="" id="datevaluado_dependencia" name="datevaluado_dependencia" class="form-control" type="hidden">

                                        </div>
                                        <div class="col-lg-4">
                                            <label for="datevaluado_puesto"><i class="bi bi-calendar-date-fill"></i>Puesto que Ocupa</label>
                                            <input value="" id="puestoEvaluado" name="puestoEvaluado" class="form-control" type="text" placeholder="Puesto" disabled>
                                            <input value="" id="datevaluado_puesto" name="datevaluado_puesto" class="form-control" type="hidden">

                                        </div>
                                        <div class="col-lg-4">
                                            <label for="datevaluado_tiempo"><i class="bi bi-telephone-inbound-fill"></i>Tiempo en el Puesto </label>
                                            <input id="tiempoEvaluado" name="tiempoEvaluado" class="form-control" type="text" placeholder="Tiempo" disabled>
                                            <input id="datevaluado_tiempo" name="datevaluado_tiempo" class="form-control" type="hidden">
                                        </div>

                                    </div>


                                    <div class="row ">
                                        <div class="col-lg-8">
                                            <h3>II. Datos del Evaluador </h3>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around mb-4">
                                        <div class="col-lg-4">
                                            <label for="datevaluador_evaluador"><i class="bi bi-universal-access"></i>Catálogo</label>
                                            <input value="" id="datevaluador_evaluador" name="ste_cat" class="form-control" type="text" placeholder="Número de catálogo">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="ste_cat"><i class="bi bi-clipboard-data-fill"></i>Grado Militar</label>
                                            <input value="" id="gradoEvaluador" name="gradoEvaluador" class="form-control" type="Text" placeholder="Grado" disabled>
                                            <input value="" id="datevaluador_grado" name="datevaluador_grado" class="form-control" type="hidden">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="ste_cat"><i class="bi bi-clipboard-data-fill"></i>Nombres y Apellidos</label>
                                            <input value="" id="nombre_evaluador" name="nombre_evaluador" class="form-control" type="Text" placeholder="Nombres" disabled>
                                            <input value="" id="datevaluador_dependencia" name="datevaluador_dependencia" class="form-control" type="hidden">
                                        </div>

                                    </div>
                                    <div class="row justify-content-around mb-4">
                                        <div class="col-lg-4">
                                            <label for="datevaluador_puesto"><i class="bi bi-calendar-date-fill"></i>Puesto que Ocupa</label>
                                            <input type="text" value="" id="puestoEvaluador" name="puestoEvaluador" class="form-control" placeholder="Puesto que Ocupa" disabled>
                                            <input type="hidden" value="" id="datevaluador_puesto" name="datevaluador_puesto" class="form-control" disabled>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="datevaluador_tiempo"><i class="bi bi-calendar-date-fill"></i>Tiempo de Supervisar </label>
                                            <input type="hidden" value="" id="datevaluador_arma" name="datevaluador_arma" class="form-control" disabled>
                                            <input type="text" value="" id="tiempoEvaluador" name="tiempoEvaluador" class="form-control" placeholder="Tiempo" disabled>
                                            <input type="hidden" value="" id="datevaluador_tiempo" name="datevaluador_tiempo" class="form-control" placeholder="Tiempo" disabled>

                                        </div>
                                        <div class="col-lg-4">
                                            <label for="ste_telefono"><i class="bi bi-telephone-inbound-fill"></i>Periodo de la Evaluacion</label>
                                            <input id="asim_periodo" name="asim_periodo" class="form-control" placeholder="Periodo" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col flex-1">
                                            <h3>III. Factores de Salud y Conducta</h3>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around ">
                                        <div class="col-lg-12">
                                            <table class="table table-bordered">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th class="text-center">A. Perfil Biófisico</th>
                                                        <th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rango&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                        <th class="text-center" style="padding: 10px;">Puntos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="5" style="padding: 10px; text-align: justify;">
                                                            <p>1 El Oficial Médico de la brigada, comando, dependencia o servicio militar deberá realizar una evaluación antropométrica, para establecer el perfil biófisico del evaluado</p>
                                                            <p>2 El Oficial evaluador, de conformidad al resultado médico, deberá seleccionar la categoría en que se encuentre clasificado el evaluado.</p>
                                                        </td>
                                                        <td style="padding: 10px;">OBESIDAD II</td>
                                                        <td class="text-center"><input type="radio" class="checkBiofisico" id="obesidad1" value="1"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">OBESIDAD I</td>
                                                        <td class="text-center"><input type="radio" class="checkBiofisico" id="obesidad2" value="3"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">SOBREPESO</td>
                                                        <td class="text-center"><input type="radio" class="checkBiofisico" id="sobrepeso" value="5"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">DEFICIT</td>
                                                        <td class="text-center"><input type="radio" class="checkBiofisico" id="deficit" value="7"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">NORMAL</td>
                                                        <td class="text-center"><input type="radio" class="checkBiofisico" id="normal" value="10"></td>
                                                        <input type="hidden" id="asim_perfil" value="">
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around ">
                                        <div class="col-lg-12">
                                            <table class="table table-bordered">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th class="text-center">B. Condición física</th>
                                                        <th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rango&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                        <th class="text-center" style="padding: 10px;">Puntos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="6" style="padding: 10px; text-align: justify;">
                                                            <p>En el espacio siguiente anote el resultado de las últimas cuatro (4) pruebas de aptitud física (PAFE), y establezca el promedio de las mismas.
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                                            <p style="display:inline;">Evaluaciones: </p> <input type="number" style="display:inline; width:50px" class="promedio" id="cuadro1" value="">
                                                            <p style="display:inline;">+</p><input type="number" style="display:inline; width:50px" id="cuadro2" class="promedio" value="">
                                                            <p style="display:inline;">+</p> <input type="number" style="display:inline; width:50px" id="cuadro3" class="promedio" value="">
                                                            <p style="display:inline;">+</p> <input type="number" style="display:inline;width:50px" id="cuadro4" class="promedio" value="">
                                                            <p style="display:inline;">= promedio</p><input type="number" style="display:inline;width:50px" id="promedio" value="" disabled>.
                                                            <br>
                                                            <br>
                                                            <p>Luego, el evaluador debera seleccionar el rango donde se encuentre ubicado el promedio obtenido.</p>
                                                        </td>
                                                        <td style="padding: 10px;">De 0 a 59</td>
                                                        <td class="text-center"><input type="radio" value="0" id="promedio1" class="radioCondicionFisica" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">De 60 a 70</td>
                                                        <td class="text-center"><input type="radio" value="2" id="promedio2" class="radioCondicionFisica" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">De 71 a 80 </td>
                                                        <td class="text-center"><input type="radio" value="4" id="promedio3" class="radioCondicionFisica" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">De 81 a 90</td>
                                                        <td class="text-center"><input type="radio" value="6" id="promedio4" class="radioCondicionFisica" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">De 91 a 99</td>
                                                        <td class="text-center"><input type="radio" value="8" id="promedio5" class="radioCondicionFisica" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px; text-align: center;">100</td>
                                                        <td class="text-center"><input type="radio" value="10" id="promedio6" class="radioCondicionFisica" disabled></td>
                                                        <input type="hidden" id="asim_pafe" value="">
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around mb-0">
                                        <div class="col-lg-12">
                                            <table class="table table-bordered">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th class="text-center">C. Deméritos</th>
                                                        <th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rango&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                        <th class="text-center" style="padding: 10px;">Puntos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="7" style=" padding: 10px; text-align: justify; vertical-align: middle;">
                                                            <p>Verifique cuidadosamente en archivos físicos y magnéticos, La cantidad de deméritos acumulados por el Oficial Asimilado, durante el período de evaluación; luego seleccione el rango donde se encuentre la cantidad encontrada.</p>
                                                        </td>
                                                        <td style="padding: 10px; text-align: center;">0</td>
                                                        <td class="text-center"><input type="radio" id="d10" class="demeritos" value="10"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">De 1 a 14</td>
                                                        <td class="text-center"><input type="radio" id="d6" class="demeritos" value="6"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">De 15 a 29</td>
                                                        <td class="text-center"><input type="radio" id="d4" class="demeritos" value="4"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">De 30 a 44</td>
                                                        <td class="text-center"><input type="radio" id="d3" class="demeritos" value="3"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">De 45 a 59</td>
                                                        <td class="text-center"><input type="radio" id="d2" class="demeritos" value="2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">De 60 a 74</td>
                                                        <td class="text-center"><input type="radio" id="d1" class="demeritos" value="1"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">De 75 a 150</td>
                                                        <td class="text-center"><input type="radio" id="d0" class="demeritos" value="0"></td>
                                                        <input type="hidden" id="asim_demeritos" value="">
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around mb-0">
                                        <div class="col-lg-12">
                                            <table class="table table-bordered">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th class="text-center">D. Arrestos</th>
                                                        <th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rango&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                        <th class="text-center" style="padding: 10px;">Puntos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="5" style=" padding: 10px; text-align: justify; vertical-align: middle;">
                                                            <p>Verifique cuidadosamente en sus archivos físicos y magnéticos, la cantidad de arrestos impuestos al Oficial Asimilado durante el período de evaluación; luego, seleccione el rango donde se encuentra la cantidad encontrada.</p>
                                                        </td>
                                                        <td style="padding: 10px; text-align: center;">0</td>
                                                        <td class="text-center"><input type="radio" id="a10" class="arrestos" value="10"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">De 1 a 5</td>
                                                        <td class="text-center"><input type="radio" id="a6" class="arrestos" value="6"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">De 6 a 10</td>
                                                        <td class="text-center"><input type="radio" id="a3" class="arrestos" value="3"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">De 11 a 15</td>
                                                        <td class="text-center"><input type="radio" id="a2" class="arrestos" value="2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">De 16 a más</td>
                                                        <td class="text-center"><input type="radio" id="a0" class="arrestos" value="0"></td>
                                                        <input type="hidden" id="asim_arrestos" value="">
                                                    </tr>

                                                    <tr class="table-primary">
                                                        <td colspan="2"><b>Sumatoria:</b> sume los puntos que aparecen a la derecha de la categoría, rango y merito que seleccionó, para obtener el total del apartado.</td>
                                                        <td class="text-center" style="padding: 5px; width: 50px; vertical-align: middle;"><input type="number" class="text-center" style="background-color: transparent; border: none;  width:100%" id="asim_total_salud" value="" readonly></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col flex-1">
                                            <h3>IV. CONCEPTUALIZACIÓN </h3>
                                        </div>
                                    </div>

                                    <div class="row justify-content-around mb-0">
                                        <div class="col-lg-12">
                                            <table class="table table-bordered">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th colspan="2" rowspan="2" class="text-justify; table-light">
                                                            <p>Instrucciones: a continuación encontrará diez aspectos relacionados con el desempeño laboral del evaluado; léalos detenidamente y selececcione en la escala de la derecha. </p>
                                                        </th>
                                                        <th class="text-center">Insatisfactorio</th>
                                                        <th colspan="3" class="text-center" style="padding: 10px;">Intermedio</th>
                                                        <th class="text-center" style="padding: 10px;">Óptimo</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-dark; text-center">1</td>
                                                        <td class="table-dark; text-center">2</td>
                                                        <td class="table-dark; text-center">4</td>
                                                        <td class="table-dark; text-center">5</td>
                                                        <td class="table-dark; text-center">6</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td class="text-center"><input type="text" style="border: none;  width:100%" value="" id="pregunta1" disabled>
                                                            <input type="hidden" style="border: none;  width:100%" value="1" data-id="1" class="notasim_pregunta">
                                                        </td>
                                                        <td class="text-center"><input name="preg1.1" type="radio" value="1" class="pregunta1" id="1">
                                                        </td>
                                                        <td class="text-center"><input name="preg1.2" type="radio" value="2" class="pregunta1" id="1">
                                                        </td>
                                                        <td class="text-center"><input name="preg1.4" type="radio" value="4" class="pregunta1" id="1">
                                                        </td>
                                                        <td class="text-center"><input name="preg1.5" type="radio" value="5" class="pregunta1" id="1">
                                                        </td>
                                                        <td class="text-center"><input name="preg1.6" type="radio" value="6" class="pregunta1" id="1">
                                                            <input type="hidden" name="1" value="" id="nota1" class="nota_cantidad">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td class="text-center"><input type="text" style="border: none;  width:100%" value="" id="pregunta2" disabled>
                                                            <input type="hidden" style="border: none;  width:100%" value="2" data-id="2" class="notasim_pregunta">
                                                        </td>
                                                        <td class="text-center"><input name="preg2.1" type="radio" value="1" class="pregunta2" id="2">
                                                        </td>
                                                        <td class="text-center"><input name="preg2.2" type="radio" value="2" class="pregunta2" id="2">
                                                        </td>
                                                        <td class="text-center"><input name="preg2.4" type="radio" value="4" class="pregunta2" id="2">
                                                        </td>
                                                        <td class="text-center"><input name="preg2.5" type="radio" value="5" class="pregunta2" id="2">
                                                        </td>
                                                        <td class="text-center"><input name="preg2.6" type="radio" value="6" class="pregunta2" id="2">
                                                            <input type="hidden" name="2" value="" id="nota2" class="nota_cantidad">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td class="text-center"><input type="text" style="border: none;  width:100%" value="" id="pregunta3" disabled>
                                                            <input type="hidden" style="border: none;  width:100%" value="3" data-id="3" class="notasim_pregunta">
                                                        </td>
                                                        <td class="text-center"><input name="preg3.1" type="radio" value="1" class="pregunta3" id="3">
                                                        </td>
                                                        <td class="text-center"><input name="preg3.2" type="radio" value="2" class="pregunta3" id="3">
                                                        </td>
                                                        <td class="text-center"><input name="preg3.4" type="radio" value="4" class="pregunta3" id="3">
                                                        </td>
                                                        <td class="text-center"><input name="preg3.5" type="radio" value="5" class="pregunta3" id="3">
                                                        </td>
                                                        <td class="text-center"><input name="preg3.6" type="radio" value="6" class="pregunta3" id="3">
                                                            <input type="hidden" name="3" value="" id="nota3" class="nota_cantidad">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td class="text-center"><input type="text" style="border: none;  width:100%; font-size: 15px;" value="" id="pregunta4" disabled>
                                                            <input type="hidden" style="border: none;  width:100%" value="4" data-id="4" class="notasim_pregunta">
                                                        </td>
                                                        <td class="text-center"><input name="preg4.1" type="radio" value="1" class="pregunta4" id="4">
                                                        </td>
                                                        <td class="text-center"><input name="preg4.2" type="radio" value="2" class="pregunta4" id="4">
                                                        </td>
                                                        <td class="text-center"><input name="preg4.4" type="radio" value="4" class="pregunta4" id="4">
                                                        </td>
                                                        <td class="text-center"><input name="preg4.5" type="radio" value="5" class="pregunta4" id="4">
                                                        </td>
                                                        <td class="text-center"><input name="preg4.6" type="radio" value="6" class="pregunta4" id="4">
                                                            <input type="hidden" name="4" value="" id="nota4" class="nota_cantidad">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td class="text-center"><input type="text" style="border: none;  width:100%" value="" id="pregunta5" disabled>
                                                            <input type="hidden" style="border: none;  width:100%" value="5" data-id="5" class="notasim_pregunta">
                                                        </td>
                                                        <td class="text-center"><input name="preg5.1" type="radio" value="1" class="pregunta5" id="5">
                                                        </td>
                                                        <td class="text-center"><input name="preg5.2" type="radio" value="2" class="pregunta5" id="5">
                                                        </td>
                                                        <td class="text-center"><input name="preg5.4" type="radio" value="4" class="pregunta5" id="5">
                                                        </td>
                                                        <td class="text-center"><input name="preg5.5" type="radio" value="5" class="pregunta5" id="5">
                                                        </td>
                                                        <td class="text-center"><input name="preg5.6" type="radio" value="6" class="pregunta5" id="5">
                                                            <input type="hidden" name="5" value="" id="nota5" class="nota_cantidad">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td class="text-center"><input type="text" style="border: none;  width:100%" value="" id="pregunta6" disabled>
                                                            <input type="hidden" style="border: none;  width:100%" value="6" data-id="6" class="notasim_pregunta">
                                                        </td>
                                                        <td class="text-center"><input name="preg6.1" type="radio" value="1" class="pregunta6" id="6">
                                                        </td>
                                                        <td class="text-center"><input name="preg6.2" type="radio" value="2" class="pregunta6" id="6">
                                                        </td>
                                                        <td class="text-center"><input name="preg6.4" type="radio" value="4" class="pregunta6" id="6">
                                                        </td>
                                                        <td class="text-center"><input name="preg6.5" type="radio" value="5" class="pregunta6" id="6">
                                                        </td>
                                                        <td class="text-center"><input name="preg6.6" type="radio" value="6" class="pregunta6" id="6">
                                                            <input type="hidden" name="6" value="" id="nota6" class="nota_cantidad">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td class="text-center"><input type="text" style="border: none;  width:100%" value="" id="pregunta7" disabled>
                                                            <input type="hidden" style="border: none;  width:100%" value="7" data-id="7" class="notasim_pregunta">
                                                        </td>
                                                        <td class="text-center"><input name="preg7.1" type="radio" value="1" class="pregunta7" id="7">
                                                        </td>
                                                        <td class="text-center"><input name="preg7.2" type="radio" value="2" class="pregunta7" id="7">
                                                        </td>
                                                        <td class="text-center"><input name="preg7.4" type="radio" value="4" class="pregunta7" id="7">
                                                        </td>
                                                        <td class="text-center"><input name="preg7.5" type="radio" value="5" class="pregunta7" id="7">
                                                        </td>
                                                        <td class="text-center"><input name="preg7.6" type="radio" value="6" class="pregunta7" id="7">
                                                            <input type="hidden" name="7" value="" id="nota7" class="nota_cantidad">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td class="text-center"><input type="text" style="border: none;  width:100%" value="" id="pregunta8" disabled>
                                                            <input type="hidden" style="border: none;  width:100%" value="8" data-id="8" class="notasim_pregunta">
                                                        </td>
                                                        <td class="text-center"><input name="preg8.1" type="radio" value="1" class="pregunta8" id="8">
                                                        </td>
                                                        <td class="text-center"><input name="preg8.2" type="radio" value="2" class="pregunta8" id="8">
                                                        </td>
                                                        <td class="text-center"><input name="preg8.4" type="radio" value="4" class="pregunta8" id="8">
                                                        </td>
                                                        <td class="text-center"><input name="preg8.5" type="radio" value="5" class="pregunta8" id="8">
                                                        </td>
                                                        <td class="text-center"><input name="preg8.6" type="radio" value="6" class="pregunta8" id="8">
                                                            <input type="hidden" name="8" value="" id="nota8" class="nota_cantidad">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td class="text-center"><input type="text" style="border: none;  width:100%" value="" id="pregunta9" disabled>
                                                            <input type="hidden" style="border: none;  width:100%" value="9" data-id="9" class="notasim_pregunta">
                                                        </td>
                                                        <td class="text-center"><input name="preg9.1" type="radio" value="1" class="pregunta9" id="9">
                                                        </td>
                                                        <td class="text-center"><input name="preg9.2" type="radio" value="2" class="pregunta9" id="9">
                                                        </td>
                                                        <td class="text-center"><input name="preg9.4" type="radio" value="4" class="pregunta9" id="9">
                                                        </td>
                                                        <td class="text-center"><input name="preg9.5" type="radio" value="5" class="pregunta9" id="9">
                                                        </td>
                                                        <td class="text-center"><input name="preg9.6" type="radio" value="6" class="pregunta9" id="9">
                                                            <input type="hidden" name="9" value="" id="nota9" class="nota_cantidad">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td class="text-center"><input type="text" style="border: none;  width:100%" value="" id="pregunta10" disabled>
                                                            <input type="hidden" style="border: none;  width:100%" value="10" data-id="10" class="notasim_pregunta">
                                                        </td>
                                                        <td class="text-center"><input name="preg10.1" type="radio" value="1" class="pregunta10" id="10">
                                                        </td>
                                                        <td class="text-center"><input name="preg10.2" type="radio" value="2" class="pregunta10" id="10">
                                                        </td>
                                                        <td class="text-center"><input name="preg10.4" type="radio" value="4" class="pregunta10" id="10">
                                                        </td>
                                                        <td class="text-center"><input name="preg10.5" type="radio" value="5" class="pregunta10" id="10">
                                                        </td>
                                                        <td class="text-center"><input name="preg10.6" type="radio" value="6" class="pregunta10" id="10">
                                                            <input type="hidden" name="10" value="" id="nota10" class="nota_cantidad">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" colspan="2" rowspan="2">SUBTOTAL
                                                            <br class="text-center">TOTAL
                                                        </td>
                                                        <td><input type="number" class="text-center" style="border: none;  width:100%" id="subtotal1" value="" readonly> </td>
                                                        <td><input type="number" class="text-center" style="border: none;  width:100%" id="subtotal2" value="" readonly></td>
                                                        <td><input type="number" class="text-center" style="border: none;  width:100%" id="subtotal4" value="" readonly></td>
                                                        <td><input type="number" class="text-center" style="border: none;  width:100%" id="subtotal5" value="" readonly></td>
                                                        <td><input type="number" class="text-center" style="border: none;  width:100%" id="subtotal6" value="" readonly> </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5"><input type="number" class="text-center" style="border: none;  width:100%" id="asim_total_concep" value="" readonly></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around mb-0">
                                        <div class="col flex-1">
                                            <h3>V. CATEGORIA </h3>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around mb-0">
                                        <div class="col-lg-12">
                                            <table class="table table">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="4">Instrucciones: sume el resultado de los factores de salud y conducta con el de conceptualización para obtener el punteo total; luego, relacione el punteo total con los rangos de ponderación para obtener la categoría en que se clasificó el evaluado y subrayela.</td>
                                                    </tr>

                                                    <tr>
                                                        <br>

                                                        <td align="center"><b>SUMATORIA DE APARTADOS III Y IV.</b></td>
                                                        <td><b>RANGOS</b></td>
                                                        <td></td>
                                                        <td><b>CATEGORIAS</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">
                                                            <table>
                                                                <tr>
                                                                    <td>Punteo Salud y Conducta :</td>
                                                                    <td><input class="form-control" type="text" name="subtotalGeneral1" id="subtotalGeneral1" value="0" style="width:100px;font-weight:bold;text-align:center;font-size:18px;" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td> Punteo Conceptualización:</td>
                                                                    <td><input class="form-control" type="text" name="subtotalGeneral2" id="subtotalGeneral2" value="0" style="width:100px;font-weight:bold;text-align:center;font-size:18px;" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="right">Total :</td>
                                                                    <td> <input class="form-control" type="text" name="asim_total" id="asim_total" value="" style="width:100px;border-color:#F70C14;background-color:#F7B79E;font-weight:bold;text-align:center;font-size:18px;" readonly></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td>1. 96-100 Ptos.<br>
                                                            2. 85-95 Ptos.<br>
                                                            3. 75-84 Ptos.<br>
                                                            4. 60-74 Ptos.<br>
                                                            5. 40-59 Ptos.</td>
                                                        <td class="text-center">
                                                            <img src="<?= asset('./images/flecha.png') ?>" width="100px"><br>
                                                            <img src="<?= asset('./images/flecha.png') ?>" width="100px"><br>
                                                            <img src="<?= asset('./images/flecha.png') ?>" width="100px"><br>
                                                            <img src="<?= asset('./images/flecha.png') ?>" width="100px"><br>
                                                            <img src="<?= asset('./images/flecha.png') ?>" width="100px">
                                                        </td>

                                                        <td>
                                                            <span id="Excelente" data-value="Excelente">Excelente</span>
                                                            <br>
                                                            <span id="MuyBueno" data-value="MuyBueno">Muy Bueno</span>
                                                            <br>
                                                            <span id="Bueno" data-value="Bueno">Bueno</span>
                                                            <br>
                                                            <span id="Regular" data-value="Regular">Regular</span>
                                                            <br>
                                                            <span id="Insatisfactorio" data-value="Insatisfactorio">Insatisfactorio</span>
                                                            <input type="hidden" value="" id="asim_resultado">
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col flex-1">
                                            <h3>VI. OBSERVACIONES </h3>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around mb-0">
                                        <div class="col-lg-12">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <textarea class="form-control" name="" id="asim_obs" rows="7" style="width: 100%;"></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col flex-1">
                                            <h3>VII. VALIDACIÓN </h3>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around mb-0">
                                        <div class="col-lg-12">
                                            <table class="table">
                                                <tbody>

                                                    <tr>
                                                        <td class="text-center">___________________
                                                            <br>Firma del evaluador
                                                        </td>
                                                        <td class="text-center">___________________
                                                            <br>
                                                            Firma del evaluado
                                                            <br>

                                                            <br>
                                                            <br>_____________________
                                                            <br> Firma del Comandante
                                                            <br>
                                                            <input class="form-control" type="number" style="display:inline;width:100px" id="asim_cat_comte" value="">
                                                        </td>
                                                        <td class="text-center">___________________
                                                            <br> Firma Oficial de Personal
                                                            <br>
                                                            <input type="number" style="display:inline;width:100px" class="form-control" id="asim_cat_g1" value="">
                                                            <br>
                                                            <br>
                                                            <br>Sello
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row justify-content-end mt-12 mb-4" id="botonesModificarElevar">
                                        <div class="col-lg-2">
                                            <button type="button" id="btnGuardar" name="btnGuardar" class="btn btn-outline-primary w-100 overflow-visible text-wrap">Guardar</button>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="button" id="btnElevar" name="btnElevar" class="btn btn-outline-success w-100 overflow-visible text-wrap">Elevar/Imprimir</button>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="button" id="btnModificar" name="btnModificar" class="btn btn-outline-warning w-100 overflow-visible text-wrap">Modificar</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>



            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" id="btnCancelarEvaluacion2">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<script src="<?= asset('./build/js/evaluados/index.js') ?>"></script>