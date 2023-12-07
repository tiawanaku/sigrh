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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblkdsolicitudvacacion/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vac_per_id">Vac Per Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vac_per_id-holder" class=" ">
                                            <input id="ctrl-vac_per_id" data-field="vac_per_id"  value="<?php  echo $data['vac_per_id']; ?>" type="number" placeholder="Escribir Vac Per Id" step="any"  required="" name="vac_per_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vac_a_partir">Vac A Partir </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vac_a_partir-holder" class="input-group ">
                                            <input id="ctrl-vac_a_partir" data-field="vac_a_partir" class="form-control datepicker  datepicker" value="<?php  echo $data['vac_a_partir']; ?>" type="datetime"  name="vac_a_partir" placeholder="Escribir Vac A Partir" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vac_hasta">Vac Hasta </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vac_hasta-holder" class="input-group ">
                                            <input id="ctrl-vac_hasta" data-field="vac_hasta" class="form-control datepicker  datepicker" value="<?php  echo $data['vac_hasta']; ?>" type="datetime"  name="vac_hasta" placeholder="Escribir Vac Hasta" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vac_va_id">Vac Va Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vac_va_id-holder" class=" ">
                                            <textarea placeholder="Escribir Vac Va Id" id="ctrl-vac_va_id" data-field="vac_va_id"  rows="5" name="vac_va_id" class=" form-control"><?php  echo $data['vac_va_id']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vac_nro_dias_vacacion">Vac Nro Dias Vacacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vac_nro_dias_vacacion-holder" class=" ">
                                            <input id="ctrl-vac_nro_dias_vacacion" data-field="vac_nro_dias_vacacion"  value="<?php  echo $data['vac_nro_dias_vacacion']; ?>" type="text" placeholder="Escribir Vac Nro Dias Vacacion"  name="vac_nro_dias_vacacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vac_observacion">Vac Observacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vac_observacion-holder" class=" ">
                                            <input id="ctrl-vac_observacion" data-field="vac_observacion"  value="<?php  echo $data['vac_observacion']; ?>" type="text" placeholder="Escribir Vac Observacion"  name="vac_observacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vac_estado">Vac Estado </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vac_estado-holder" class=" ">
                                            <input id="ctrl-vac_estado" data-field="vac_estado"  value="<?php  echo $data['vac_estado']; ?>" type="text" placeholder="Escribir Vac Estado"  name="vac_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vac_motivo_anulado">Vac Motivo Anulado </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vac_motivo_anulado-holder" class=" ">
                                            <input id="ctrl-vac_motivo_anulado" data-field="vac_motivo_anulado"  value="<?php  echo $data['vac_motivo_anulado']; ?>" type="text" placeholder="Escribir Vac Motivo Anulado"  name="vac_motivo_anulado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vac_fecha_anulado">Vac Fecha Anulado </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vac_fecha_anulado-holder" class="input-group ">
                                            <input id="ctrl-vac_fecha_anulado" data-field="vac_fecha_anulado" class="form-control datepicker  datepicker" value="<?php  echo $data['vac_fecha_anulado']; ?>" type="datetime"  name="vac_fecha_anulado" placeholder="Escribir Vac Fecha Anulado" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vac_correlativo">Vac Correlativo </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vac_correlativo-holder" class=" ">
                                            <input id="ctrl-vac_correlativo" data-field="vac_correlativo"  value="<?php  echo $data['vac_correlativo']; ?>" type="number" placeholder="Escribir Vac Correlativo" step="any"  name="vac_correlativo"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vac_usuario_creacion">Vac Usuario Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vac_usuario_creacion-holder" class=" ">
                                            <input id="ctrl-vac_usuario_creacion" data-field="vac_usuario_creacion"  value="<?php  echo $data['vac_usuario_creacion']; ?>" type="number" placeholder="Escribir Vac Usuario Creacion" step="any"  name="vac_usuario_creacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vac_fecha_creacion">Vac Fecha Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vac_fecha_creacion-holder" class="input-group ">
                                            <input id="ctrl-vac_fecha_creacion" data-field="vac_fecha_creacion" class="form-control datepicker  datepicker" value="<?php  echo $data['vac_fecha_creacion']; ?>" type="datetime"  name="vac_fecha_creacion" placeholder="Escribir Vac Fecha Creacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="vac_lj_id">Vac Lj Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-vac_lj_id-holder" class=" ">
                                            <input id="ctrl-vac_lj_id" data-field="vac_lj_id"  value="<?php  echo $data['vac_lj_id']; ?>" type="number" placeholder="Escribir Vac Lj Id" step="any"  name="vac_lj_id"  class="form-control " />
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
