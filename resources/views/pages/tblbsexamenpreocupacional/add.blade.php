<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = "Agregar nuevo"; //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="add" data-page-url="{{ url()->full() }}">
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
                        <div class="h5 font-weight-bold text-primary">Agregar nuevo</div>
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
                        <form id="tblbsexamenpreocupacional-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblbsexamenpreocupacional.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_id">Exp Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_id-holder" class=" ">
                                                <input id="ctrl-exp_id" data-field="exp_id"  value="<?php echo get_value('exp_id') ?>" type="number" placeholder="Escribir Exp Id" step="any"  required="" name="exp_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_per_id">Exp Per Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_per_id-holder" class=" ">
                                                <input id="ctrl-exp_per_id" data-field="exp_per_id"  value="<?php echo get_value('exp_per_id') ?>" type="number" placeholder="Escribir Exp Per Id" step="any"  name="exp_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_fecha_elab">Exp Fecha Elab </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_fecha_elab-holder" class="input-group ">
                                                <input id="ctrl-exp_fecha_elab" data-field="exp_fecha_elab" class="form-control datepicker  datepicker" value="<?php echo get_value('exp_fecha_elab') ?>" type="datetime"  name="exp_fecha_elab" placeholder="Escribir Exp Fecha Elab" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_carts_puesto">Exp Carts Puesto </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_carts_puesto-holder" class=" ">
                                                <textarea placeholder="Escribir Exp Carts Puesto" id="ctrl-exp_carts_puesto" data-field="exp_carts_puesto"  rows="5" name="exp_carts_puesto" class=" form-control"><?php echo get_value('exp_carts_puesto') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_fecha_examen">Exp Fecha Examen </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_fecha_examen-holder" class="input-group ">
                                                <input id="ctrl-exp_fecha_examen" data-field="exp_fecha_examen" class="form-control datepicker  datepicker" value="<?php echo get_value('exp_fecha_examen') ?>" type="datetime"  name="exp_fecha_examen" placeholder="Escribir Exp Fecha Examen" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_estado">Exp Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_estado-holder" class=" ">
                                                <input id="ctrl-exp_estado" data-field="exp_estado"  value="<?php echo get_value('exp_estado') ?>" type="text" placeholder="Escribir Exp Estado"  name="exp_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_diagnostico">Exp Diagnostico </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_diagnostico-holder" class=" ">
                                                <textarea placeholder="Escribir Exp Diagnostico" id="ctrl-exp_diagnostico" data-field="exp_diagnostico"  rows="5" name="exp_diagnostico" class=" form-control"><?php echo get_value('exp_diagnostico') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_comentario">Exp Comentario </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_comentario-holder" class=" ">
                                                <textarea placeholder="Escribir Exp Comentario" id="ctrl-exp_comentario" data-field="exp_comentario"  rows="5" name="exp_comentario" class=" form-control"><?php echo get_value('exp_comentario') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_recomendaciones">Exp Recomendaciones </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_recomendaciones-holder" class=" ">
                                                <textarea placeholder="Escribir Exp Recomendaciones" id="ctrl-exp_recomendaciones" data-field="exp_recomendaciones"  rows="5" name="exp_recomendaciones" class=" form-control"><?php echo get_value('exp_recomendaciones') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_fecha_recep_funcionario">Exp Fecha Recep Funcionario </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_fecha_recep_funcionario-holder" class="input-group ">
                                                <input id="ctrl-exp_fecha_recep_funcionario" data-field="exp_fecha_recep_funcionario" class="form-control datepicker  datepicker" value="<?php echo get_value('exp_fecha_recep_funcionario') ?>" type="datetime"  name="exp_fecha_recep_funcionario" placeholder="Escribir Exp Fecha Recep Funcionario" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_n_historia_clinica">Exp N Historia Clinica </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_n_historia_clinica-holder" class=" ">
                                                <input id="ctrl-exp_n_historia_clinica" data-field="exp_n_historia_clinica"  value="<?php echo get_value('exp_n_historia_clinica') ?>" type="number" placeholder="Escribir Exp N Historia Clinica" step="any"  name="exp_n_historia_clinica"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_medico">Exp Medico </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_medico-holder" class=" ">
                                                <input id="ctrl-exp_medico" data-field="exp_medico"  value="<?php echo get_value('exp_medico') ?>" type="text" placeholder="Escribir Exp Medico"  name="exp_medico"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_n_autorizacion">Exp N Autorizacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_n_autorizacion-holder" class=" ">
                                                <input id="ctrl-exp_n_autorizacion" data-field="exp_n_autorizacion"  value="<?php echo get_value('exp_n_autorizacion') ?>" type="number" placeholder="Escribir Exp N Autorizacion" step="any"  name="exp_n_autorizacion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_convenio">Exp Convenio </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_convenio-holder" class=" ">
                                                <input id="ctrl-exp_convenio" data-field="exp_convenio"  value="<?php echo get_value('exp_convenio') ?>" type="text" placeholder="Escribir Exp Convenio"  name="exp_convenio"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_fecha_prog">Exp Fecha Prog </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_fecha_prog-holder" class="input-group ">
                                                <input id="ctrl-exp_fecha_prog" data-field="exp_fecha_prog" class="form-control datepicker  datepicker" value="<?php echo get_value('exp_fecha_prog') ?>" type="datetime"  name="exp_fecha_prog" placeholder="Escribir Exp Fecha Prog" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_tel_of_fun">Exp Tel Of Fun </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_tel_of_fun-holder" class=" ">
                                                <input id="ctrl-exp_tel_of_fun" data-field="exp_tel_of_fun"  value="<?php echo get_value('exp_tel_of_fun') ?>" type="text" placeholder="Escribir Exp Tel Of Fun"  name="exp_tel_of_fun"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_tel_dom_fun">Exp Tel Dom Fun </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_tel_dom_fun-holder" class=" ">
                                                <input id="ctrl-exp_tel_dom_fun" data-field="exp_tel_dom_fun"  value="<?php echo get_value('exp_tel_dom_fun') ?>" type="text" placeholder="Escribir Exp Tel Dom Fun"  name="exp_tel_dom_fun"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_obsaut">Exp Obsaut </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_obsaut-holder" class=" ">
                                                <input id="ctrl-exp_obsaut" data-field="exp_obsaut"  value="<?php echo get_value('exp_obsaut') ?>" type="text" placeholder="Escribir Exp Obsaut"  name="exp_obsaut"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_importe">Exp Importe </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_importe-holder" class=" ">
                                                <input id="ctrl-exp_importe" data-field="exp_importe"  value="<?php echo get_value('exp_importe') ?>" type="number" placeholder="Escribir Exp Importe" step="0.1"  name="exp_importe"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_tipo_sangre">Exp Tipo Sangre </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_tipo_sangre-holder" class=" ">
                                                <input id="ctrl-exp_tipo_sangre" data-field="exp_tipo_sangre"  value="<?php echo get_value('exp_tipo_sangre') ?>" type="text" placeholder="Escribir Exp Tipo Sangre"  name="exp_tipo_sangre"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_correlativo_gestion_n_autorizacion">Exp Correlativo Gestion N Autorizacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_correlativo_gestion_n_autorizacion-holder" class=" ">
                                                <input id="ctrl-exp_correlativo_gestion_n_autorizacion" data-field="exp_correlativo_gestion_n_autorizacion"  value="<?php echo get_value('exp_correlativo_gestion_n_autorizacion') ?>" type="number" placeholder="Escribir Exp Correlativo Gestion N Autorizacion" step="any"  name="exp_correlativo_gestion_n_autorizacion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_correlativo_fecha_registro_n_autorizacion">Exp Correlativo Fecha Registro N Autorizacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_correlativo_fecha_registro_n_autorizacion-holder" class="input-group ">
                                                <input id="ctrl-exp_correlativo_fecha_registro_n_autorizacion" data-field="exp_correlativo_fecha_registro_n_autorizacion" class="form-control datepicker  datepicker" value="<?php echo get_value('exp_correlativo_fecha_registro_n_autorizacion') ?>" type="datetime"  name="exp_correlativo_fecha_registro_n_autorizacion" placeholder="Escribir Exp Correlativo Fecha Registro N Autorizacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="exp_as_id">Exp As Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-exp_as_id-holder" class=" ">
                                                <input id="ctrl-exp_as_id" data-field="exp_as_id"  value="<?php echo get_value('exp_as_id') ?>" type="number" placeholder="Escribir Exp As Id" step="any"  name="exp_as_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-ajax-status"></div>
                            <!--[form-button-start]-->
                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                <button class="btn btn-primary" type="submit">
                                Entregar
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
    
$(document).ready(function(){
	// custom javascript | jquery codes
});

</script>
@endsection
