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
                        <form id="tblmpescalasalarial-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblmpescalasalarial.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="es_id">Es Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-es_id-holder" class=" ">
                                                <input id="ctrl-es_id" data-field="es_id"  value="<?php echo get_value('es_id') ?>" type="number" placeholder="Escribir Es Id" step="any"  required="" name="es_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="es_pr_id">Es Pr Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-es_pr_id-holder" class=" ">
                                                <input id="ctrl-es_pr_id" data-field="es_pr_id"  value="<?php echo get_value('es_pr_id') ?>" type="number" placeholder="Escribir Es Pr Id" step="any"  required="" name="es_pr_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="es_ns_id">Es Ns Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-es_ns_id-holder" class=" ">
                                                <input id="ctrl-es_ns_id" data-field="es_ns_id"  value="<?php echo get_value('es_ns_id') ?>" type="number" placeholder="Escribir Es Ns Id" step="any"  required="" name="es_ns_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="es_escalafon">Es Escalafon <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-es_escalafon-holder" class=" ">
                                                <input id="ctrl-es_escalafon" data-field="es_escalafon"  value="<?php echo get_value('es_escalafon') ?>" type="text" placeholder="Escribir Es Escalafon"  required="" name="es_escalafon"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="es_descripcion">Es Descripcion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-es_descripcion-holder" class=" ">
                                                <input id="ctrl-es_descripcion" data-field="es_descripcion"  value="<?php echo get_value('es_descripcion') ?>" type="text" placeholder="Escribir Es Descripcion"  required="" name="es_descripcion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="es_estado">Es Estado <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-es_estado-holder" class=" ">
                                                <input id="ctrl-es_estado" data-field="es_estado"  value="<?php echo get_value('es_estado') ?>" type="text" placeholder="Escribir Es Estado"  required="" name="es_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="es_ne_id">Es Ne Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-es_ne_id-holder" class=" ">
                                                <input id="ctrl-es_ne_id" data-field="es_ne_id"  value="<?php echo get_value('es_ne_id') ?>" type="number" placeholder="Escribir Es Ne Id" step="any"  required="" name="es_ne_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="es_rf_id">Es Rf Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-es_rf_id-holder" class=" ">
                                                <input id="ctrl-es_rf_id" data-field="es_rf_id"  value="<?php echo get_value('es_rf_id') ?>" type="number" placeholder="Escribir Es Rf Id" step="any"  required="" name="es_rf_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="es_categoria">Es Categoria </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-es_categoria-holder" class=" ">
                                                <input id="ctrl-es_categoria" data-field="es_categoria"  value="<?php echo get_value('es_categoria') ?>" type="text" placeholder="Escribir Es Categoria"  name="es_categoria"  class="form-control " />
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
