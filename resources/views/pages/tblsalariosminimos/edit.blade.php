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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblsalariosminimos/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="sm_id">Sm Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-sm_id-holder" class=" ">
                                            <input id="ctrl-sm_id" data-field="sm_id"  value="<?php  echo $data['sm_id']; ?>" type="number" placeholder="Escribir Sm Id" step="any"  required="" name="sm_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="sm_importe">Sm Importe <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-sm_importe-holder" class=" ">
                                            <input id="ctrl-sm_importe" data-field="sm_importe"  value="<?php  echo $data['sm_importe']; ?>" type="number" placeholder="Escribir Sm Importe" step="0.1"  required="" name="sm_importe"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="sm_operacion">Sm Operacion <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-sm_operacion-holder" class=" ">
                                            <input id="ctrl-sm_operacion" data-field="sm_operacion"  value="<?php  echo $data['sm_operacion']; ?>" type="text" placeholder="Escribir Sm Operacion"  required="" name="sm_operacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="sm_fecha_vigencia">Sm Fecha Vigencia <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-sm_fecha_vigencia-holder" class="input-group ">
                                            <input id="ctrl-sm_fecha_vigencia" data-field="sm_fecha_vigencia" class="form-control datepicker  datepicker" required="" value="<?php  echo $data['sm_fecha_vigencia']; ?>" type="datetime"  name="sm_fecha_vigencia" placeholder="Escribir Sm Fecha Vigencia" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="sm_porcentaje_incremento">Sm Porcentaje Incremento <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-sm_porcentaje_incremento-holder" class=" ">
                                            <input id="ctrl-sm_porcentaje_incremento" data-field="sm_porcentaje_incremento"  value="<?php  echo $data['sm_porcentaje_incremento']; ?>" type="number" placeholder="Escribir Sm Porcentaje Incremento" step="0.1"  required="" name="sm_porcentaje_incremento"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="sm_estado">Sm Estado <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-sm_estado-holder" class=" ">
                                            <input id="ctrl-sm_estado" data-field="sm_estado"  value="<?php  echo $data['sm_estado']; ?>" type="text" placeholder="Escribir Sm Estado"  required="" name="sm_estado"  class="form-control " />
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
