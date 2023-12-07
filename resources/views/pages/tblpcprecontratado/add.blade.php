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
                        <form id="tblpcprecontratado-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblpcprecontratado.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pre_per_id">Pre Per Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pre_per_id-holder" class=" ">
                                                <input id="ctrl-pre_per_id" data-field="pre_per_id"  value="<?php echo get_value('pre_per_id') ?>" type="number" placeholder="Escribir Pre Per Id" step="any"  name="pre_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pre_fecha_inicio">Pre Fecha Inicio </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pre_fecha_inicio-holder" class="input-group ">
                                                <input id="ctrl-pre_fecha_inicio" data-field="pre_fecha_inicio" class="form-control datepicker  datepicker"  value="<?php echo get_value('pre_fecha_inicio') ?>" type="datetime" name="pre_fecha_inicio" placeholder="Escribir Pre Fecha Inicio" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pre_fecha_fin">Pre Fecha Fin </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pre_fecha_fin-holder" class="input-group ">
                                                <input id="ctrl-pre_fecha_fin" data-field="pre_fecha_fin" class="form-control datepicker  datepicker"  value="<?php echo get_value('pre_fecha_fin') ?>" type="datetime" name="pre_fecha_fin" placeholder="Escribir Pre Fecha Fin" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pre_tiempo">Pre Tiempo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pre_tiempo-holder" class=" ">
                                                <input id="ctrl-pre_tiempo" data-field="pre_tiempo"  value="<?php echo get_value('pre_tiempo') ?>" type="number" placeholder="Escribir Pre Tiempo" step="0.1"  name="pre_tiempo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pre_pl_id">Pre Pl Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pre_pl_id-holder" class=" ">
                                                <input id="ctrl-pre_pl_id" data-field="pre_pl_id"  value="<?php echo get_value('pre_pl_id') ?>" type="number" placeholder="Escribir Pre Pl Id" step="any"  name="pre_pl_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pre_fr_id">Pre Fr Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pre_fr_id-holder" class=" ">
                                                <input id="ctrl-pre_fr_id" data-field="pre_fr_id"  value="<?php echo get_value('pre_fr_id') ?>" type="number" placeholder="Escribir Pre Fr Id" step="any"  name="pre_fr_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pre_p_id">Pre P Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pre_p_id-holder" class=" ">
                                                <input id="ctrl-pre_p_id" data-field="pre_p_id"  value="<?php echo get_value('pre_p_id') ?>" type="number" placeholder="Escribir Pre P Id" step="any"  name="pre_p_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pre_presenta_djbr">Pre Presenta Djbr </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pre_presenta_djbr-holder" class=" ">
                                                <input id="ctrl-pre_presenta_djbr" data-field="pre_presenta_djbr"  value="<?php echo get_value('pre_presenta_djbr') ?>" type="text" placeholder="Escribir Pre Presenta Djbr"  name="pre_presenta_djbr"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pre_afp">Pre Afp </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pre_afp-holder" class=" ">
                                                <input id="ctrl-pre_afp" data-field="pre_afp"  value="<?php echo get_value('pre_afp') ?>" type="text" placeholder="Escribir Pre Afp"  name="pre_afp"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pre_obj_puesto">Pre Obj Puesto </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pre_obj_puesto-holder" class=" ">
                                                <textarea placeholder="Escribir Pre Obj Puesto" id="ctrl-pre_obj_puesto" data-field="pre_obj_puesto"  rows="5" name="pre_obj_puesto" class=" form-control"><?php echo get_value('pre_obj_puesto') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pre_tareas">Pre Tareas </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pre_tareas-holder" class=" ">
                                                <textarea placeholder="Escribir Pre Tareas" id="ctrl-pre_tareas" data-field="pre_tareas"  rows="5" name="pre_tareas" class=" form-control"><?php echo get_value('pre_tareas') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pre_numero_item">Pre Numero Item </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pre_numero_item-holder" class=" ">
                                                <input id="ctrl-pre_numero_item" data-field="pre_numero_item"  value="<?php echo get_value('pre_numero_item') ?>" type="number" placeholder="Escribir Pre Numero Item" step="any"  name="pre_numero_item"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pre_estado">Pre Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pre_estado-holder" class=" ">
                                                <input id="ctrl-pre_estado" data-field="pre_estado"  value="<?php echo get_value('pre_estado') ?>" type="text" placeholder="Escribir Pre Estado"  name="pre_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pre_fecha_sipasse">Pre Fecha Sipasse </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pre_fecha_sipasse-holder" class="input-group ">
                                                <input id="ctrl-pre_fecha_sipasse" data-field="pre_fecha_sipasse" class="form-control datepicker  datepicker"  value="<?php echo get_value('pre_fecha_sipasse') ?>" type="datetime" name="pre_fecha_sipasse" placeholder="Escribir Pre Fecha Sipasse" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pre_fecha_djbr">Pre Fecha Djbr </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pre_fecha_djbr-holder" class="input-group ">
                                                <input id="ctrl-pre_fecha_djbr" data-field="pre_fecha_djbr" class="form-control datepicker  datepicker"  value="<?php echo get_value('pre_fecha_djbr') ?>" type="datetime" name="pre_fecha_djbr" placeholder="Escribir Pre Fecha Djbr" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
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
