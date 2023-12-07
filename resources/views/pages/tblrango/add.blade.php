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
                        <form id="tblrango-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblrango.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ra_id">Ra Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ra_id-holder" class=" ">
                                                <input id="ctrl-ra_id" data-field="ra_id"  value="<?php echo get_value('ra_id') ?>" type="number" placeholder="Escribir Ra Id" step="any"  required="" name="ra_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ra_minimo">Ra Minimo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ra_minimo-holder" class=" ">
                                                <input id="ctrl-ra_minimo" data-field="ra_minimo"  value="<?php echo get_value('ra_minimo') ?>" type="number" placeholder="Escribir Ra Minimo" step="any"  name="ra_minimo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ra_maximo">Ra Maximo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ra_maximo-holder" class=" ">
                                                <input id="ctrl-ra_maximo" data-field="ra_maximo"  value="<?php echo get_value('ra_maximo') ?>" type="number" placeholder="Escribir Ra Maximo" step="any"  name="ra_maximo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ra_valor">Ra Valor </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ra_valor-holder" class=" ">
                                                <input id="ctrl-ra_valor" data-field="ra_valor"  value="<?php echo get_value('ra_valor') ?>" type="number" placeholder="Escribir Ra Valor" step="0.1"  name="ra_valor"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ra_tabla">Ra Tabla </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ra_tabla-holder" class=" ">
                                                <input id="ctrl-ra_tabla" data-field="ra_tabla"  value="<?php echo get_value('ra_tabla') ?>" type="text" placeholder="Escribir Ra Tabla"  name="ra_tabla"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ra_factor">Ra Factor </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ra_factor-holder" class=" ">
                                                <input id="ctrl-ra_factor" data-field="ra_factor"  value="<?php echo get_value('ra_factor') ?>" type="number" placeholder="Escribir Ra Factor" step="any"  name="ra_factor"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ra_estado">Ra Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ra_estado-holder" class=" ">
                                                <input id="ctrl-ra_estado" data-field="ra_estado"  value="<?php echo get_value('ra_estado') ?>" type="text" placeholder="Escribir Ra Estado"  name="ra_estado"  class="form-control " />
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
