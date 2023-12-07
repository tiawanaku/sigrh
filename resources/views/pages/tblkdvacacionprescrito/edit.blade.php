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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblkdvacacionprescrito/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vpre_va_id">Vpre Va Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vpre_va_id-holder" class=" ">
                                            <input id="ctrl-vpre_va_id" data-field="vpre_va_id"  value="<?php  echo $data['vpre_va_id']; ?>" type="number" placeholder="Escribir Vpre Va Id" step="any"  name="vpre_va_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vpre_fecha_registro_prescrito">Vpre Fecha Registro Prescrito </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vpre_fecha_registro_prescrito-holder" class="input-group ">
                                            <input id="ctrl-vpre_fecha_registro_prescrito" data-field="vpre_fecha_registro_prescrito" class="form-control datepicker  datepicker" value="<?php  echo $data['vpre_fecha_registro_prescrito']; ?>" type="datetime"  name="vpre_fecha_registro_prescrito" placeholder="Escribir Vpre Fecha Registro Prescrito" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vpre_nro_documento">Vpre Nro Documento </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vpre_nro_documento-holder" class=" ">
                                            <input id="ctrl-vpre_nro_documento" data-field="vpre_nro_documento"  value="<?php  echo $data['vpre_nro_documento']; ?>" type="text" placeholder="Escribir Vpre Nro Documento"  name="vpre_nro_documento"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vpre_autorizado_por">Vpre Autorizado Por </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vpre_autorizado_por-holder" class=" ">
                                            <input id="ctrl-vpre_autorizado_por" data-field="vpre_autorizado_por"  value="<?php  echo $data['vpre_autorizado_por']; ?>" type="text" placeholder="Escribir Vpre Autorizado Por"  name="vpre_autorizado_por"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vpre_fecha_habilitacion_prescrito">Vpre Fecha Habilitacion Prescrito </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vpre_fecha_habilitacion_prescrito-holder" class="input-group ">
                                            <input id="ctrl-vpre_fecha_habilitacion_prescrito" data-field="vpre_fecha_habilitacion_prescrito" class="form-control datepicker  datepicker" value="<?php  echo $data['vpre_fecha_habilitacion_prescrito']; ?>" type="datetime"  name="vpre_fecha_habilitacion_prescrito" placeholder="Escribir Vpre Fecha Habilitacion Prescrito" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vpre_fecha_validez_prescrito">Vpre Fecha Validez Prescrito </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vpre_fecha_validez_prescrito-holder" class="input-group ">
                                            <input id="ctrl-vpre_fecha_validez_prescrito" data-field="vpre_fecha_validez_prescrito" class="form-control datepicker  datepicker" value="<?php  echo $data['vpre_fecha_validez_prescrito']; ?>" type="datetime"  name="vpre_fecha_validez_prescrito" placeholder="Escribir Vpre Fecha Validez Prescrito" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vpre_estado">Vpre Estado </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vpre_estado-holder" class=" ">
                                            <input id="ctrl-vpre_estado" data-field="vpre_estado"  value="<?php  echo $data['vpre_estado']; ?>" type="text" placeholder="Escribir Vpre Estado"  name="vpre_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vpre_usuario_creacion">Vpre Usuario Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vpre_usuario_creacion-holder" class=" ">
                                            <input id="ctrl-vpre_usuario_creacion" data-field="vpre_usuario_creacion"  value="<?php  echo $data['vpre_usuario_creacion']; ?>" type="number" placeholder="Escribir Vpre Usuario Creacion" step="any"  name="vpre_usuario_creacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vpre_fecha_creacion">Vpre Fecha Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vpre_fecha_creacion-holder" class="input-group ">
                                            <input id="ctrl-vpre_fecha_creacion" data-field="vpre_fecha_creacion" class="form-control datepicker  datepicker" value="<?php  echo $data['vpre_fecha_creacion']; ?>" type="datetime"  name="vpre_fecha_creacion" placeholder="Escribir Vpre Fecha Creacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
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
