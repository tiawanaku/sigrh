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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tbltipoaportante/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ta_id">Ta Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ta_id-holder" class=" ">
                                            <input id="ctrl-ta_id" data-field="ta_id"  value="<?php  echo $data['ta_id']; ?>" type="number" placeholder="Escribir Ta Id" step="any"  required="" name="ta_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ta_lab_cotizacion_mensual">Ta Lab Cotizacion Mensual <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ta_lab_cotizacion_mensual-holder" class=" ">
                                            <input id="ctrl-ta_lab_cotizacion_mensual" data-field="ta_lab_cotizacion_mensual"  value="<?php  echo $data['ta_lab_cotizacion_mensual']; ?>" type="number" placeholder="Escribir Ta Lab Cotizacion Mensual" step="0.1"  required="" name="ta_lab_cotizacion_mensual"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ta_lab_prima_riesgo_comun">Ta Lab Prima Riesgo Comun <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ta_lab_prima_riesgo_comun-holder" class=" ">
                                            <input id="ctrl-ta_lab_prima_riesgo_comun" data-field="ta_lab_prima_riesgo_comun"  value="<?php  echo $data['ta_lab_prima_riesgo_comun']; ?>" type="number" placeholder="Escribir Ta Lab Prima Riesgo Comun" step="0.1"  required="" name="ta_lab_prima_riesgo_comun"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ta_lab_comision_afp">Ta Lab Comision Afp <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ta_lab_comision_afp-holder" class=" ">
                                            <input id="ctrl-ta_lab_comision_afp" data-field="ta_lab_comision_afp"  value="<?php  echo $data['ta_lab_comision_afp']; ?>" type="number" placeholder="Escribir Ta Lab Comision Afp" step="0.1"  required="" name="ta_lab_comision_afp"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ta_lab_solidario">Ta Lab Solidario <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ta_lab_solidario-holder" class=" ">
                                            <input id="ctrl-ta_lab_solidario" data-field="ta_lab_solidario"  value="<?php  echo $data['ta_lab_solidario']; ?>" type="number" placeholder="Escribir Ta Lab Solidario" step="0.1"  required="" name="ta_lab_solidario"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ta_pat_prima_riesgo_prof">Ta Pat Prima Riesgo Prof <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ta_pat_prima_riesgo_prof-holder" class=" ">
                                            <input id="ctrl-ta_pat_prima_riesgo_prof" data-field="ta_pat_prima_riesgo_prof"  value="<?php  echo $data['ta_pat_prima_riesgo_prof']; ?>" type="number" placeholder="Escribir Ta Pat Prima Riesgo Prof" step="0.1"  required="" name="ta_pat_prima_riesgo_prof"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ta_pat_solidario">Ta Pat Solidario <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ta_pat_solidario-holder" class=" ">
                                            <input id="ctrl-ta_pat_solidario" data-field="ta_pat_solidario"  value="<?php  echo $data['ta_pat_solidario']; ?>" type="number" placeholder="Escribir Ta Pat Solidario" step="0.1"  required="" name="ta_pat_solidario"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ta_pat_caja">Ta Pat Caja <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ta_pat_caja-holder" class=" ">
                                            <input id="ctrl-ta_pat_caja" data-field="ta_pat_caja"  value="<?php  echo $data['ta_pat_caja']; ?>" type="number" placeholder="Escribir Ta Pat Caja" step="0.1"  required="" name="ta_pat_caja"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ta_pat_provivienda">Ta Pat Provivienda <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ta_pat_provivienda-holder" class=" ">
                                            <input id="ctrl-ta_pat_provivienda" data-field="ta_pat_provivienda"  value="<?php  echo $data['ta_pat_provivienda']; ?>" type="number" placeholder="Escribir Ta Pat Provivienda" step="0.1"  required="" name="ta_pat_provivienda"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ta_descripcion">Ta Descripcion <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ta_descripcion-holder" class=" ">
                                            <input id="ctrl-ta_descripcion" data-field="ta_descripcion"  value="<?php  echo $data['ta_descripcion']; ?>" type="text" placeholder="Escribir Ta Descripcion"  required="" name="ta_descripcion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ta_estado">Ta Estado <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ta_estado-holder" class=" ">
                                            <input id="ctrl-ta_estado" data-field="ta_estado"  value="<?php  echo $data['ta_estado']; ?>" type="text" placeholder="Escribir Ta Estado"  required="" name="ta_estado"  class="form-control " />
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
