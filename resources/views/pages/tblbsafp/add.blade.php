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
                        <form id="tblbsafp-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblbsafp.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="afp_per_id">Afp Per Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-afp_per_id-holder" class=" ">
                                                <select required=""  id="ctrl-afp_per_id" data-field="afp_per_id" name="afp_per_id"  placeholder="Seleccione un valor"    class="form-select" >
                                                <option value="">Seleccione un valor</option>
                                                <?php 
                                                    $options = $comp_model->afp_per_id_option_list() ?? [];
                                                    foreach($options as $option){
                                                    $value = $option->value;
                                                    $label = $option->label ?? $value;
                                                    $selected = Html::get_field_selected('afp_per_id', $value, "");
                                                ?>
                                                <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                                <?php echo $label; ?>
                                                </option>
                                                <?php
                                                    }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="afp_previsora">Afp Previsora <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-afp_previsora-holder" class=" ">
                                                <input id="ctrl-afp_previsora" data-field="afp_previsora"  value="<?php echo get_value('afp_previsora') ?>" type="text" placeholder="Escribir Afp Previsora"  required="" name="afp_previsora"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="afp_nua">Afp Nua </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-afp_nua-holder" class=" ">
                                                <input id="ctrl-afp_nua" data-field="afp_nua"  value="<?php echo get_value('afp_nua') ?>" type="text" placeholder="Escribir Afp Nua"  name="afp_nua"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="afp_fecha_filiacion">Afp Fecha Filiacion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-afp_fecha_filiacion-holder" class="input-group ">
                                                <input id="ctrl-afp_fecha_filiacion" data-field="afp_fecha_filiacion" class="form-control datepicker  datepicker" required="" value="<?php echo get_value('afp_fecha_filiacion') ?>" type="datetime"  name="afp_fecha_filiacion" placeholder="Escribir Afp Fecha Filiacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="afp_fecha_modificacion">Afp Fecha Modificacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-afp_fecha_modificacion-holder" class="input-group ">
                                                <input id="ctrl-afp_fecha_modificacion" data-field="afp_fecha_modificacion" class="form-control datepicker  datepicker" value="<?php echo get_value('afp_fecha_modificacion') ?>" type="datetime"  name="afp_fecha_modificacion" placeholder="Escribir Afp Fecha Modificacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="afp_motivo_modificacion">Afp Motivo Modificacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-afp_motivo_modificacion-holder" class=" ">
                                                <input id="ctrl-afp_motivo_modificacion" data-field="afp_motivo_modificacion"  value="<?php echo get_value('afp_motivo_modificacion') ?>" type="text" placeholder="Escribir Afp Motivo Modificacion"  name="afp_motivo_modificacion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="afp_fecha_registro">Afp Fecha Registro </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-afp_fecha_registro-holder" class="input-group ">
                                                <input id="ctrl-afp_fecha_registro" data-field="afp_fecha_registro" class="form-control datepicker  datepicker" value="<?php echo get_value('afp_fecha_registro') ?>" type="datetime"  name="afp_fecha_registro" placeholder="Escribir Afp Fecha Registro" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="afp_estado_carnet">Afp Estado Carnet </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-afp_estado_carnet-holder" class=" ">
                                                <input id="ctrl-afp_estado_carnet" data-field="afp_estado_carnet"  value="<?php echo get_value('afp_estado_carnet') ?>" type="text" placeholder="Escribir Afp Estado Carnet"  name="afp_estado_carnet"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="afp_fecha_carnet">Afp Fecha Carnet </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-afp_fecha_carnet-holder" class="input-group ">
                                                <input id="ctrl-afp_fecha_carnet" data-field="afp_fecha_carnet" class="form-control datepicker  datepicker" value="<?php echo get_value('afp_fecha_carnet') ?>" type="datetime"  name="afp_fecha_carnet" placeholder="Escribir Afp Fecha Carnet" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="afp_usuario">Afp Usuario <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-afp_usuario-holder" class=" ">
                                                <input id="ctrl-afp_usuario" data-field="afp_usuario"  value="<?php echo get_value('afp_usuario') ?>" type="number" placeholder="Escribir Afp Usuario" step="any"  required="" name="afp_usuario"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="afp_estado">Afp Estado <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-afp_estado-holder" class=" ">
                                                <input id="ctrl-afp_estado" data-field="afp_estado"  value="<?php echo get_value('afp_estado') ?>" type="text" placeholder="Escribir Afp Estado"  required="" name="afp_estado"  class="form-control " />
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
