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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tbldjbracreditacion/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="djbracred_id">Djbracred Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-djbracred_id-holder" class=" ">
                                            <input id="ctrl-djbracred_id" data-field="djbracred_id"  value="<?php  echo $data['djbracred_id']; ?>" type="number" placeholder="Escribir Djbracred Id" step="any"  required="" name="djbracred_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="djbracred_cd">Djbracred Cd </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-djbracred_cd-holder" class=" ">
                                            <input id="ctrl-djbracred_cd" data-field="djbracred_cd"  value="<?php  echo $data['djbracred_cd']; ?>" type="text" placeholder="Escribir Djbracred Cd"  name="djbracred_cd"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="djbracred_fecha_declaracion">Djbracred Fecha Declaracion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-djbracred_fecha_declaracion-holder" class="input-group ">
                                            <input id="ctrl-djbracred_fecha_declaracion" data-field="djbracred_fecha_declaracion" class="form-control datepicker  datepicker" value="<?php  echo $data['djbracred_fecha_declaracion']; ?>" type="datetime"  name="djbracred_fecha_declaracion" placeholder="Escribir Djbracred Fecha Declaracion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="djbracred_motivo">Djbracred Motivo </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-djbracred_motivo-holder" class=" ">
                                            <input id="ctrl-djbracred_motivo" data-field="djbracred_motivo"  value="<?php  echo $data['djbracred_motivo']; ?>" type="text" placeholder="Escribir Djbracred Motivo"  name="djbracred_motivo"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="djbracred_fecha_acreditacion">Djbracred Fecha Acreditacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-djbracred_fecha_acreditacion-holder" class="input-group ">
                                            <input id="ctrl-djbracred_fecha_acreditacion" data-field="djbracred_fecha_acreditacion" class="form-control datepicker  datepicker" value="<?php  echo $data['djbracred_fecha_acreditacion']; ?>" type="datetime"  name="djbracred_fecha_acreditacion" placeholder="Escribir Djbracred Fecha Acreditacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="djbracred_cumplimiento">Djbracred Cumplimiento </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-djbracred_cumplimiento-holder" class=" ">
                                            <input id="ctrl-djbracred_cumplimiento" data-field="djbracred_cumplimiento"  value="<?php  echo $data['djbracred_cumplimiento']; ?>" type="text" placeholder="Escribir Djbracred Cumplimiento"  name="djbracred_cumplimiento"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="djbracred_tipo_acreditacion">Djbracred Tipo Acreditacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-djbracred_tipo_acreditacion-holder" class=" ">
                                            <input id="ctrl-djbracred_tipo_acreditacion" data-field="djbracred_tipo_acreditacion"  value="<?php  echo $data['djbracred_tipo_acreditacion']; ?>" type="text" placeholder="Escribir Djbracred Tipo Acreditacion"  name="djbracred_tipo_acreditacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="djbracred_proxima_acreditacion">Djbracred Proxima Acreditacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-djbracred_proxima_acreditacion-holder" class=" ">
                                            <input id="ctrl-djbracred_proxima_acreditacion" data-field="djbracred_proxima_acreditacion"  value="<?php  echo $data['djbracred_proxima_acreditacion']; ?>" type="number" placeholder="Escribir Djbracred Proxima Acreditacion" step="any"  name="djbracred_proxima_acreditacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="djbracred_per_id">Djbracred Per Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-djbracred_per_id-holder" class=" ">
                                            <input id="ctrl-djbracred_per_id" data-field="djbracred_per_id"  value="<?php  echo $data['djbracred_per_id']; ?>" type="number" placeholder="Escribir Djbracred Per Id" step="any"  name="djbracred_per_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="djbracred_as_id">Djbracred As Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-djbracred_as_id-holder" class=" ">
                                            <input id="ctrl-djbracred_as_id" data-field="djbracred_as_id"  value="<?php  echo $data['djbracred_as_id']; ?>" type="number" placeholder="Escribir Djbracred As Id" step="any"  name="djbracred_as_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="djbracred_gestion">Djbracred Gestion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-djbracred_gestion-holder" class=" ">
                                            <input id="ctrl-djbracred_gestion" data-field="djbracred_gestion"  value="<?php  echo $data['djbracred_gestion']; ?>" type="number" placeholder="Escribir Djbracred Gestion" step="any"  name="djbracred_gestion"  class="form-control " />
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
