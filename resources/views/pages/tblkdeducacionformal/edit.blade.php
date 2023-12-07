<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = "Editar"; //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="edit" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3" >
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto  back-btn-col" >
                    <a class="back-btn btn " href="{{ url()->previous() }}" >
                        <i class="material-icons">arrow_back</i>                                
                    </a>
                </div>
                <div class="col  " >
                    <div class="">
                        <div class="h5 font-weight-bold text-primary">Editar</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div  class="" >
        <div class="container">
            <div class="row ">
                <div class="col-md-9 comp-grid " >
                    <div  class="card card-1 border rounded page-content" >
                        <!--[form-start]-->
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblkdeducacionformal/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ef_per_id">Ef Per Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ef_per_id-holder" class=" ">
                                            <input id="ctrl-ef_per_id" data-field="ef_per_id"  value="<?php  echo $data['ef_per_id']; ?>" type="number" placeholder="Escribir Ef Per Id" step="any"  name="ef_per_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ef_nivel_instruccion">Ef Nivel Instruccion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ef_nivel_instruccion-holder" class=" ">
                                            <input id="ctrl-ef_nivel_instruccion" data-field="ef_nivel_instruccion"  value="<?php  echo $data['ef_nivel_instruccion']; ?>" type="number" placeholder="Escribir Ef Nivel Instruccion" step="any"  name="ef_nivel_instruccion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ef_centro_form">Ef Centro Form </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ef_centro_form-holder" class=" ">
                                            <input id="ctrl-ef_centro_form" data-field="ef_centro_form"  value="<?php  echo $data['ef_centro_form']; ?>" type="text" placeholder="Escribir Ef Centro Form"  name="ef_centro_form"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ef_carrera_especialidad">Ef Carrera Especialidad </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ef_carrera_especialidad-holder" class=" ">
                                            <input id="ctrl-ef_carrera_especialidad" data-field="ef_carrera_especialidad"  value="<?php  echo $data['ef_carrera_especialidad']; ?>" type="number" placeholder="Escribir Ef Carrera Especialidad" step="any"  name="ef_carrera_especialidad"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ef_fecha_ini">Ef Fecha Ini </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ef_fecha_ini-holder" class="input-group ">
                                            <input id="ctrl-ef_fecha_ini" data-field="ef_fecha_ini" class="form-control datepicker  datepicker" value="<?php  echo $data['ef_fecha_ini']; ?>" type="datetime"  name="ef_fecha_ini" placeholder="Escribir Ef Fecha Ini" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ef_fecha_fin">Ef Fecha Fin </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ef_fecha_fin-holder" class="input-group ">
                                            <input id="ctrl-ef_fecha_fin" data-field="ef_fecha_fin" class="form-control datepicker  datepicker" value="<?php  echo $data['ef_fecha_fin']; ?>" type="datetime"  name="ef_fecha_fin" placeholder="Escribir Ef Fecha Fin" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ef_anios_estudio">Ef Anios Estudio </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ef_anios_estudio-holder" class=" ">
                                            <input id="ctrl-ef_anios_estudio" data-field="ef_anios_estudio"  value="<?php  echo $data['ef_anios_estudio']; ?>" type="number" placeholder="Escribir Ef Anios Estudio" step="any"  name="ef_anios_estudio"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ef_titulo_obtenido">Ef Titulo Obtenido </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ef_titulo_obtenido-holder" class=" ">
                                            <input id="ctrl-ef_titulo_obtenido" data-field="ef_titulo_obtenido"  value="<?php  echo $data['ef_titulo_obtenido']; ?>" type="number" placeholder="Escribir Ef Titulo Obtenido" step="any"  name="ef_titulo_obtenido"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ef_fecha_titulo_obtenido">Ef Fecha Titulo Obtenido </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ef_fecha_titulo_obtenido-holder" class="input-group ">
                                            <input id="ctrl-ef_fecha_titulo_obtenido" data-field="ef_fecha_titulo_obtenido" class="form-control datepicker  datepicker" value="<?php  echo $data['ef_fecha_titulo_obtenido']; ?>" type="datetime"  name="ef_fecha_titulo_obtenido" placeholder="Escribir Ef Fecha Titulo Obtenido" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ef_nro_titulo">Ef Nro Titulo </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ef_nro_titulo-holder" class=" ">
                                            <input id="ctrl-ef_nro_titulo" data-field="ef_nro_titulo"  value="<?php  echo $data['ef_nro_titulo']; ?>" type="text" placeholder="Escribir Ef Nro Titulo"  name="ef_nro_titulo"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ef_estado">Ef Estado </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ef_estado-holder" class=" ">
                                            <input id="ctrl-ef_estado" data-field="ef_estado"  value="<?php  echo $data['ef_estado']; ?>" type="text" placeholder="Escribir Ef Estado"  name="ef_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-ajax-status"></div>
                        <!--[form-content-end]-->
                        <!--[form-button-start]-->
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">
                            Actualizar
                            <i class="material-icons">send</i>
                            </button>
                        </div>
                        <!--[form-button-end]-->
                    </form>
                    <!--[form-end]-->
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
<!-- Page custom css -->
@section('pagecss')
<style>

</style>
@endsection
<!-- Page custom js -->
@section('pagejs')
<script>
    <!--pageautofill-->
$(document).ready(function(){
	// custom javascript | jquery codes
});

</script>
@endsection
