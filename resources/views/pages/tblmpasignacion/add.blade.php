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
                        <form id="tblmpasignacion-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblmpasignacion.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="as_per_id">As Per Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-as_per_id-holder" class=" ">
                                                <input id="ctrl-as_per_id" data-field="as_per_id"  value="<?php echo get_value('as_per_id') ?>" type="number" placeholder="Escribir As Per Id" step="any"  required="" name="as_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="as_ca_id">As Ca Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-as_ca_id-holder" class=" ">
                                                <input id="ctrl-as_ca_id" data-field="as_ca_id"  value="<?php echo get_value('as_ca_id') ?>" type="number" placeholder="Escribir As Ca Id" step="any"  required="" name="as_ca_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="as_fecha_inicio">As Fecha Inicio </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-as_fecha_inicio-holder" class="input-group ">
                                                <input id="ctrl-as_fecha_inicio" data-field="as_fecha_inicio" class="form-control datepicker  datepicker" value="<?php echo get_value('as_fecha_inicio') ?>" type="datetime"  name="as_fecha_inicio" placeholder="Escribir As Fecha Inicio" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="as_fecha_fin">As Fecha Fin </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-as_fecha_fin-holder" class="input-group ">
                                                <input id="ctrl-as_fecha_fin" data-field="as_fecha_fin" class="form-control datepicker  datepicker" value="<?php echo get_value('as_fecha_fin') ?>" type="datetime"  name="as_fecha_fin" placeholder="Escribir As Fecha Fin" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="as_estado">As Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-as_estado-holder" class=" ">
                                                <input id="ctrl-as_estado" data-field="as_estado"  value="<?php echo get_value('as_estado') ?>" type="text" placeholder="Escribir As Estado"  name="as_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="as_tipo_reg">As Tipo Reg </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-as_tipo_reg-holder" class=" ">
                                                <input id="ctrl-as_tipo_reg" data-field="as_tipo_reg"  value="<?php echo get_value('as_tipo_reg') ?>" type="text" placeholder="Escribir As Tipo Reg"  name="as_tipo_reg"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="as_tipo_mov">As Tipo Mov </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-as_tipo_mov-holder" class=" ">
                                                <input id="ctrl-as_tipo_mov" data-field="as_tipo_mov"  value="<?php echo get_value('as_tipo_mov') ?>" type="text" placeholder="Escribir As Tipo Mov"  name="as_tipo_mov"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="as_tipo_baja">As Tipo Baja </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-as_tipo_baja-holder" class=" ">
                                                <input id="ctrl-as_tipo_baja" data-field="as_tipo_baja"  value="<?php echo get_value('as_tipo_baja') ?>" type="text" placeholder="Escribir As Tipo Baja"  name="as_tipo_baja"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="as_validacion">As Validacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-as_validacion-holder" class=" ">
                                                <input id="ctrl-as_validacion" data-field="as_validacion"  value="<?php echo get_value('as_validacion') ?>" type="text" placeholder="Escribir As Validacion"  name="as_validacion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="as_fecha_validacion">As Fecha Validacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-as_fecha_validacion-holder" class="input-group ">
                                                <input id="ctrl-as_fecha_validacion" data-field="as_fecha_validacion" class="form-control datepicker  datepicker" value="<?php echo get_value('as_fecha_validacion') ?>" type="datetime"  name="as_fecha_validacion" placeholder="Escribir As Fecha Validacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="as_memo">As Memo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-as_memo-holder" class=" ">
                                                <input id="ctrl-as_memo" data-field="as_memo"  value="<?php echo get_value('as_memo') ?>" type="number" placeholder="Escribir As Memo" step="any"  name="as_memo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="as_memo_baja">As Memo Baja </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-as_memo_baja-holder" class=" ">
                                                <input id="ctrl-as_memo_baja" data-field="as_memo_baja"  value="<?php echo get_value('as_memo_baja') ?>" type="number" placeholder="Escribir As Memo Baja" step="any"  name="as_memo_baja"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="as_usuario_creacion">As Usuario Creacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-as_usuario_creacion-holder" class=" ">
                                                <input id="ctrl-as_usuario_creacion" data-field="as_usuario_creacion"  value="<?php echo get_value('as_usuario_creacion') ?>" type="number" placeholder="Escribir As Usuario Creacion" step="any"  name="as_usuario_creacion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="as_fecha_creacion">As Fecha Creacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-as_fecha_creacion-holder" class="input-group ">
                                                <input id="ctrl-as_fecha_creacion" data-field="as_fecha_creacion" class="form-control datepicker  datepicker" value="<?php echo get_value('as_fecha_creacion') ?>" type="datetime"  name="as_fecha_creacion" placeholder="Escribir As Fecha Creacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="as_pr_id">As Pr Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-as_pr_id-holder" class=" ">
                                                <input id="ctrl-as_pr_id" data-field="as_pr_id"  value="<?php echo get_value('as_pr_id') ?>" type="number" placeholder="Escribir As Pr Id" step="any"  name="as_pr_id"  class="form-control " />
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
