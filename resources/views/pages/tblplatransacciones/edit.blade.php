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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblplatransacciones/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tr_pc_id">Tr Pc Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tr_pc_id-holder" class=" ">
                                            <input id="ctrl-tr_pc_id" data-field="tr_pc_id"  value="<?php  echo $data['tr_pc_id']; ?>" type="number" placeholder="Escribir Tr Pc Id" step="any"  required="" name="tr_pc_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tr_per_id">Tr Per Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tr_per_id-holder" class=" ">
                                            <input id="ctrl-tr_per_id" data-field="tr_per_id"  value="<?php  echo $data['tr_per_id']; ?>" type="number" placeholder="Escribir Tr Per Id" step="any"  required="" name="tr_per_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tr_fa_id">Tr Fa Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tr_fa_id-holder" class=" ">
                                            <input id="ctrl-tr_fa_id" data-field="tr_fa_id"  value="<?php  echo $data['tr_fa_id']; ?>" type="number" placeholder="Escribir Tr Fa Id" step="any"  required="" name="tr_fa_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tr_fecha_inicio">Tr Fecha Inicio <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tr_fecha_inicio-holder" class="input-group ">
                                            <input id="ctrl-tr_fecha_inicio" data-field="tr_fecha_inicio" class="form-control datepicker  datepicker" required="" value="<?php  echo $data['tr_fecha_inicio']; ?>" type="datetime"  name="tr_fecha_inicio" placeholder="Escribir Tr Fecha Inicio" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tr_fecha_fin">Tr Fecha Fin </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tr_fecha_fin-holder" class="input-group ">
                                            <input id="ctrl-tr_fecha_fin" data-field="tr_fecha_fin" class="form-control datepicker  datepicker" value="<?php  echo $data['tr_fecha_fin']; ?>" type="datetime"  name="tr_fecha_fin" placeholder="Escribir Tr Fecha Fin" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tr_monto">Tr Monto <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tr_monto-holder" class=" ">
                                            <input id="ctrl-tr_monto" data-field="tr_monto"  value="<?php  echo $data['tr_monto']; ?>" type="number" placeholder="Escribir Tr Monto" step="0.1"  required="" name="tr_monto"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tr_estado">Tr Estado <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tr_estado-holder" class=" ">
                                            <input id="ctrl-tr_estado" data-field="tr_estado"  value="<?php  echo $data['tr_estado']; ?>" type="text" placeholder="Escribir Tr Estado"  required="" name="tr_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tr_usuario_creacion">Tr Usuario Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tr_usuario_creacion-holder" class=" ">
                                            <input id="ctrl-tr_usuario_creacion" data-field="tr_usuario_creacion"  value="<?php  echo $data['tr_usuario_creacion']; ?>" type="number" placeholder="Escribir Tr Usuario Creacion" step="any"  name="tr_usuario_creacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tr_fecha_creacion">Tr Fecha Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tr_fecha_creacion-holder" class="input-group ">
                                            <input id="ctrl-tr_fecha_creacion" data-field="tr_fecha_creacion" class="form-control datepicker  datepicker" value="<?php  echo $data['tr_fecha_creacion']; ?>" type="datetime"  name="tr_fecha_creacion" placeholder="Escribir Tr Fecha Creacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
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
