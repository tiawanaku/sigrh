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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblpcseguimiento/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="seg_pk_id">Seg Pk Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-seg_pk_id-holder" class=" ">
                                            <input id="ctrl-seg_pk_id" data-field="seg_pk_id"  value="<?php  echo $data['seg_pk_id']; ?>" type="number" placeholder="Escribir Seg Pk Id" step="any"  name="seg_pk_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="seg_us_id_remitente">Seg Us Id Remitente </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-seg_us_id_remitente-holder" class=" ">
                                            <input id="ctrl-seg_us_id_remitente" data-field="seg_us_id_remitente"  value="<?php  echo $data['seg_us_id_remitente']; ?>" type="number" placeholder="Escribir Seg Us Id Remitente" step="any"  name="seg_us_id_remitente"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="seg_accion">Seg Accion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-seg_accion-holder" class=" ">
                                            <input id="ctrl-seg_accion" data-field="seg_accion"  value="<?php  echo $data['seg_accion']; ?>" type="text" placeholder="Escribir Seg Accion"  name="seg_accion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="seg_us_id_recepcion">Seg Us Id Recepcion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-seg_us_id_recepcion-holder" class=" ">
                                            <input id="ctrl-seg_us_id_recepcion" data-field="seg_us_id_recepcion"  value="<?php  echo $data['seg_us_id_recepcion']; ?>" type="number" placeholder="Escribir Seg Us Id Recepcion" step="any"  name="seg_us_id_recepcion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="seg_observaciones">Seg Observaciones </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-seg_observaciones-holder" class=" ">
                                            <textarea placeholder="Escribir Seg Observaciones" id="ctrl-seg_observaciones" data-field="seg_observaciones"  rows="5" name="seg_observaciones" class=" form-control"><?php  echo $data['seg_observaciones']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="seg_tabla">Seg Tabla </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-seg_tabla-holder" class=" ">
                                            <input id="ctrl-seg_tabla" data-field="seg_tabla"  value="<?php  echo $data['seg_tabla']; ?>" type="text" placeholder="Escribir Seg Tabla"  name="seg_tabla"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="seg_fecha">Seg Fecha </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-seg_fecha-holder" class="input-group ">
                                            <input id="ctrl-seg_fecha" data-field="seg_fecha" class="form-control datepicker  datepicker" value="<?php  echo $data['seg_fecha']; ?>" type="datetime"  name="seg_fecha" placeholder="Escribir Seg Fecha" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
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
