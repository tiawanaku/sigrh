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
                        <form id="tblsaldevolucionsanciones-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblsaldevolucionsanciones.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_id">Dev Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_id-holder" class=" ">
                                                <input id="ctrl-dev_id" data-field="dev_id"  value="<?php echo get_value('dev_id') ?>" type="number" placeholder="Escribir Dev Id" step="any"  required="" name="dev_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_per_id">Dev Per Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_per_id-holder" class=" ">
                                                <select required=""  id="ctrl-dev_per_id" data-field="dev_per_id" name="dev_per_id"  placeholder="Seleccione un valor"    class="form-select" >
                                                <option value="">Seleccione un valor</option>
                                                <?php 
                                                    $options = $comp_model->afp_per_id_option_list() ?? [];
                                                    foreach($options as $option){
                                                    $value = $option->value;
                                                    $label = $option->label ?? $value;
                                                    $selected = Html::get_field_selected('dev_per_id', $value, "");
                                                ?>
                                                <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                                <?php echo $label; ?>
                                                </option>
                                                <?php
                                                    }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_cod_proceso">Dev Cod Proceso <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_cod_proceso-holder" class=" ">
                                                <input id="ctrl-dev_cod_proceso" data-field="dev_cod_proceso"  value="<?php echo get_value('dev_cod_proceso') ?>" type="number" placeholder="Escribir Dev Cod Proceso" step="any"  required="" name="dev_cod_proceso"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_cod_cargo">Dev Cod Cargo <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_cod_cargo-holder" class=" ">
                                                <input id="ctrl-dev_cod_cargo" data-field="dev_cod_cargo"  value="<?php echo get_value('dev_cod_cargo') ?>" type="number" placeholder="Escribir Dev Cod Cargo" step="any"  required="" name="dev_cod_cargo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_secuencial">Dev Secuencial <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_secuencial-holder" class=" ">
                                                <input id="ctrl-dev_secuencial" data-field="dev_secuencial"  value="<?php echo get_value('dev_secuencial') ?>" type="number" placeholder="Escribir Dev Secuencial" step="any"  required="" name="dev_secuencial"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_tipo_fun">Dev Tipo Fun <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_tipo_fun-holder" class=" ">
                                                <input id="ctrl-dev_tipo_fun" data-field="dev_tipo_fun"  value="<?php echo get_value('dev_tipo_fun') ?>" type="text" placeholder="Escribir Dev Tipo Fun"  required="" name="dev_tipo_fun"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_prefijo">Dev Prefijo <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_prefijo-holder" class=" ">
                                                <input id="ctrl-dev_prefijo" data-field="dev_prefijo"  value="<?php echo get_value('dev_prefijo') ?>" type="text" placeholder="Escribir Dev Prefijo"  required="" name="dev_prefijo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_tipo_aportante">Dev Tipo Aportante <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_tipo_aportante-holder" class=" ">
                                                <input id="ctrl-dev_tipo_aportante" data-field="dev_tipo_aportante"  value="<?php echo get_value('dev_tipo_aportante') ?>" type="number" placeholder="Escribir Dev Tipo Aportante" step="any"  required="" name="dev_tipo_aportante"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_beneficiario">Dev Beneficiario <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_beneficiario-holder" class=" ">
                                                <input id="ctrl-dev_beneficiario" data-field="dev_beneficiario"  value="<?php echo get_value('dev_beneficiario') ?>" type="text" placeholder="Escribir Dev Beneficiario"  required="" name="dev_beneficiario"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_cod_sancion">Dev Cod Sancion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_cod_sancion-holder" class=" ">
                                                <input id="ctrl-dev_cod_sancion" data-field="dev_cod_sancion"  value="<?php echo get_value('dev_cod_sancion') ?>" type="number" placeholder="Escribir Dev Cod Sancion" step="any"  required="" name="dev_cod_sancion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_dias_sancion">Dev Dias Sancion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_dias_sancion-holder" class=" ">
                                                <input id="ctrl-dev_dias_sancion" data-field="dev_dias_sancion"  value="<?php echo get_value('dev_dias_sancion') ?>" type="number" placeholder="Escribir Dev Dias Sancion" step="0.1"  required="" name="dev_dias_sancion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_dias_devolucion">Dev Dias Devolucion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_dias_devolucion-holder" class=" ">
                                                <input id="ctrl-dev_dias_devolucion" data-field="dev_dias_devolucion"  value="<?php echo get_value('dev_dias_devolucion') ?>" type="number" placeholder="Escribir Dev Dias Devolucion" step="0.1"  required="" name="dev_dias_devolucion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_motivo_devolucion">Dev Motivo Devolucion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_motivo_devolucion-holder" class=" ">
                                                <input id="ctrl-dev_motivo_devolucion" data-field="dev_motivo_devolucion"  value="<?php echo get_value('dev_motivo_devolucion') ?>" type="text" placeholder="Escribir Dev Motivo Devolucion"  name="dev_motivo_devolucion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_tipo_doc">Dev Tipo Doc <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_tipo_doc-holder" class=" ">
                                                <input id="ctrl-dev_tipo_doc" data-field="dev_tipo_doc"  value="<?php echo get_value('dev_tipo_doc') ?>" type="text" placeholder="Escribir Dev Tipo Doc"  required="" name="dev_tipo_doc"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_num_doc">Dev Num Doc <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_num_doc-holder" class=" ">
                                                <input id="ctrl-dev_num_doc" data-field="dev_num_doc"  value="<?php echo get_value('dev_num_doc') ?>" type="text" placeholder="Escribir Dev Num Doc"  required="" name="dev_num_doc"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_estado">Dev Estado <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_estado-holder" class=" ">
                                                <input id="ctrl-dev_estado" data-field="dev_estado"  value="<?php echo get_value('dev_estado') ?>" type="text" placeholder="Escribir Dev Estado"  required="" name="dev_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_fecha_registro">Dev Fecha Registro <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_fecha_registro-holder" class="input-group ">
                                                <input id="ctrl-dev_fecha_registro" data-field="dev_fecha_registro" class="form-control datepicker  datepicker" required="" value="<?php echo get_value('dev_fecha_registro') ?>" type="datetime"  name="dev_fecha_registro" placeholder="Escribir Dev Fecha Registro" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_usuario_registro">Dev Usuario Registro <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_usuario_registro-holder" class=" ">
                                                <input id="ctrl-dev_usuario_registro" data-field="dev_usuario_registro"  value="<?php echo get_value('dev_usuario_registro') ?>" type="number" placeholder="Escribir Dev Usuario Registro" step="any"  required="" name="dev_usuario_registro"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_fecha_salarios">Dev Fecha Salarios </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_fecha_salarios-holder" class="input-group ">
                                                <input id="ctrl-dev_fecha_salarios" data-field="dev_fecha_salarios" class="form-control datepicker  datepicker" value="<?php echo get_value('dev_fecha_salarios') ?>" type="datetime"  name="dev_fecha_salarios" placeholder="Escribir Dev Fecha Salarios" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_usuario_planilla">Dev Usuario Planilla </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_usuario_planilla-holder" class=" ">
                                                <input id="ctrl-dev_usuario_planilla" data-field="dev_usuario_planilla"  value="<?php echo get_value('dev_usuario_planilla') ?>" type="number" placeholder="Escribir Dev Usuario Planilla" step="any"  name="dev_usuario_planilla"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_nro_planilla">Dev Nro Planilla </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_nro_planilla-holder" class=" ">
                                                <input id="ctrl-dev_nro_planilla" data-field="dev_nro_planilla"  value="<?php echo get_value('dev_nro_planilla') ?>" type="number" placeholder="Escribir Dev Nro Planilla" step="any"  name="dev_nro_planilla"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_nro_planilla_salarios">Dev Nro Planilla Salarios </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_nro_planilla_salarios-holder" class=" ">
                                                <input id="ctrl-dev_nro_planilla_salarios" data-field="dev_nro_planilla_salarios"  value="<?php echo get_value('dev_nro_planilla_salarios') ?>" type="number" placeholder="Escribir Dev Nro Planilla Salarios" step="any"  name="dev_nro_planilla_salarios"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dev_basico">Dev Basico <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dev_basico-holder" class=" ">
                                                <input id="ctrl-dev_basico" data-field="dev_basico"  value="<?php echo get_value('dev_basico') ?>" type="number" placeholder="Escribir Dev Basico" step="0.1"  required="" name="dev_basico"  class="form-control " />
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
