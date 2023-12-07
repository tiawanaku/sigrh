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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblpcfrecuencias/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="fr_es_id">Fr Es Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-fr_es_id-holder" class=" ">
                                            <input id="ctrl-fr_es_id" data-field="fr_es_id"  value="<?php  echo $data['fr_es_id']; ?>" type="number" placeholder="Escribir Fr Es Id" step="any"  required="" name="fr_es_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="fr_tiempo">Fr Tiempo <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-fr_tiempo-holder" class=" ">
                                            <input id="ctrl-fr_tiempo" data-field="fr_tiempo"  value="<?php  echo $data['fr_tiempo']; ?>" type="number" placeholder="Escribir Fr Tiempo" step="0.1"  required="" name="fr_tiempo"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="fr_cp_id">Fr Cp Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-fr_cp_id-holder" class=" ">
                                            <input id="ctrl-fr_cp_id" data-field="fr_cp_id"  value="<?php  echo $data['fr_cp_id']; ?>" type="number" placeholder="Escribir Fr Cp Id" step="any"  required="" name="fr_cp_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="fr_pu_descripcion">Fr Pu Descripcion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-fr_pu_descripcion-holder" class=" ">
                                            <input id="ctrl-fr_pu_descripcion" data-field="fr_pu_descripcion"  value="<?php  echo $data['fr_pu_descripcion']; ?>" type="text" placeholder="Escribir Fr Pu Descripcion"  name="fr_pu_descripcion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="fr_estado">Fr Estado <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-fr_estado-holder" class=" ">
                                            <input id="ctrl-fr_estado" data-field="fr_estado"  value="<?php  echo $data['fr_estado']; ?>" type="text" placeholder="Escribir Fr Estado"  required="" name="fr_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="fr_observaciones">Fr Observaciones </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-fr_observaciones-holder" class=" ">
                                            <input id="ctrl-fr_observaciones" data-field="fr_observaciones"  value="<?php  echo $data['fr_observaciones']; ?>" type="text" placeholder="Escribir Fr Observaciones"  name="fr_observaciones"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="fr_cod_poa">Fr Cod Poa </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-fr_cod_poa-holder" class=" ">
                                            <input id="ctrl-fr_cod_poa" data-field="fr_cod_poa"  value="<?php  echo $data['fr_cod_poa']; ?>" type="number" placeholder="Escribir Fr Cod Poa" step="any"  name="fr_cod_poa"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="fr_fecha_inicio">Fr Fecha Inicio </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-fr_fecha_inicio-holder" class="input-group ">
                                            <input id="ctrl-fr_fecha_inicio" data-field="fr_fecha_inicio" class="form-control datepicker  datepicker"  value="<?php  echo $data['fr_fecha_inicio']; ?>" type="datetime" name="fr_fecha_inicio" placeholder="Escribir Fr Fecha Inicio" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="fr_fecha_fin">Fr Fecha Fin </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-fr_fecha_fin-holder" class="input-group ">
                                            <input id="ctrl-fr_fecha_fin" data-field="fr_fecha_fin" class="form-control datepicker  datepicker"  value="<?php  echo $data['fr_fecha_fin']; ?>" type="datetime" name="fr_fecha_fin" placeholder="Escribir Fr Fecha Fin" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="fr_id_anterior">Fr Id Anterior </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-fr_id_anterior-holder" class=" ">
                                            <input id="ctrl-fr_id_anterior" data-field="fr_id_anterior"  value="<?php  echo $data['fr_id_anterior']; ?>" type="number" placeholder="Escribir Fr Id Anterior" step="any"  name="fr_id_anterior"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="fr_tiempo_original">Fr Tiempo Original </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-fr_tiempo_original-holder" class=" ">
                                            <input id="ctrl-fr_tiempo_original" data-field="fr_tiempo_original"  value="<?php  echo $data['fr_tiempo_original']; ?>" type="number" placeholder="Escribir Fr Tiempo Original" step="0.1"  name="fr_tiempo_original"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="fr_tipo_jornada">Fr Tipo Jornada <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-fr_tipo_jornada-holder" class=" ">
                                            <input id="ctrl-fr_tipo_jornada" data-field="fr_tipo_jornada"  value="<?php  echo $data['fr_tipo_jornada']; ?>" type="text" placeholder="Escribir Fr Tipo Jornada"  required="" name="fr_tipo_jornada"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="fr_obj_puesto">Fr Obj Puesto </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-fr_obj_puesto-holder" class=" ">
                                            <textarea placeholder="Escribir Fr Obj Puesto" id="ctrl-fr_obj_puesto" data-field="fr_obj_puesto"  rows="5" name="fr_obj_puesto" class=" form-control"><?php  echo $data['fr_obj_puesto']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
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
