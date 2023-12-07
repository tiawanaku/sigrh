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
                        <form id="tblbsdenunciaaccidente-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblbsdenunciaaccidente.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_id">Denacc Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_id-holder" class=" ">
                                                <input id="ctrl-denacc_id" data-field="denacc_id"  value="<?php echo get_value('denacc_id') ?>" type="number" placeholder="Escribir Denacc Id" step="any"  required="" name="denacc_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_per_id">Denacc Per Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_per_id-holder" class=" ">
                                                <input id="ctrl-denacc_per_id" data-field="denacc_per_id"  value="<?php echo get_value('denacc_per_id') ?>" type="number" placeholder="Escribir Denacc Per Id" step="any"  required="" name="denacc_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_fecha_denunciaacc">Denacc Fecha Denunciaacc </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_fecha_denunciaacc-holder" class="input-group ">
                                                <input id="ctrl-denacc_fecha_denunciaacc" data-field="denacc_fecha_denunciaacc" class="form-control datepicker  datepicker" value="<?php echo get_value('denacc_fecha_denunciaacc') ?>" type="datetime"  name="denacc_fecha_denunciaacc" placeholder="Escribir Denacc Fecha Denunciaacc" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_lugar_accidente">Denacc Lugar Accidente </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_lugar_accidente-holder" class=" ">
                                                <input id="ctrl-denacc_lugar_accidente" data-field="denacc_lugar_accidente"  value="<?php echo get_value('denacc_lugar_accidente') ?>" type="text" placeholder="Escribir Denacc Lugar Accidente"  name="denacc_lugar_accidente"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_fecha_accidente">Denacc Fecha Accidente </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_fecha_accidente-holder" class="input-group ">
                                                <input id="ctrl-denacc_fecha_accidente" data-field="denacc_fecha_accidente" class="form-control datepicker  datepicker" value="<?php echo get_value('denacc_fecha_accidente') ?>" type="datetime"  name="denacc_fecha_accidente" placeholder="Escribir Denacc Fecha Accidente" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_ocurrio_accidente">Denacc Ocurrio Accidente </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_ocurrio_accidente-holder" class=" ">
                                                <textarea placeholder="Escribir Denacc Ocurrio Accidente" id="ctrl-denacc_ocurrio_accidente" data-field="denacc_ocurrio_accidente"  rows="5" name="denacc_ocurrio_accidente" class=" form-control"><?php echo get_value('denacc_ocurrio_accidente') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_causas_accidente">Denacc Causas Accidente </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_causas_accidente-holder" class=" ">
                                                <textarea placeholder="Escribir Denacc Causas Accidente" id="ctrl-denacc_causas_accidente" data-field="denacc_causas_accidente"  rows="5" name="denacc_causas_accidente" class=" form-control"><?php echo get_value('denacc_causas_accidente') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_labor_accidente">Denacc Labor Accidente </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_labor_accidente-holder" class=" ">
                                                <textarea placeholder="Escribir Denacc Labor Accidente" id="ctrl-denacc_labor_accidente" data-field="denacc_labor_accidente"  rows="5" name="denacc_labor_accidente" class=" form-control"><?php echo get_value('denacc_labor_accidente') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_atencion_accidente">Denacc Atencion Accidente </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_atencion_accidente-holder" class=" ">
                                                <textarea placeholder="Escribir Denacc Atencion Accidente" id="ctrl-denacc_atencion_accidente" data-field="denacc_atencion_accidente"  rows="5" name="denacc_atencion_accidente" class=" form-control"><?php echo get_value('denacc_atencion_accidente') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_estado">Denacc Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_estado-holder" class=" ">
                                                <input id="ctrl-denacc_estado" data-field="denacc_estado"  value="<?php echo get_value('denacc_estado') ?>" type="text" placeholder="Escribir Denacc Estado"  name="denacc_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_clase_accidente">Denacc Clase Accidente </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_clase_accidente-holder" class=" ">
                                                <input id="ctrl-denacc_clase_accidente" data-field="denacc_clase_accidente"  value="<?php echo get_value('denacc_clase_accidente') ?>" type="text" placeholder="Escribir Denacc Clase Accidente"  name="denacc_clase_accidente"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_diag_accidente">Denacc Diag Accidente </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_diag_accidente-holder" class=" ">
                                                <textarea placeholder="Escribir Denacc Diag Accidente" id="ctrl-denacc_diag_accidente" data-field="denacc_diag_accidente"  rows="5" name="denacc_diag_accidente" class=" form-control"><?php echo get_value('denacc_diag_accidente') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_trat_accidente">Denacc Trat Accidente </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_trat_accidente-holder" class=" ">
                                                <textarea placeholder="Escribir Denacc Trat Accidente" id="ctrl-denacc_trat_accidente" data-field="denacc_trat_accidente"  rows="5" name="denacc_trat_accidente" class=" form-control"><?php echo get_value('denacc_trat_accidente') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_testigo_primero">Denacc Testigo Primero </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_testigo_primero-holder" class=" ">
                                                <input id="ctrl-denacc_testigo_primero" data-field="denacc_testigo_primero"  value="<?php echo get_value('denacc_testigo_primero') ?>" type="text" placeholder="Escribir Denacc Testigo Primero"  name="denacc_testigo_primero"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_testigo_segundo">Denacc Testigo Segundo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_testigo_segundo-holder" class=" ">
                                                <input id="ctrl-denacc_testigo_segundo" data-field="denacc_testigo_segundo"  value="<?php echo get_value('denacc_testigo_segundo') ?>" type="text" placeholder="Escribir Denacc Testigo Segundo"  name="denacc_testigo_segundo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_ubicacion_verdadera">Denacc Ubicacion Verdadera </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_ubicacion_verdadera-holder" class=" ">
                                                <input id="ctrl-denacc_ubicacion_verdadera" data-field="denacc_ubicacion_verdadera"  value="<?php echo get_value('denacc_ubicacion_verdadera') ?>" type="text" placeholder="Escribir Denacc Ubicacion Verdadera"  name="denacc_ubicacion_verdadera"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_as_id">Denacc As Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_as_id-holder" class=" ">
                                                <input id="ctrl-denacc_as_id" data-field="denacc_as_id"  value="<?php echo get_value('denacc_as_id') ?>" type="number" placeholder="Escribir Denacc As Id" step="any"  name="denacc_as_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="denacc_estado_tramite">Denacc Estado Tramite </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-denacc_estado_tramite-holder" class=" ">
                                                <input id="ctrl-denacc_estado_tramite" data-field="denacc_estado_tramite"  value="<?php echo get_value('denacc_estado_tramite') ?>" type="text" placeholder="Escribir Denacc Estado Tramite"  name="denacc_estado_tramite"  class="form-control " />
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
