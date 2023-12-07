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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblmptipoabono/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cb_id">Cb Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cb_id-holder" class=" ">
                                            <input id="ctrl-cb_id" data-field="cb_id"  value="<?php  echo $data['cb_id']; ?>" type="number" placeholder="Escribir Cb Id" step="any"  required="" name="cb_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cb_cod_banco">Cb Cod Banco <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cb_cod_banco-holder" class=" ">
                                            <input id="ctrl-cb_cod_banco" data-field="cb_cod_banco"  value="<?php  echo $data['cb_cod_banco']; ?>" type="number" placeholder="Escribir Cb Cod Banco" step="any"  required="" name="cb_cod_banco"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cb_per_id">Cb Per Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cb_per_id-holder" class=" ">
                                            <input id="ctrl-cb_per_id" data-field="cb_per_id"  value="<?php  echo $data['cb_per_id']; ?>" type="number" placeholder="Escribir Cb Per Id" step="any"  required="" name="cb_per_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cb_num_cuenta">Cb Num Cuenta <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cb_num_cuenta-holder" class=" ">
                                            <input id="ctrl-cb_num_cuenta" data-field="cb_num_cuenta"  value="<?php  echo $data['cb_num_cuenta']; ?>" type="text" placeholder="Escribir Cb Num Cuenta"  required="" name="cb_num_cuenta"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cb_tipo_abono">Cb Tipo Abono </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cb_tipo_abono-holder" class=" ">
                                            <input id="ctrl-cb_tipo_abono" data-field="cb_tipo_abono"  value="<?php  echo $data['cb_tipo_abono']; ?>" type="text" placeholder="Escribir Cb Tipo Abono"  name="cb_tipo_abono"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cb_fecha_mod">Cb Fecha Mod </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cb_fecha_mod-holder" class="input-group ">
                                            <input id="ctrl-cb_fecha_mod" data-field="cb_fecha_mod" class="form-control datepicker  datepicker" value="<?php  echo $data['cb_fecha_mod']; ?>" type="datetime"  name="cb_fecha_mod" placeholder="Escribir Cb Fecha Mod" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cb_estado">Cb Estado </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cb_estado-holder" class=" ">
                                            <input id="ctrl-cb_estado" data-field="cb_estado"  value="<?php  echo $data['cb_estado']; ?>" type="text" placeholder="Escribir Cb Estado"  name="cb_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cb_secuencial">Cb Secuencial <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cb_secuencial-holder" class=" ">
                                            <input id="ctrl-cb_secuencial" data-field="cb_secuencial"  value="<?php  echo $data['cb_secuencial']; ?>" type="number" placeholder="Escribir Cb Secuencial" step="any"  required="" name="cb_secuencial"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cb_fecha_formulario">Cb Fecha Formulario </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cb_fecha_formulario-holder" class="input-group ">
                                            <input id="ctrl-cb_fecha_formulario" data-field="cb_fecha_formulario" class="form-control datepicker  datepicker" value="<?php  echo $data['cb_fecha_formulario']; ?>" type="datetime"  name="cb_fecha_formulario" placeholder="Escribir Cb Fecha Formulario" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
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
