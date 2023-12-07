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
                        <form id="tblsituacionpersona-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblsituacionpersona.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="st_id">St Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-st_id-holder" class=" ">
                                                <input id="ctrl-st_id" data-field="st_id"  value="<?php echo get_value('st_id') ?>" type="number" placeholder="Escribir St Id" step="any"  required="" name="st_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="st_per_id">St Per Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-st_per_id-holder" class=" ">
                                                <input id="ctrl-st_per_id" data-field="st_per_id"  value="<?php echo get_value('st_per_id') ?>" type="number" placeholder="Escribir St Per Id" step="any"  name="st_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="st_tipo_situacion">St Tipo Situacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-st_tipo_situacion-holder" class=" ">
                                                <input id="ctrl-st_tipo_situacion" data-field="st_tipo_situacion"  value="<?php echo get_value('st_tipo_situacion') ?>" type="text" placeholder="Escribir St Tipo Situacion"  name="st_tipo_situacion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="st_fecha_inicio">St Fecha Inicio </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-st_fecha_inicio-holder" class="input-group ">
                                                <input id="ctrl-st_fecha_inicio" data-field="st_fecha_inicio" class="form-control datepicker  datepicker" value="<?php echo get_value('st_fecha_inicio') ?>" type="datetime"  name="st_fecha_inicio" placeholder="Escribir St Fecha Inicio" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="st_fecha_fin">St Fecha Fin </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-st_fecha_fin-holder" class="input-group ">
                                                <input id="ctrl-st_fecha_fin" data-field="st_fecha_fin" class="form-control datepicker  datepicker" value="<?php echo get_value('st_fecha_fin') ?>" type="datetime"  name="st_fecha_fin" placeholder="Escribir St Fecha Fin" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="st_estado">St Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-st_estado-holder" class=" ">
                                                <input id="ctrl-st_estado" data-field="st_estado"  value="<?php echo get_value('st_estado') ?>" type="text" placeholder="Escribir St Estado"  name="st_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="st_usuario_creacion">St Usuario Creacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-st_usuario_creacion-holder" class=" ">
                                                <input id="ctrl-st_usuario_creacion" data-field="st_usuario_creacion"  value="<?php echo get_value('st_usuario_creacion') ?>" type="number" placeholder="Escribir St Usuario Creacion" step="any"  name="st_usuario_creacion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="st_fecha_creacion">St Fecha Creacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-st_fecha_creacion-holder" class="input-group ">
                                                <input id="ctrl-st_fecha_creacion" data-field="st_fecha_creacion" class="form-control datepicker  datepicker" value="<?php echo get_value('st_fecha_creacion') ?>" type="datetime"  name="st_fecha_creacion" placeholder="Escribir St Fecha Creacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
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
