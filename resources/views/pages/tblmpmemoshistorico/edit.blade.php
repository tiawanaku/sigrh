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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblmpmemoshistorico/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mh_id">Mh Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mh_id-holder" class=" ">
                                            <input id="ctrl-mh_id" data-field="mh_id"  value="<?php  echo $data['mh_id']; ?>" type="number" placeholder="Escribir Mh Id" step="any"  required="" name="mh_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mh_qr">Mh Qr </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mh_qr-holder" class=" ">
                                            <input id="ctrl-mh_qr" data-field="mh_qr"  value="<?php  echo $data['mh_qr']; ?>" type="text" placeholder="Escribir Mh Qr"  name="mh_qr"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mh_per_id">Mh Per Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mh_per_id-holder" class=" ">
                                            <input id="ctrl-mh_per_id" data-field="mh_per_id"  value="<?php  echo $data['mh_per_id']; ?>" type="number" placeholder="Escribir Mh Per Id" step="any"  name="mh_per_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mh_te_id">Mh Te Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mh_te_id-holder" class=" ">
                                            <input id="ctrl-mh_te_id" data-field="mh_te_id"  value="<?php  echo $data['mh_te_id']; ?>" type="number" placeholder="Escribir Mh Te Id" step="any"  name="mh_te_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mh_nro_memo">Mh Nro Memo </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mh_nro_memo-holder" class=" ">
                                            <input id="ctrl-mh_nro_memo" data-field="mh_nro_memo"  value="<?php  echo $data['mh_nro_memo']; ?>" type="number" placeholder="Escribir Mh Nro Memo" step="any"  name="mh_nro_memo"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mh_contenido">Mh Contenido </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mh_contenido-holder" class=" ">
                                            <textarea placeholder="Escribir Mh Contenido" id="ctrl-mh_contenido" data-field="mh_contenido"  rows="5" name="mh_contenido" class=" form-control"><?php  echo $data['mh_contenido']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mh_validacion">Mh Validacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mh_validacion-holder" class=" ">
                                            <input id="ctrl-mh_validacion" data-field="mh_validacion"  value="<?php  echo $data['mh_validacion']; ?>" type="text" placeholder="Escribir Mh Validacion"  name="mh_validacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mh_fecha_validacion">Mh Fecha Validacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mh_fecha_validacion-holder" class="input-group ">
                                            <input id="ctrl-mh_fecha_validacion" data-field="mh_fecha_validacion" class="form-control datepicker  datepicker" value="<?php  echo $data['mh_fecha_validacion']; ?>" type="datetime"  name="mh_fecha_validacion" placeholder="Escribir Mh Fecha Validacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mh_usuario_creacion">Mh Usuario Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mh_usuario_creacion-holder" class=" ">
                                            <input id="ctrl-mh_usuario_creacion" data-field="mh_usuario_creacion"  value="<?php  echo $data['mh_usuario_creacion']; ?>" type="number" placeholder="Escribir Mh Usuario Creacion" step="any"  name="mh_usuario_creacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mh_fecha_creacion">Mh Fecha Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mh_fecha_creacion-holder" class="input-group ">
                                            <input id="ctrl-mh_fecha_creacion" data-field="mh_fecha_creacion" class="form-control datepicker  datepicker" value="<?php  echo $data['mh_fecha_creacion']; ?>" type="datetime"  name="mh_fecha_creacion" placeholder="Escribir Mh Fecha Creacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mh_pr_id">Mh Pr Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mh_pr_id-holder" class=" ">
                                            <input id="ctrl-mh_pr_id" data-field="mh_pr_id"  value="<?php  echo $data['mh_pr_id']; ?>" type="number" placeholder="Escribir Mh Pr Id" step="any"  name="mh_pr_id"  class="form-control " />
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
