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
                        <form id="tblkdrespuestacombo-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblkdrespuestacombo.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rc_id">Rc Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rc_id-holder" class=" ">
                                                <input id="ctrl-rc_id" data-field="rc_id"  value="<?php echo get_value('rc_id') ?>" type="number" placeholder="Escribir Rc Id" step="any"  required="" name="rc_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rc_rq_id">Rc Rq Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rc_rq_id-holder" class=" ">
                                                <input id="ctrl-rc_rq_id" data-field="rc_rq_id"  value="<?php echo get_value('rc_rq_id') ?>" type="number" placeholder="Escribir Rc Rq Id" step="any"  name="rc_rq_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rc_desc">Rc Desc </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rc_desc-holder" class=" ">
                                                <input id="ctrl-rc_desc" data-field="rc_desc"  value="<?php echo get_value('rc_desc') ?>" type="text" placeholder="Escribir Rc Desc"  name="rc_desc"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rc_equivalencia">Rc Equivalencia </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rc_equivalencia-holder" class=" ">
                                                <input id="ctrl-rc_equivalencia" data-field="rc_equivalencia"  value="<?php echo get_value('rc_equivalencia') ?>" type="text" placeholder="Escribir Rc Equivalencia"  name="rc_equivalencia"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rc_estado">Rc Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rc_estado-holder" class=" ">
                                                <input id="ctrl-rc_estado" data-field="rc_estado"  value="<?php echo get_value('rc_estado') ?>" type="text" placeholder="Escribir Rc Estado"  name="rc_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rc_usuario_creacion">Rc Usuario Creacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rc_usuario_creacion-holder" class=" ">
                                                <input id="ctrl-rc_usuario_creacion" data-field="rc_usuario_creacion"  value="<?php echo get_value('rc_usuario_creacion') ?>" type="number" placeholder="Escribir Rc Usuario Creacion" step="any"  name="rc_usuario_creacion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rc_fecha_creacion">Rc Fecha Creacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rc_fecha_creacion-holder" class="input-group ">
                                                <input id="ctrl-rc_fecha_creacion" data-field="rc_fecha_creacion" class="form-control datepicker  datepicker" value="<?php echo get_value('rc_fecha_creacion') ?>" type="datetime"  name="rc_fecha_creacion" placeholder="Escribir Rc Fecha Creacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
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
