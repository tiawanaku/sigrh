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
                        <form id="tblplasuplencia-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblplasuplencia.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_id">Plasup Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_id-holder" class=" ">
                                                <input id="ctrl-plasup_id" data-field="plasup_id"  value="<?php echo get_value('plasup_id') ?>" type="number" placeholder="Escribir Plasup Id" step="any"  required="" name="plasup_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_correlativo">Plasup Correlativo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_correlativo-holder" class=" ">
                                                <input id="ctrl-plasup_correlativo" data-field="plasup_correlativo"  value="<?php echo get_value('plasup_correlativo') ?>" type="text" placeholder="Escribir Plasup Correlativo"  name="plasup_correlativo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_fecha_emision">Plasup Fecha Emision </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_fecha_emision-holder" class="input-group ">
                                                <input id="ctrl-plasup_fecha_emision" data-field="plasup_fecha_emision" class="form-control datepicker  datepicker" value="<?php echo get_value('plasup_fecha_emision') ?>" type="datetime"  name="plasup_fecha_emision" placeholder="Escribir Plasup Fecha Emision" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_iniciales">Plasup Iniciales </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_iniciales-holder" class=" ">
                                                <input id="ctrl-plasup_iniciales" data-field="plasup_iniciales"  value="<?php echo get_value('plasup_iniciales') ?>" type="text" placeholder="Escribir Plasup Iniciales"  name="plasup_iniciales"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_fecha_recep_contrato">Plasup Fecha Recep Contrato </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_fecha_recep_contrato-holder" class="input-group ">
                                                <input id="ctrl-plasup_fecha_recep_contrato" data-field="plasup_fecha_recep_contrato" class="form-control datepicker  datepicker" value="<?php echo get_value('plasup_fecha_recep_contrato') ?>" type="datetime"  name="plasup_fecha_recep_contrato" placeholder="Escribir Plasup Fecha Recep Contrato" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_id_asig">Plasup Id Asig </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_id_asig-holder" class=" ">
                                                <input id="ctrl-plasup_id_asig" data-field="plasup_id_asig"  value="<?php echo get_value('plasup_id_asig') ?>" type="number" placeholder="Escribir Plasup Id Asig" step="any"  name="plasup_id_asig"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_valor_rciva">Plasup Valor Rciva </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_valor_rciva-holder" class=" ">
                                                <input id="ctrl-plasup_valor_rciva" data-field="plasup_valor_rciva"  value="<?php echo get_value('plasup_valor_rciva') ?>" type="number" placeholder="Escribir Plasup Valor Rciva" step="0.1"  name="plasup_valor_rciva"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_fecha_recep_valor_rciva">Plasup Fecha Recep Valor Rciva </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_fecha_recep_valor_rciva-holder" class="input-group ">
                                                <input id="ctrl-plasup_fecha_recep_valor_rciva" data-field="plasup_fecha_recep_valor_rciva" class="form-control datepicker  datepicker" value="<?php echo get_value('plasup_fecha_recep_valor_rciva') ?>" type="datetime"  name="plasup_fecha_recep_valor_rciva" placeholder="Escribir Plasup Fecha Recep Valor Rciva" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_fecha_inicio_baja_medica">Plasup Fecha Inicio Baja Medica </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_fecha_inicio_baja_medica-holder" class="input-group ">
                                                <input id="ctrl-plasup_fecha_inicio_baja_medica" data-field="plasup_fecha_inicio_baja_medica" class="form-control datepicker  datepicker" value="<?php echo get_value('plasup_fecha_inicio_baja_medica') ?>" type="datetime"  name="plasup_fecha_inicio_baja_medica" placeholder="Escribir Plasup Fecha Inicio Baja Medica" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_fecha_fin_baja_medica">Plasup Fecha Fin Baja Medica </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_fecha_fin_baja_medica-holder" class="input-group ">
                                                <input id="ctrl-plasup_fecha_fin_baja_medica" data-field="plasup_fecha_fin_baja_medica" class="form-control datepicker  datepicker" value="<?php echo get_value('plasup_fecha_fin_baja_medica') ?>" type="datetime"  name="plasup_fecha_fin_baja_medica" placeholder="Escribir Plasup Fecha Fin Baja Medica" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_tipo_baja_medica">Plasup Tipo Baja Medica </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_tipo_baja_medica-holder" class=" ">
                                                <input id="ctrl-plasup_tipo_baja_medica" data-field="plasup_tipo_baja_medica"  value="<?php echo get_value('plasup_tipo_baja_medica') ?>" type="text" placeholder="Escribir Plasup Tipo Baja Medica"  name="plasup_tipo_baja_medica"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_salario_minimo">Plasup Salario Minimo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_salario_minimo-holder" class=" ">
                                                <input id="ctrl-plasup_salario_minimo" data-field="plasup_salario_minimo"  value="<?php echo get_value('plasup_salario_minimo') ?>" type="number" placeholder="Escribir Plasup Salario Minimo" step="0.1"  name="plasup_salario_minimo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_novedad">Plasup Novedad </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_novedad-holder" class=" ">
                                                <input id="ctrl-plasup_novedad" data-field="plasup_novedad"  value="<?php echo get_value('plasup_novedad') ?>" type="text" placeholder="Escribir Plasup Novedad"  name="plasup_novedad"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_per_id_suplantado">Plasup Per Id Suplantado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_per_id_suplantado-holder" class=" ">
                                                <input id="ctrl-plasup_per_id_suplantado" data-field="plasup_per_id_suplantado"  value="<?php echo get_value('plasup_per_id_suplantado') ?>" type="number" placeholder="Escribir Plasup Per Id Suplantado" step="any"  name="plasup_per_id_suplantado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_correlativo_interno">Plasup Correlativo Interno </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_correlativo_interno-holder" class=" ">
                                                <input id="ctrl-plasup_correlativo_interno" data-field="plasup_correlativo_interno"  value="<?php echo get_value('plasup_correlativo_interno') ?>" type="number" placeholder="Escribir Plasup Correlativo Interno" step="any"  name="plasup_correlativo_interno"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_gestion_correlativo_interno">Plasup Gestion Correlativo Interno </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_gestion_correlativo_interno-holder" class=" ">
                                                <input id="ctrl-plasup_gestion_correlativo_interno" data-field="plasup_gestion_correlativo_interno"  value="<?php echo get_value('plasup_gestion_correlativo_interno') ?>" type="number" placeholder="Escribir Plasup Gestion Correlativo Interno" step="any"  name="plasup_gestion_correlativo_interno"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_afp">Plasup Afp </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_afp-holder" class=" ">
                                                <input id="ctrl-plasup_afp" data-field="plasup_afp"  value="<?php echo get_value('plasup_afp') ?>" type="text" placeholder="Escribir Plasup Afp"  name="plasup_afp"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_tipo_aportante">Plasup Tipo Aportante </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_tipo_aportante-holder" class=" ">
                                                <input id="ctrl-plasup_tipo_aportante" data-field="plasup_tipo_aportante"  value="<?php echo get_value('plasup_tipo_aportante') ?>" type="number" placeholder="Escribir Plasup Tipo Aportante" step="any"  name="plasup_tipo_aportante"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasup_egs">Plasup Egs </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasup_egs-holder" class=" ">
                                                <input id="ctrl-plasup_egs" data-field="plasup_egs"  value="<?php echo get_value('plasup_egs') ?>" type="text" placeholder="Escribir Plasup Egs"  name="plasup_egs"  class="form-control " />
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
