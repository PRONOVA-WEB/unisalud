@extends('layouts.app')

@section('content')

    <div class="container-fluid bg-dark text-white p-3">
        <h6>Datos del paciente</h6>
        <div class="row">
            <div class="col col">
                Alexander Díaz
            </div>
            <div class="col col">
                Peso RUN
            </div>
            <div class="col col">
                27005646-6
            </div>
        </div>
        <div class="row">
            <div class="col">
                Hombre
            </div>
            <div class="col">
                37A 4M 7D 03/01/1965 BMI Área de Superficie Coroporal (ASC)
            </div>
            <div class="col col">
                0 + Positivo T*ax/T°rect; FC:67; PAS:120; PAD:86; FR:; Sat(%):99<br>
                69 Días de estadía
            </div>
        </div>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="perfil-clinico-tab" data-toggle="tab" href="#perfil-clinico" role="tab" aria-controls="perfil-clinico" aria-selected="true">
            Perfil Clínico
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="en-construccion-tab" data-toggle="tab" href="#en-construccion" role="tab" aria-controls="en-construccion" aria-selected="false">
            Medicamentos
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="en-construccion-tab" data-toggle="tab" href="#en-construccion" role="tab" aria-controls="en-construccion" aria-selected="false">
            Conciliación Medicammentos
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="en-construccion-tab" data-toggle="tab" href="#en-construccion" role="tab" aria-controls="en-construccion" aria-selected="false">
            Laboratorio
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="en-construccion-tab" data-toggle="tab" href="#en-construccion" role="tab" aria-controls="en-construccion" aria-selected="false">
            Imageneología
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="en-construccion-tab" data-toggle="tab" href="#en-construccion" role="tab" aria-controls="en-construccion" aria-selected="false">
            Anatomía Patológica
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="en-construccion-tab" data-toggle="tab" href="#en-construccion" role="tab" aria-controls="en-construccion" aria-selected="false">
            Transfusión
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="en-construccion-tab" data-toggle="tab" href="#en-construccion" role="tab" aria-controls="en-construccion" aria-selected="false">
            Procedimientos
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="en-construccion-tab" data-toggle="tab" href="#en-construccion" role="tab" aria-controls="en-construccion" aria-selected="false">
            Cuidados de Enfermería
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="en-construccion-tab" data-toggle="tab" href="#en-construccion" role="tab" aria-controls="en-construccion" aria-selected="false">
            Nutrición Ind.
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="en-construccion-tab" data-toggle="tab" href="#en-construccion" role="tab" aria-controls="en-construccion" aria-selected="false">
            Evaluación de Especialista
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="en-construccion-tab" data-toggle="tab" href="#en-construccion" role="tab" aria-controls="en-construccion" aria-selected="false">
        Odontología
        </a>
    </li>
    </ul>

    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="perfil-clinico" role="tabpanel" aria-labelledby="perfil-clinico-tab">

        <br>
        <!-- <h4>Perfil clínico</h4> -->

        <div class="form-row">
            <div class="form-group col-md-4 col-6">
                <label>Fecha desde</label>
                <input type="date" class="form-control" value="2022-05-06">
            </div>
            <div class="form-group col-md-3 col-6">
                <label>Fecha hasta</label>
                <input type="date" class="form-control" value="2022-05-08">
            </div>
            <div class="form-group col-md-3 col-6">
                <label>Intervalo</label>
                <select class="form-control" >
                    <option>2hrs</option>
                    <option selected>4hrs</option>
                    <option>8hrs</option>
                    <option>12hrs</option>
                    <option>24hrs</option>
                </select>
            </div>
            <div class="form-group col-md-2 col-6">
                <label>&nbsp;</label>
                <button type="submit" class="form-control btn btn-primary" id="button">
                    <i class="fas fa-search"></i> Actualizar
                </button>
            </div>
        </div>

        <!-- <h3 class="mb-3">Preferencias</h3>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>CI</th>
                    <th>Tipo</th>
                    <th>N°</th>
                    <th>Fecha</th>
                    <th>Antec</th>
                </tr>
            </thead>
            <tbody>
                <tr class="small">
                    <td></td>
                    <td class="small"></td>
                    <td class="small"></td>
                    <td nowrap>
                        <a href="#" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-file fa-lg"></i></a>
                    </td>
                    <td nowrap>
                        <a href="#" class="btn btn-sm btn-outline-danger" target="_blank">
                            <i class="fas fa-file-pdf fa-lg"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table> -->

        <hr>

        <!-- <div class="container-fluid">
            <div class="row">
                <div class="col col-4">
                    Seleccionar todas las indicaciones <input type="checkbox">
                </div>
            </div>
        </div> -->

        <div class="container-fluid">
            <div class="row">
                <div class="col col-8">
                        Seleccionar todas las indicaciones <input type="checkbox">
                </div>
                <div class="col col-4 text-right">
                    <a href="#">
                        <i class="fas fa-arrow-circle-left fa-2x"></i>
                    </a>
                    <a href="#">
                        <i class="fas fa-arrow-circle-right fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>

        <div id="listing">
        <table class="table table-sm table-striped table-bordered table-responsive">
            <thead >
                <tr>
                    <th scope="col"></th>
                    <th scope="col" colspan="6" class="text-center"><b>06/05/2022</b></th>
                    <th scope="col" colspan="6" class="text-center"><b>07/05/2022</b></th>
                    <th scope="col" colspan="6" class="text-center"><b>08/05/2022</b></th>
                </tr>
                <tr>
                    <th scope="col"></th>

                    <!-- 06/05/2022 -->
                    <th scope="col" class="text-center">00:00</th>
                    <th scope="col" class="text-center">04:00</th>
                    <th scope="col" class="text-center">08:00</th>
                    <th scope="col" class="text-center">12:00</th>
                    <th scope="col" class="text-center">
                        <a href="#" data-toggle="modal" data-target="#exampleModal">16:00</a>
                    </th>
                    <th scope="col" class="text-center">20:00</th>

                    <!-- 07/05/2022 -->
                    <th scope="col" class="text-center"><a href="#">00:00</a></th>
                    <th scope="col" class="text-center">04:00</th>
                    <th scope="col" class="text-center"><a href="#">08:00</a></th>
                    <th scope="col" class="text-center"><a href="#">12:00</a></th>
                    <th scope="col" class="text-center"><a href="#">16:00</a></th>
                    <th scope="col" class="text-center"><a href="#">20:00</a></th>

                    <!-- 08/05/2022 -->
                    <th scope="col" class="text-center"><a href="#">00:00</a></th>
                    <th scope="col" class="text-center"><a href="#">04:00</a></th>
                    <th scope="col" class="text-center">08:00</th>
                    <th scope="col" class="text-center">12:00</th>
                    <th scope="col" class="text-center">16:00</th>
                    <th scope="col" class="text-center">20:00</th>
                </tr>
            </thead>
            <tbody>

                <!-- cuidados de enfermería -->
                <tr>
                    <td class="col-md-3"><a href="#" class="toggle" data-target="details-1">Cuidados de enfermería</a></td>

                    <!-- 06/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 07/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 08/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="details">
                    <td class="details-1">
                        <input type="checkbox"> Aseo de cavidad bucal,
                        <p class="text-info">TRES VECES, 1 DÍA.</p>
                    </td>

                    <!-- 06/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 07/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        15:00
                        <p class="text-danger">Orden Terminada</p>
                    </td>
                    <td></td>
                    <td>
                        23:00
                        <p class="text-danger">Orden Terminada</p>
                    </td>
                    <!-- 08/05/2022 -->
                    <td></td>
                    <td>
                        07:00
                        <p class="text-danger">Orden Terminada</p>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="details">
                    <td class="details-1">
                        <input type="checkbox"> Cambio de posición c/6 HRS,
                        <p class="text-info">TRES VECES, 1 DÍA.</p>
                        <i class="fas fa-exclamation-triangle" style="color:black"></i> Estimular</p>
                    </td> <!--style="display: none" -->

                    <!-- 06/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 07/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        13:00
                        <p class="text-danger">Orden Terminada</p>
                    </td>
                    <td>
                        19:00
                        <p class="text-danger">Orden Terminada</p>
                    </td>
                    <td></td>

                    <!-- 08/05/2022 -->
                    <td>
                        01:00
                        <p class="text-danger">Orden Terminada</p>
                    </td>
                    <td>
                        07:00
                        <p class="text-danger">Orden Terminada</p>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <!-- examenes de laboratorio -->
                <tr>
                    <td><a href="#" class="toggle" data-target="details-2">Exámenes de laboratorio</a></td>

                    <!-- 06/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 07/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 08/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="details">
                    <td class="details-2">
                        <input type="checkbox"> Hemograma
                        <p class="text-info">
                            TRES VECES, 1 DÍA.(incluye recuento de leucocitos y eritocitos, hemoglobina, hematrocrito, formula leucotitaria, caracteristicas de los elementos figurados y velocidad de eritrosedimentación)
                        </p>
                        <i class="fas fa-exclamation-triangle" style="color:black"></i> Tubo tapa lisa</p>
                    </td>

                    <!-- 06/05/2022 -->
                    <td></td>
                    <td></td>
                    <td>L01753616</td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 07/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 08/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <!-- farmacos -->
                <tr>
                    <td><a href="#" class="toggle" data-target="details-3">Farmacos</a></td>

                    <!-- 06/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 07/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 08/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="details">
                    <td class="details-3">
                        <input type="checkbox"> Paracetamol
                        <p class="text-info">
                        PARACETAMOL 500MG CM/CM REC 500 MG Comprimido - <a>Dosis Variable</a> - Oral, cada 8 Hora(s), por 1 Día(s).
                        </p>
                        <i class="fas fa-newspaper" style="color:black"></i>
                        <i class="fas fa-pills" style="color:black"></i>
                        <i class="fas fa-calculator" style="color:black"></i>
                    </td>

                    <!-- 06/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <p class="text-info">
                        Administrador/Ejecutado
                        </p>
                        <a href="#" data-toggle="modal" data-target="#exampleModal2">1 COMPRIMIDO</a><br>
                        16:00
                    </td>
                    <td></td>

                    <!-- 07/05/2022 -->
                    <td>
                        COMPRIMIDO<br>
                        02:00<br>
                        <p class="text-danger">ORDEN TERMINADA<p>
                    </td>
                    <td></td>
                    <td>
                        <p class="text-info">
                        Administrador/Ejecutado
                        </p>
                        1 COMPRIMIDO<br>
                        09:18
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 08/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <!-- imageneología -->
                <tr>
                    <td><a href="#" class="toggle" data-target="details-4">Imageneología</a></td>

                    <!-- 06/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 07/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 08/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="details">
                    <td class="details-4">
                        <input type="checkbox"> TAC Abdomen (40 cortes 8-10 Mm).
                        <i class="fas fa-newspaper" style="color:black"></i>
                    </td>

                    <!-- 06/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 07/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 08/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <!-- signos vitales -->
                <tr>
                    <td><a href="#" class="toggle" data-target="details-5">Signos vitales</a><br>
                        <i class="fas fa-plus" style="color:black"></i> Nuevo <br>
                        <i class="fas fa-chart-line" style="color:black"></i> Signos vitales estándar
                    </td>

                    <!-- 06/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 07/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 08/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- <tr class="details">
                    <td class="details-5">
                        <i class="fas fa-plus" style="color:black"></i> Nuevo <br>
                        <i class="fas fa-chart-line" style="color:black"></i> Signos vitales estándar
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr> -->
                <tr class="details">
                    <td class="details-5">
                        <input type="checkbox"> Frecuencia cardiaca Ipm
                    </td>

                    <!-- 06/05/2022 -->
                    <td>80</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 07/05/2022 -->
                    <td>67</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 08/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="details">
                    <td class="details-5">
                        <input type="checkbox"> Presion Arterial Sistólica mmHg
                    </td>

                    <!-- 06/05/2022 -->
                    <td>120</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 07/05/2022 -->
                    <td>120</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 08/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="details">
                    <td class="details-5">
                        <input type="checkbox"> Presión Arterial Diastólica mmHg
                    </td>

                    <!-- 06/05/2022 -->
                    <td>120</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 07/05/2022 -->
                    <td>86</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 08/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="details">
                    <td class="details-5">
                        <input type="checkbox"> Presión Arterial Media
                    </td>

                    <!-- 06/05/2022 -->
                    <td>83.3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 07/05/2022 -->
                    <td>97.3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 08/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="details">
                    <td class="details-5">
                        <input type="checkbox"> Saturación O2 %
                    </td>

                    <!-- 06/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 07/05/2022 -->
                    <td>99</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <!-- 08/05/2022 -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </tbody>
        </table>
        </div>



    </div>
    <div class="tab-pane fade" id="en-construccion" role="tabpanel" aria-labelledby="en-construccion-tab">En construcción...</div>
    </div>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detalles de la ejecución</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <!-- body -->

            <table class="table table-sm table-striped">
            <thead>
                <tr>
                    <th>Sel.</th>
                    <th>F. Planificación Ejecución</th>
                    <th>H. Planificación Ejecución</th>
                    <th>Ítem de Orden</th>
                    <th>Vía de Administración</th>
                    <th>Cantidad para Administrar</th>
                    <th>Unidad Dosis</th>
                    <th>Notas de Orden</th>
                    <th>Prioridad</th>
                    <th>Razón de SOS</th>
                    <th>Detalle de medicamento</th>
                </tr>
            </thead>
            <tbody>
                <tr class="small">
                    <td><input type="checkbox" checked></td>
                    <td><input type="date" value="10/05/2022"></td>
                    <td><input type="time" value="12:13"></td>
                    <td>Cambio de posición c/6 hrs</td>
                    <td></td>
                    <td><input type="text" value="1"></td>
                    <td></td>
                    <td>ESTIMULAR</td>
                    <td>Normal</td>
                    <td><input type="text"></td>
                    <td></td>
                </tr>
                <tr class="small">
                    <td><input type="checkbox" checked></td>
                    <td><input type="date" value="10/05/2022"></td>
                    <td><input type="time" value="12:13"></td>
                    <td>Aseo de cavidad bucal</td>
                    <td></td>
                    <td><input type="text" value="1"></td>
                    <td></td>
                    <td></td>
                    <td>Normal</td>
                    <td><input type="text"></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <div class="container-fluid">
            <div class="row">
                <div class="col col-4">
                    <b>Estado de la administración</b>
                </div>
                <div class="col col">
                    <input type="text" value="Estado/Administrado">
                </div>
            </div>
            <div class="row">
                <div class="col col-4">
                <b>Ejecutado por</b>
                </div>
                <div class="col col">
                    <input type="text" value="Estado/Administrado">
                </div>
            </div>
            <div class="row">
                <div class="col col-4">
                    Comentarios
                </div>
                <div class="col col">
                    <textarea name="" id="" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col col-4">
                <b>Usuario</b>
                </div>
                <div class="col col">
                    <input type="text">
                </div>
            </div>
            <div class="row">
                <div class="col col-4">
                Contraseña
                </div>
                <div class="col col">
                    <input type="text">
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary" data-dismiss="modal">Actualizar</button>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
        </div>
    </div>
    </div>

    <div class="modal fade bd-example-modal-xl" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
                <b>paracetamol - PARACETAMOL 500 MG CM/CM REC - 500 MG comprimido [1]</b> <br>
                Dosis 1 COMPRIMIDO - Oral - 06/05/2022 @ 18:00
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <!-- body -->


            <div class="alert alert-success" role="alert">
                <h6>Detalles de administración</h6>
            </div>

            <h6><b>Previous dose:</b> Adminsitrado/Ejecutado, 1 COMPRIMIDO 06/05/2022 16:00, Felipe Basualto Araya, 120 Minuto(s) early</h6>

            <div class="container-fluid">
                <div class="row">
                    <div class="col col-3">
                        Prioridad
                    </div>
                    <div class="col col-3">
                        Normal
                    </div>
                    <div class="col col-3">
                        Fecha planificada
                    </div>
                    <div class="col col-3">
                        07/05/2022 02:00
                    </div>
                </div>

                <div class="row">
                    <div class="col col-3">
                        Fecha y Hora de administración
                    </div>
                    <div class="col col-3">
                        <input type="text" value="10/05/2022">
                    </div>
                    <div class="col col-3">
                        <b>Administrado por:</b>
                    </div>
                    <div class="col col-3">
                        <input type="text">
                    </div>
                </div>

                <div class="row">
                    <div class="col col-3">
                        Hora de administración
                    </div>
                    <div class="col col-3">
                        <input type="time" value="12:14">
                    </div>
                    <div class="col col-3">
                        <b>Estado de la administ.</b>
                    </div>
                    <div class="col col-3">
                        <input type="text" value="Administrado/Ejecutado">
                    </div>
                </div>

                <div class="row">
                    <div class="col col-3">
                    Cantidad administrada
                    </div>
                    <div class="col col-3">
                        <input type="text" value="2" style="width:50%" disabled>
                        <input type="text" value="COMPRIMIDO" style="width:50%" disabled>
                    </div>
                    <div class="col col-3">

                    </div>
                    <div class="col col-3">

                    </div>
                </div>

                <div class="row">
                    <div class="col col-3">
                        Sitio del cuerpo
                    </div>
                    <div class="col col-3">
                        <input type="text">
                    </div>
                    <div class="col col-3">
                    N°de Lote
                    </div>
                    <div class="col col-3">
                        <input type="text" disabled>
                    </div>
                </div>

                <hr>

            </div>

            <div class="alert alert-success" role="alert">
                <h6>Detalles de usuario ejecutante</h6>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col col-3">
                        Segunda Firma usuario
                    </div>
                    <div class="col col-3">
                        <input type="text">
                    </div>
                    <div class="col col-3">
                        Registrado por
                    </div>
                    <div class="col col-3">
                        <input type="text" value="12345678-9">
                    </div>
                </div>

                <div class="row">
                    <div class="col col-3">
                        Segunda Firma PIN
                    </div>
                    <div class="col col-3">
                        <input type="text">
                    </div>
                    <div class="col col-3">
                        Contraseña
                    </div>
                    <div class="col col-3">
                        <input type="text">
                    </div>
                </div>
            </div>

            <div class="alert alert-success" role="alert">
                <h6>Notas</h6>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col col-3">
                        Notas de la Orden
                    </div>
                    <div class="col col-3">
                        Nota de Procedimiento
                    </div>
                    <div class="col col-3">
                        Indicación
                    </div>
                    <div class="col col-3">
                        Indicación SOS
                    </div>
                </div>

                <div class="row">
                    <div class="col col-3">
                        <textarea name="" id="" rows="10" style="background-color:orange;min-width: 100%"></textarea>
                    </div>
                    <div class="col col-3">
                        <textarea name="" id="" rows="10" style="background-color:blue;min-width: 100%"></textarea>
                    </div>
                    <div class="col col-3">
                        <textarea name="" id="" rows="10" style="background-color:red;min-width: 100%"></textarea>
                    </div>
                    <div class="col col-3">
                        <textarea name="" id="" rows="10" style="background-color:yellow;min-width: 100%"></textarea>
                    </div>
                </div>

            </div>


            <button type="button" class="btn btn-primary" data-dismiss="modal">Actualizar</button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>

@endsection

@section('custom_js')

<script type="text/javascript">
    $(function()
    {
        $('.toggle').on('click', function()
    {
        var target = $(this).data('target');
        $('.'+target).toggle();
    });
    });
</script>

@endsection
