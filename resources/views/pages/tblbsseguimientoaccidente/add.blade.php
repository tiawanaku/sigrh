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
                        <form id="tblbsseguimientoaccidente-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblbsseguimientoaccidente.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_id">Sa Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_id-holder" class=" ">
                                                <input id="ctrl-sa_id" data-field="sa_id"  value="<?php echo get_value('sa_id') ?>" type="number" placeholder="Escribir Sa Id" step="any"  required="" name="sa_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_denacc_id">Sa Denacc Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_denacc_id-holder" class=" ">
                                                <input id="ctrl-sa_denacc_id" data-field="sa_denacc_id"  value="<?php echo get_value('sa_denacc_id') ?>" type="number" placeholder="Escribir Sa Denacc Id" step="any"  name="sa_denacc_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_seguimiento">Sa Seguimiento </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_seguimiento-holder" class=" ">
                                                <textarea placeholder="Escribir Sa Seguimiento" id="ctrl-sa_seguimiento" data-field="sa_seguimiento"  rows="5" name="sa_seguimiento" class=" form-control"><?php echo get_value('sa_seguimiento') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_observacionesgravedad">Sa Observacionesgravedad </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_observacionesgravedad-holder" class=" ">
                                                <input id="ctrl-sa_observacionesgravedad" data-field="sa_observacionesgravedad"  value="<?php echo get_value('sa_observacionesgravedad') ?>" type="text" placeholder="Escribir Sa Observacionesgravedad"  name="sa_observacionesgravedad"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_total_dias_baja_medica">Sa Total Dias Baja Medica </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_total_dias_baja_medica-holder" class=" ">
                                                <input id="ctrl-sa_total_dias_baja_medica" data-field="sa_total_dias_baja_medica"  value="<?php echo get_value('sa_total_dias_baja_medica') ?>" type="number" placeholder="Escribir Sa Total Dias Baja Medica" step="any"  name="sa_total_dias_baja_medica"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_estado">Sa Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_estado-holder" class=" ">
                                                <input id="ctrl-sa_estado" data-field="sa_estado"  value="<?php echo get_value('sa_estado') ?>" type="text" placeholder="Escribir Sa Estado"  name="sa_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_fecha_segaccidente">Sa Fecha Segaccidente </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_fecha_segaccidente-holder" class="input-group ">
                                                <input id="ctrl-sa_fecha_segaccidente" data-field="sa_fecha_segaccidente" class="form-control datepicker  datepicker" value="<?php echo get_value('sa_fecha_segaccidente') ?>" type="datetime"  name="sa_fecha_segaccidente" placeholder="Escribir Sa Fecha Segaccidente" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_marcar_accidente">Sa Marcar Accidente </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_marcar_accidente-holder" class=" ">
                                                <input id="ctrl-sa_marcar_accidente" data-field="sa_marcar_accidente"  value="<?php echo get_value('sa_marcar_accidente') ?>" type="text" placeholder="Escribir Sa Marcar Accidente"  name="sa_marcar_accidente"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_clasif_it">Sa Clasif It </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_clasif_it-holder" class=" ">
                                                <input id="ctrl-sa_clasif_it" data-field="sa_clasif_it"  value="<?php echo get_value('sa_clasif_it') ?>" type="text" placeholder="Escribir Sa Clasif It"  name="sa_clasif_it"  class="form-control " />
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
