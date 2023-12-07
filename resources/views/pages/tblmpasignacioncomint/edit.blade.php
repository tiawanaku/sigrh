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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblmpasignacioncomint/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_per_id">Ci Per Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_per_id-holder" class=" ">
                                            <input id="ctrl-ci_per_id" data-field="ci_per_id"  value="<?php  echo $data['ci_per_id']; ?>" type="number" placeholder="Escribir Ci Per Id" step="any"  name="ci_per_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_ca_id">Ci Ca Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_ca_id-holder" class=" ">
                                            <input id="ctrl-ci_ca_id" data-field="ci_ca_id"  value="<?php  echo $data['ci_ca_id']; ?>" type="number" placeholder="Escribir Ci Ca Id" step="any"  name="ci_ca_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_fecha_inicio">Ci Fecha Inicio </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_fecha_inicio-holder" class="input-group ">
                                            <input id="ctrl-ci_fecha_inicio" data-field="ci_fecha_inicio" class="form-control datepicker  datepicker" value="<?php  echo $data['ci_fecha_inicio']; ?>" type="datetime"  name="ci_fecha_inicio" placeholder="Escribir Ci Fecha Inicio" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_fecha_fin">Ci Fecha Fin </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_fecha_fin-holder" class="input-group ">
                                            <input id="ctrl-ci_fecha_fin" data-field="ci_fecha_fin" class="form-control datepicker  datepicker" value="<?php  echo $data['ci_fecha_fin']; ?>" type="datetime"  name="ci_fecha_fin" placeholder="Escribir Ci Fecha Fin" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_estado">Ci Estado </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_estado-holder" class=" ">
                                            <input id="ctrl-ci_estado" data-field="ci_estado"  value="<?php  echo $data['ci_estado']; ?>" type="text" placeholder="Escribir Ci Estado"  name="ci_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_tipo_reg">Ci Tipo Reg </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_tipo_reg-holder" class=" ">
                                            <input id="ctrl-ci_tipo_reg" data-field="ci_tipo_reg"  value="<?php  echo $data['ci_tipo_reg']; ?>" type="text" placeholder="Escribir Ci Tipo Reg"  name="ci_tipo_reg"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_tipo_mov">Ci Tipo Mov </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_tipo_mov-holder" class=" ">
                                            <input id="ctrl-ci_tipo_mov" data-field="ci_tipo_mov"  value="<?php  echo $data['ci_tipo_mov']; ?>" type="text" placeholder="Escribir Ci Tipo Mov"  name="ci_tipo_mov"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_pr_id">Ci Pr Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_pr_id-holder" class=" ">
                                            <input id="ctrl-ci_pr_id" data-field="ci_pr_id"  value="<?php  echo $data['ci_pr_id']; ?>" type="number" placeholder="Escribir Ci Pr Id" step="any"  name="ci_pr_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_tipo_mov_baja">Ci Tipo Mov Baja </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_tipo_mov_baja-holder" class=" ">
                                            <input id="ctrl-ci_tipo_mov_baja" data-field="ci_tipo_mov_baja"  value="<?php  echo $data['ci_tipo_mov_baja']; ?>" type="text" placeholder="Escribir Ci Tipo Mov Baja"  name="ci_tipo_mov_baja"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_ca_id_ant">Ci Ca Id Ant </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_ca_id_ant-holder" class=" ">
                                            <input id="ctrl-ci_ca_id_ant" data-field="ci_ca_id_ant"  value="<?php  echo $data['ci_ca_id_ant']; ?>" type="number" placeholder="Escribir Ci Ca Id Ant" step="any"  name="ci_ca_id_ant"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_ca_id_n">Ci Ca Id N </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_ca_id_n-holder" class=" ">
                                            <input id="ctrl-ci_ca_id_n" data-field="ci_ca_id_n"  value="<?php  echo $data['ci_ca_id_n']; ?>" type="number" placeholder="Escribir Ci Ca Id N" step="any"  name="ci_ca_id_n"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_es_id_n">Ci Es Id N </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_es_id_n-holder" class=" ">
                                            <input id="ctrl-ci_es_id_n" data-field="ci_es_id_n"  value="<?php  echo $data['ci_es_id_n']; ?>" type="number" placeholder="Escribir Ci Es Id N" step="any"  name="ci_es_id_n"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_eo_id_n">Ci Eo Id N </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_eo_id_n-holder" class=" ">
                                            <input id="ctrl-ci_eo_id_n" data-field="ci_eo_id_n"  value="<?php  echo $data['ci_eo_id_n']; ?>" type="number" placeholder="Escribir Ci Eo Id N" step="any"  name="ci_eo_id_n"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_per_id_interinato">Ci Per Id Interinato </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_per_id_interinato-holder" class=" ">
                                            <input id="ctrl-ci_per_id_interinato" data-field="ci_per_id_interinato"  value="<?php  echo $data['ci_per_id_interinato']; ?>" type="number" placeholder="Escribir Ci Per Id Interinato" step="any"  name="ci_per_id_interinato"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_validacion">Ci Validacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_validacion-holder" class=" ">
                                            <input id="ctrl-ci_validacion" data-field="ci_validacion"  value="<?php  echo $data['ci_validacion']; ?>" type="text" placeholder="Escribir Ci Validacion"  name="ci_validacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_fecha_validacion">Ci Fecha Validacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_fecha_validacion-holder" class="input-group ">
                                            <input id="ctrl-ci_fecha_validacion" data-field="ci_fecha_validacion" class="form-control datepicker  datepicker" value="<?php  echo $data['ci_fecha_validacion']; ?>" type="datetime"  name="ci_fecha_validacion" placeholder="Escribir Ci Fecha Validacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_memo">Ci Memo </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_memo-holder" class=" ">
                                            <input id="ctrl-ci_memo" data-field="ci_memo"  value="<?php  echo $data['ci_memo']; ?>" type="number" placeholder="Escribir Ci Memo" step="any"  name="ci_memo"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_memo_baja">Ci Memo Baja </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_memo_baja-holder" class=" ">
                                            <input id="ctrl-ci_memo_baja" data-field="ci_memo_baja"  value="<?php  echo $data['ci_memo_baja']; ?>" type="number" placeholder="Escribir Ci Memo Baja" step="any"  name="ci_memo_baja"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_usuario_creacion">Ci Usuario Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_usuario_creacion-holder" class=" ">
                                            <input id="ctrl-ci_usuario_creacion" data-field="ci_usuario_creacion"  value="<?php  echo $data['ci_usuario_creacion']; ?>" type="number" placeholder="Escribir Ci Usuario Creacion" step="any"  name="ci_usuario_creacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ci_fecha_creacion">Ci Fecha Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ci_fecha_creacion-holder" class="input-group ">
                                            <input id="ctrl-ci_fecha_creacion" data-field="ci_fecha_creacion" class="form-control datepicker  datepicker" value="<?php  echo $data['ci_fecha_creacion']; ?>" type="datetime"  name="ci_fecha_creacion" placeholder="Escribir Ci Fecha Creacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
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
