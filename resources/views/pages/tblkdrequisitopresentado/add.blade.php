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
                        <form id="tblkdrequisitopresentado-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblkdrequisitopresentado.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rp_valor_pk">Rp Valor Pk </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rp_valor_pk-holder" class=" ">
                                                <input id="ctrl-rp_valor_pk" data-field="rp_valor_pk"  value="<?php echo get_value('rp_valor_pk') ?>" type="number" placeholder="Escribir Rp Valor Pk" step="any"  name="rp_valor_pk"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rp_nombre_pk">Rp Nombre Pk </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rp_nombre_pk-holder" class=" ">
                                                <input id="ctrl-rp_nombre_pk" data-field="rp_nombre_pk"  value="<?php echo get_value('rp_nombre_pk') ?>" type="text" placeholder="Escribir Rp Nombre Pk"  name="rp_nombre_pk"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rp_fecha_presentacion">Rp Fecha Presentacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rp_fecha_presentacion-holder" class="input-group ">
                                                <input id="ctrl-rp_fecha_presentacion" data-field="rp_fecha_presentacion" class="form-control datepicker  datepicker" value="<?php echo get_value('rp_fecha_presentacion') ?>" type="datetime"  name="rp_fecha_presentacion" placeholder="Escribir Rp Fecha Presentacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rp_estado">Rp Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rp_estado-holder" class=" ">
                                                <input id="ctrl-rp_estado" data-field="rp_estado"  value="<?php echo get_value('rp_estado') ?>" type="text" placeholder="Escribir Rp Estado"  name="rp_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rp_usuario_creacion">Rp Usuario Creacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rp_usuario_creacion-holder" class=" ">
                                                <input id="ctrl-rp_usuario_creacion" data-field="rp_usuario_creacion"  value="<?php echo get_value('rp_usuario_creacion') ?>" type="number" placeholder="Escribir Rp Usuario Creacion" step="any"  name="rp_usuario_creacion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rp_fecha_creacion">Rp Fecha Creacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rp_fecha_creacion-holder" class="input-group ">
                                                <input id="ctrl-rp_fecha_creacion" data-field="rp_fecha_creacion" class="form-control datepicker  datepicker" value="<?php echo get_value('rp_fecha_creacion') ?>" type="datetime"  name="rp_fecha_creacion" placeholder="Escribir Rp Fecha Creacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rp_respuesta">Rp Respuesta </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rp_respuesta-holder" class=" ">
                                                <textarea placeholder="Escribir Rp Respuesta" id="ctrl-rp_respuesta" data-field="rp_respuesta"  rows="5" name="rp_respuesta" class=" form-control"><?php echo get_value('rp_respuesta') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
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
