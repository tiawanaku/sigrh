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
                        <form id="tblmptenor-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblmptenor.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="te_id">Te Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-te_id-holder" class=" ">
                                                <input id="ctrl-te_id" data-field="te_id"  value="<?php echo get_value('te_id') ?>" type="number" placeholder="Escribir Te Id" step="any"  required="" name="te_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="te_tipo_reg">Te Tipo Reg <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-te_tipo_reg-holder" class=" ">
                                                <input id="ctrl-te_tipo_reg" data-field="te_tipo_reg"  value="<?php echo get_value('te_tipo_reg') ?>" type="text" placeholder="Escribir Te Tipo Reg"  required="" name="te_tipo_reg"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="te_descripcion">Te Descripcion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-te_descripcion-holder" class=" ">
                                                <input id="ctrl-te_descripcion" data-field="te_descripcion"  value="<?php echo get_value('te_descripcion') ?>" type="text" placeholder="Escribir Te Descripcion"  name="te_descripcion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="te_contenido">Te Contenido </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-te_contenido-holder" class=" ">
                                                <textarea placeholder="Escribir Te Contenido" id="ctrl-te_contenido" data-field="te_contenido"  rows="5" name="te_contenido" class=" form-control"><?php echo get_value('te_contenido') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="te_estado">Te Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-te_estado-holder" class=" ">
                                                <input id="ctrl-te_estado" data-field="te_estado"  value="<?php echo get_value('te_estado') ?>" type="text" placeholder="Escribir Te Estado"  name="te_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="te_usuario_creacion">Te Usuario Creacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-te_usuario_creacion-holder" class=" ">
                                                <input id="ctrl-te_usuario_creacion" data-field="te_usuario_creacion"  value="<?php echo get_value('te_usuario_creacion') ?>" type="number" placeholder="Escribir Te Usuario Creacion" step="any"  name="te_usuario_creacion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="te_fecha_creacion">Te Fecha Creacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-te_fecha_creacion-holder" class="input-group ">
                                                <input id="ctrl-te_fecha_creacion" data-field="te_fecha_creacion" class="form-control datepicker  datepicker" value="<?php echo get_value('te_fecha_creacion') ?>" type="datetime"  name="te_fecha_creacion" placeholder="Escribir Te Fecha Creacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="te_fecha_modificacion">Te Fecha Modificacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-te_fecha_modificacion-holder" class="input-group ">
                                                <input id="ctrl-te_fecha_modificacion" data-field="te_fecha_modificacion" class="form-control datepicker  datepicker" value="<?php echo get_value('te_fecha_modificacion') ?>" type="datetime"  name="te_fecha_modificacion" placeholder="Escribir Te Fecha Modificacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
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
