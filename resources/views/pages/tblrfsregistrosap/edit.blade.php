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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblrfsregistrosap/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_id">Rs Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_id-holder" class=" ">
                                            <input id="ctrl-rs_id" data-field="rs_id"  value="<?php  echo $data['rs_id']; ?>" type="number" placeholder="Escribir Rs Id" step="any"  required="" name="rs_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_per_id">Rs Per Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_per_id-holder" class=" ">
                                            <input id="ctrl-rs_per_id" data-field="rs_per_id"  value="<?php  echo $data['rs_per_id']; ?>" type="number" placeholder="Escribir Rs Per Id" step="any"  name="rs_per_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_ca_num_item">Rs Ca Num Item <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_ca_num_item-holder" class=" ">
                                            <input id="ctrl-rs_ca_num_item" data-field="rs_ca_num_item"  value="<?php  echo $data['rs_ca_num_item']; ?>" type="number" placeholder="Escribir Rs Ca Num Item" step="any"  required="" name="rs_ca_num_item"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_ca_id_actual">Rs Ca Id Actual <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_ca_id_actual-holder" class=" ">
                                            <input id="ctrl-rs_ca_id_actual" data-field="rs_ca_id_actual"  value="<?php  echo $data['rs_ca_id_actual']; ?>" type="number" placeholder="Escribir Rs Ca Id Actual" step="any"  required="" name="rs_ca_id_actual"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_pu_id_actual">Rs Pu Id Actual <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_pu_id_actual-holder" class=" ">
                                            <input id="ctrl-rs_pu_id_actual" data-field="rs_pu_id_actual"  value="<?php  echo $data['rs_pu_id_actual']; ?>" type="number" placeholder="Escribir Rs Pu Id Actual" step="any"  required="" name="rs_pu_id_actual"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_eo_id_actual">Rs Eo Id Actual <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_eo_id_actual-holder" class=" ">
                                            <input id="ctrl-rs_eo_id_actual" data-field="rs_eo_id_actual"  value="<?php  echo $data['rs_eo_id_actual']; ?>" type="number" placeholder="Escribir Rs Eo Id Actual" step="any"  required="" name="rs_eo_id_actual"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_eo_descripcion_actual">Rs Eo Descripcion Actual <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_eo_descripcion_actual-holder" class=" ">
                                            <input id="ctrl-rs_eo_descripcion_actual" data-field="rs_eo_descripcion_actual"  value="<?php  echo $data['rs_eo_descripcion_actual']; ?>" type="text" placeholder="Escribir Rs Eo Descripcion Actual"  required="" name="rs_eo_descripcion_actual"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_eo_destino">Rs Eo Destino <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_eo_destino-holder" class=" ">
                                            <input id="ctrl-rs_eo_destino" data-field="rs_eo_destino"  value="<?php  echo $data['rs_eo_destino']; ?>" type="text" placeholder="Escribir Rs Eo Destino"  required="" name="rs_eo_destino"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_eo_descripcion_destino">Rs Eo Descripcion Destino <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_eo_descripcion_destino-holder" class=" ">
                                            <input id="ctrl-rs_eo_descripcion_destino" data-field="rs_eo_descripcion_destino"  value="<?php  echo $data['rs_eo_descripcion_destino']; ?>" type="text" placeholder="Escribir Rs Eo Descripcion Destino"  required="" name="rs_eo_descripcion_destino"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_ca_id_destino">Rs Ca Id Destino <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_ca_id_destino-holder" class=" ">
                                            <input id="ctrl-rs_ca_id_destino" data-field="rs_ca_id_destino"  value="<?php  echo $data['rs_ca_id_destino']; ?>" type="number" placeholder="Escribir Rs Ca Id Destino" step="any"  required="" name="rs_ca_id_destino"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_pu_id_destino">Rs Pu Id Destino <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_pu_id_destino-holder" class=" ">
                                            <input id="ctrl-rs_pu_id_destino" data-field="rs_pu_id_destino"  value="<?php  echo $data['rs_pu_id_destino']; ?>" type="number" placeholder="Escribir Rs Pu Id Destino" step="any"  required="" name="rs_pu_id_destino"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_justificacion_tecnica">Rs Justificacion Tecnica <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_justificacion_tecnica-holder" class=" ">
                                            <input id="ctrl-rs_justificacion_tecnica" data-field="rs_justificacion_tecnica"  value="<?php  echo $data['rs_justificacion_tecnica']; ?>" type="text" placeholder="Escribir Rs Justificacion Tecnica"  required="" name="rs_justificacion_tecnica"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_objetivo_propuesto">Rs Objetivo Propuesto <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_objetivo_propuesto-holder" class=" ">
                                            <input id="ctrl-rs_objetivo_propuesto" data-field="rs_objetivo_propuesto"  value="<?php  echo $data['rs_objetivo_propuesto']; ?>" type="text" placeholder="Escribir Rs Objetivo Propuesto"  required="" name="rs_objetivo_propuesto"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_formacion">Rs Formacion <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_formacion-holder" class=" ">
                                            <input id="ctrl-rs_formacion" data-field="rs_formacion"  value="<?php  echo $data['rs_formacion']; ?>" type="text" placeholder="Escribir Rs Formacion"  required="" name="rs_formacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_rc_id">Rs Rc Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_rc_id-holder" class=" ">
                                            <input id="ctrl-rs_rc_id" data-field="rs_rc_id"  value="<?php  echo $data['rs_rc_id']; ?>" type="number" placeholder="Escribir Rs Rc Id" step="any"  required="" name="rs_rc_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_nro_informe_tecnico">Rs Nro Informe Tecnico <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_nro_informe_tecnico-holder" class=" ">
                                            <input id="ctrl-rs_nro_informe_tecnico" data-field="rs_nro_informe_tecnico"  value="<?php  echo $data['rs_nro_informe_tecnico']; ?>" type="text" placeholder="Escribir Rs Nro Informe Tecnico"  required="" name="rs_nro_informe_tecnico"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_nro_informe_legal">Rs Nro Informe Legal <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_nro_informe_legal-holder" class=" ">
                                            <input id="ctrl-rs_nro_informe_legal" data-field="rs_nro_informe_legal"  value="<?php  echo $data['rs_nro_informe_legal']; ?>" type="text" placeholder="Escribir Rs Nro Informe Legal"  required="" name="rs_nro_informe_legal"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_cp_da">Rs Cp Da <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_cp_da-holder" class=" ">
                                            <input id="ctrl-rs_cp_da" data-field="rs_cp_da"  value="<?php  echo $data['rs_cp_da']; ?>" type="number" placeholder="Escribir Rs Cp Da" step="any"  required="" name="rs_cp_da"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_cp_ue">Rs Cp Ue <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_cp_ue-holder" class=" ">
                                            <input id="ctrl-rs_cp_ue" data-field="rs_cp_ue"  value="<?php  echo $data['rs_cp_ue']; ?>" type="number" placeholder="Escribir Rs Cp Ue" step="any"  required="" name="rs_cp_ue"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_fecha_registro">Rs Fecha Registro <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_fecha_registro-holder" class="input-group ">
                                            <input id="ctrl-rs_fecha_registro" data-field="rs_fecha_registro" class="form-control datepicker  datepicker" required="" value="<?php  echo $data['rs_fecha_registro']; ?>" type="datetime"  name="rs_fecha_registro" placeholder="Escribir Rs Fecha Registro" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_fecha_modificacion">Rs Fecha Modificacion <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_fecha_modificacion-holder" class="input-group ">
                                            <input id="ctrl-rs_fecha_modificacion" data-field="rs_fecha_modificacion" class="form-control datepicker  datepicker" required="" value="<?php  echo $data['rs_fecha_modificacion']; ?>" type="datetime"  name="rs_fecha_modificacion" placeholder="Escribir Rs Fecha Modificacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_usuario_registro">Rs Usuario Registro <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_usuario_registro-holder" class=" ">
                                            <input id="ctrl-rs_usuario_registro" data-field="rs_usuario_registro"  value="<?php  echo $data['rs_usuario_registro']; ?>" type="number" placeholder="Escribir Rs Usuario Registro" step="any"  required="" name="rs_usuario_registro"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_valida_destino">Rs Valida Destino <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_valida_destino-holder" class=" ">
                                            <input id="ctrl-rs_valida_destino" data-field="rs_valida_destino"  value="<?php  echo $data['rs_valida_destino']; ?>" type="text" placeholder="Escribir Rs Valida Destino"  required="" name="rs_valida_destino"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_ratifica_origen">Rs Ratifica Origen <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_ratifica_origen-holder" class=" ">
                                            <input id="ctrl-rs_ratifica_origen" data-field="rs_ratifica_origen"  value="<?php  echo $data['rs_ratifica_origen']; ?>" type="text" placeholder="Escribir Rs Ratifica Origen"  required="" name="rs_ratifica_origen"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_cp_ue_destino">Rs Cp Ue Destino <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_cp_ue_destino-holder" class=" ">
                                            <input id="ctrl-rs_cp_ue_destino" data-field="rs_cp_ue_destino"  value="<?php  echo $data['rs_cp_ue_destino']; ?>" type="number" placeholder="Escribir Rs Cp Ue Destino" step="any"  required="" name="rs_cp_ue_destino"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rs_estado">Rs Estado <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rs_estado-holder" class=" ">
                                            <input id="ctrl-rs_estado" data-field="rs_estado"  value="<?php  echo $data['rs_estado']; ?>" type="text" placeholder="Escribir Rs Estado"  required="" name="rs_estado"  class="form-control " />
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
