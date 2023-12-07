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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblmpmemosvarios/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mv_id">Mv Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mv_id-holder" class=" ">
                                            <input id="ctrl-mv_id" data-field="mv_id"  value="<?php  echo $data['mv_id']; ?>" type="number" placeholder="Escribir Mv Id" step="any"  required="" name="mv_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mv_per_id">Mv Per Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mv_per_id-holder" class=" ">
                                            <input id="ctrl-mv_per_id" data-field="mv_per_id"  value="<?php  echo $data['mv_per_id']; ?>" type="number" placeholder="Escribir Mv Per Id" step="any"  name="mv_per_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mv_datos">Mv Datos </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mv_datos-holder" class=" ">
                                            <textarea placeholder="Escribir Mv Datos" id="ctrl-mv_datos" data-field="mv_datos"  rows="5" name="mv_datos" class=" form-control"><?php  echo $data['mv_datos']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mv_nro_memo">Mv Nro Memo </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mv_nro_memo-holder" class=" ">
                                            <input id="ctrl-mv_nro_memo" data-field="mv_nro_memo"  value="<?php  echo $data['mv_nro_memo']; ?>" type="number" placeholder="Escribir Mv Nro Memo" step="any"  name="mv_nro_memo"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mv_validacion">Mv Validacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mv_validacion-holder" class=" ">
                                            <input id="ctrl-mv_validacion" data-field="mv_validacion"  value="<?php  echo $data['mv_validacion']; ?>" type="text" placeholder="Escribir Mv Validacion"  name="mv_validacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mv_fecha_validacion">Mv Fecha Validacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mv_fecha_validacion-holder" class="input-group ">
                                            <input id="ctrl-mv_fecha_validacion" data-field="mv_fecha_validacion" class="form-control datepicker  datepicker" value="<?php  echo $data['mv_fecha_validacion']; ?>" type="datetime"  name="mv_fecha_validacion" placeholder="Escribir Mv Fecha Validacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mv_estado">Mv Estado </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mv_estado-holder" class=" ">
                                            <input id="ctrl-mv_estado" data-field="mv_estado"  value="<?php  echo $data['mv_estado']; ?>" type="text" placeholder="Escribir Mv Estado"  name="mv_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mv_usuario_creacion">Mv Usuario Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mv_usuario_creacion-holder" class=" ">
                                            <input id="ctrl-mv_usuario_creacion" data-field="mv_usuario_creacion"  value="<?php  echo $data['mv_usuario_creacion']; ?>" type="number" placeholder="Escribir Mv Usuario Creacion" step="any"  name="mv_usuario_creacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mv_fecha_creacion">Mv Fecha Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mv_fecha_creacion-holder" class="input-group ">
                                            <input id="ctrl-mv_fecha_creacion" data-field="mv_fecha_creacion" class="form-control datepicker  datepicker" value="<?php  echo $data['mv_fecha_creacion']; ?>" type="datetime"  name="mv_fecha_creacion" placeholder="Escribir Mv Fecha Creacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mv_pr_id">Mv Pr Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mv_pr_id-holder" class=" ">
                                            <input id="ctrl-mv_pr_id" data-field="mv_pr_id"  value="<?php  echo $data['mv_pr_id']; ?>" type="number" placeholder="Escribir Mv Pr Id" step="any"  name="mv_pr_id"  class="form-control " />
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
