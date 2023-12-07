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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblmpcargo/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ca_id">Ca Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ca_id-holder" class=" ">
                                            <input id="ctrl-ca_id" data-field="ca_id"  value="<?php  echo $data['ca_id']; ?>" type="number" placeholder="Escribir Ca Id" step="any"  required="" name="ca_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ca_es_id">Ca Es Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ca_es_id-holder" class=" ">
                                            <input id="ctrl-ca_es_id" data-field="ca_es_id"  value="<?php  echo $data['ca_es_id']; ?>" type="number" placeholder="Escribir Ca Es Id" step="any"  name="ca_es_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ca_eo_id">Ca Eo Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ca_eo_id-holder" class=" ">
                                            <input id="ctrl-ca_eo_id" data-field="ca_eo_id"  value="<?php  echo $data['ca_eo_id']; ?>" type="number" placeholder="Escribir Ca Eo Id" step="any"  name="ca_eo_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ca_ti_item">Ca Ti Item </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ca_ti_item-holder" class=" ">
                                            <input id="ctrl-ca_ti_item" data-field="ca_ti_item"  value="<?php  echo $data['ca_ti_item']; ?>" type="text" placeholder="Escribir Ca Ti Item"  name="ca_ti_item"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ca_num_item">Ca Num Item </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ca_num_item-holder" class=" ">
                                            <input id="ctrl-ca_num_item" data-field="ca_num_item"  value="<?php  echo $data['ca_num_item']; ?>" type="number" placeholder="Escribir Ca Num Item" step="any"  name="ca_num_item"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ca_estado">Ca Estado </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ca_estado-holder" class=" ">
                                            <input id="ctrl-ca_estado" data-field="ca_estado"  value="<?php  echo $data['ca_estado']; ?>" type="text" placeholder="Escribir Ca Estado"  name="ca_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ca_aplica_incremento">Ca Aplica Incremento </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ca_aplica_incremento-holder" class=" ">
                                            <input id="ctrl-ca_aplica_incremento" data-field="ca_aplica_incremento"  value="<?php  echo $data['ca_aplica_incremento']; ?>" type="text" placeholder="Escribir Ca Aplica Incremento"  name="ca_aplica_incremento"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ca_tipo_jornada">Ca Tipo Jornada </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ca_tipo_jornada-holder" class=" ">
                                            <input id="ctrl-ca_tipo_jornada" data-field="ca_tipo_jornada"  value="<?php  echo $data['ca_tipo_jornada']; ?>" type="text" placeholder="Escribir Ca Tipo Jornada"  name="ca_tipo_jornada"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ca_basico_calculado">Ca Basico Calculado </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ca_basico_calculado-holder" class=" ">
                                            <input id="ctrl-ca_basico_calculado" data-field="ca_basico_calculado"  value="<?php  echo $data['ca_basico_calculado']; ?>" type="number" placeholder="Escribir Ca Basico Calculado" step="0.1"  name="ca_basico_calculado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ca_tipo_calculo">Ca Tipo Calculo </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ca_tipo_calculo-holder" class=" ">
                                            <input id="ctrl-ca_tipo_calculo" data-field="ca_tipo_calculo"  value="<?php  echo $data['ca_tipo_calculo']; ?>" type="number" placeholder="Escribir Ca Tipo Calculo" step="any"  name="ca_tipo_calculo"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ca_pr_id">Ca Pr Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ca_pr_id-holder" class=" ">
                                            <input id="ctrl-ca_pr_id" data-field="ca_pr_id"  value="<?php  echo $data['ca_pr_id']; ?>" type="number" placeholder="Escribir Ca Pr Id" step="any"  name="ca_pr_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ca_usuario_creacion">Ca Usuario Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ca_usuario_creacion-holder" class=" ">
                                            <input id="ctrl-ca_usuario_creacion" data-field="ca_usuario_creacion"  value="<?php  echo $data['ca_usuario_creacion']; ?>" type="number" placeholder="Escribir Ca Usuario Creacion" step="any"  name="ca_usuario_creacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ca_fecha_creacion">Ca Fecha Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ca_fecha_creacion-holder" class="input-group ">
                                            <input id="ctrl-ca_fecha_creacion" data-field="ca_fecha_creacion" class="form-control datepicker  datepicker" value="<?php  echo $data['ca_fecha_creacion']; ?>" type="datetime"  name="ca_fecha_creacion" placeholder="Escribir Ca Fecha Creacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
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
