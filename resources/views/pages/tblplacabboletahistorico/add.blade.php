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
                        <form id="tblplacabboletahistorico-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblplacabboletahistorico.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_id">Cbh Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_id-holder" class=" ">
                                                <input id="ctrl-cbh_id" data-field="cbh_id"  value="<?php echo get_value('cbh_id') ?>" type="number" placeholder="Escribir Cbh Id" step="any"  required="" name="cbh_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_per_id">Cbh Per Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_per_id-holder" class=" ">
                                                <input id="ctrl-cbh_per_id" data-field="cbh_per_id"  value="<?php echo get_value('cbh_per_id') ?>" type="number" placeholder="Escribir Cbh Per Id" step="any"  required="" name="cbh_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_pc_id">Cbh Pc Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_pc_id-holder" class=" ">
                                                <input id="ctrl-cbh_pc_id" data-field="cbh_pc_id"  value="<?php echo get_value('cbh_pc_id') ?>" type="number" placeholder="Escribir Cbh Pc Id" step="any"  required="" name="cbh_pc_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_ca_id">Cbh Ca Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_ca_id-holder" class=" ">
                                                <input id="ctrl-cbh_ca_id" data-field="cbh_ca_id"  value="<?php echo get_value('cbh_ca_id') ?>" type="number" placeholder="Escribir Cbh Ca Id" step="any"  required="" name="cbh_ca_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_es_id">Cbh Es Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_es_id-holder" class=" ">
                                                <input id="ctrl-cbh_es_id" data-field="cbh_es_id"  value="<?php echo get_value('cbh_es_id') ?>" type="number" placeholder="Escribir Cbh Es Id" step="any"  required="" name="cbh_es_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_afp_id">Cbh Afp Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_afp_id-holder" class=" ">
                                                <input id="ctrl-cbh_afp_id" data-field="cbh_afp_id"  value="<?php echo get_value('cbh_afp_id') ?>" type="number" placeholder="Escribir Cbh Afp Id" step="any"  required="" name="cbh_afp_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_tp_id">Cbh Tp Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_tp_id-holder" class=" ">
                                                <input id="ctrl-cbh_tp_id" data-field="cbh_tp_id"  value="<?php echo get_value('cbh_tp_id') ?>" type="number" placeholder="Escribir Cbh Tp Id" step="any"  required="" name="cbh_tp_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_cod_banco">Cbh Cod Banco <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_cod_banco-holder" class=" ">
                                                <input id="ctrl-cbh_cod_banco" data-field="cbh_cod_banco"  value="<?php echo get_value('cbh_cod_banco') ?>" type="number" placeholder="Escribir Cbh Cod Banco" step="any"  required="" name="cbh_cod_banco"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_num_cta">Cbh Num Cta <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_num_cta-holder" class=" ">
                                                <input id="ctrl-cbh_num_cta" data-field="cbh_num_cta"  value="<?php echo get_value('cbh_num_cta') ?>" type="text" placeholder="Escribir Cbh Num Cta"  required="" name="cbh_num_cta"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_ta_id">Cbh Ta Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_ta_id-holder" class=" ">
                                                <input id="ctrl-cbh_ta_id" data-field="cbh_ta_id"  value="<?php echo get_value('cbh_ta_id') ?>" type="number" placeholder="Escribir Cbh Ta Id" step="any"  required="" name="cbh_ta_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_tipo_aportante">Cbh Tipo Aportante <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_tipo_aportante-holder" class=" ">
                                                <input id="ctrl-cbh_tipo_aportante" data-field="cbh_tipo_aportante"  value="<?php echo get_value('cbh_tipo_aportante') ?>" type="number" placeholder="Escribir Cbh Tipo Aportante" step="any"  required="" name="cbh_tipo_aportante"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_tipo_func">Cbh Tipo Func <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_tipo_func-holder" class=" ">
                                                <input id="ctrl-cbh_tipo_func" data-field="cbh_tipo_func"  value="<?php echo get_value('cbh_tipo_func') ?>" type="text" placeholder="Escribir Cbh Tipo Func"  required="" name="cbh_tipo_func"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_ti_item">Cbh Ti Item <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_ti_item-holder" class=" ">
                                                <input id="ctrl-cbh_ti_item" data-field="cbh_ti_item"  value="<?php echo get_value('cbh_ti_item') ?>" type="text" placeholder="Escribir Cbh Ti Item"  required="" name="cbh_ti_item"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_tipo_gasto">Cbh Tipo Gasto <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_tipo_gasto-holder" class=" ">
                                                <input id="ctrl-cbh_tipo_gasto" data-field="cbh_tipo_gasto"  value="<?php echo get_value('cbh_tipo_gasto') ?>" type="text" placeholder="Escribir Cbh Tipo Gasto"  required="" name="cbh_tipo_gasto"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_fecha_proceso">Cbh Fecha Proceso <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_fecha_proceso-holder" class="input-group ">
                                                <input id="ctrl-cbh_fecha_proceso" data-field="cbh_fecha_proceso" class="form-control datepicker  datepicker" required="" value="<?php echo get_value('cbh_fecha_proceso') ?>" type="datetime"  name="cbh_fecha_proceso" placeholder="Escribir Cbh Fecha Proceso" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_secuencial">Cbh Secuencial <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_secuencial-holder" class=" ">
                                                <input id="ctrl-cbh_secuencial" data-field="cbh_secuencial"  value="<?php echo get_value('cbh_secuencial') ?>" type="number" placeholder="Escribir Cbh Secuencial" step="any"  required="" name="cbh_secuencial"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_asignacion">Cbh Asignacion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_asignacion-holder" class=" ">
                                                <input id="ctrl-cbh_asignacion" data-field="cbh_asignacion"  value="<?php echo get_value('cbh_asignacion') ?>" type="text" placeholder="Escribir Cbh Asignacion"  required="" name="cbh_asignacion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_tipo_baja">Cbh Tipo Baja </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_tipo_baja-holder" class=" ">
                                                <input id="ctrl-cbh_tipo_baja" data-field="cbh_tipo_baja"  value="<?php echo get_value('cbh_tipo_baja') ?>" type="text" placeholder="Escribir Cbh Tipo Baja"  name="cbh_tipo_baja"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cbh_estado">Cbh Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cbh_estado-holder" class=" ">
                                                <input id="ctrl-cbh_estado" data-field="cbh_estado"  value="<?php echo get_value('cbh_estado') ?>" type="text" placeholder="Escribir Cbh Estado"  name="cbh_estado"  class="form-control " />
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
