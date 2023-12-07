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
                        <form id="tblbsenfermedadesrecurrentes-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblbsenfermedadesrecurrentes.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="enfrec_id">Enfrec Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-enfrec_id-holder" class=" ">
                                                <input id="ctrl-enfrec_id" data-field="enfrec_id"  value="<?php echo get_value('enfrec_id') ?>" type="number" placeholder="Escribir Enfrec Id" step="any"  required="" name="enfrec_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="enfrec_exp_id">Enfrec Exp Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-enfrec_exp_id-holder" class=" ">
                                                <input id="ctrl-enfrec_exp_id" data-field="enfrec_exp_id"  value="<?php echo get_value('enfrec_exp_id') ?>" type="number" placeholder="Escribir Enfrec Exp Id" step="any"  required="" name="enfrec_exp_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="enfrec_enf_id">Enfrec Enf Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-enfrec_enf_id-holder" class=" ">
                                                <input id="ctrl-enfrec_enf_id" data-field="enfrec_enf_id"  value="<?php echo get_value('enfrec_enf_id') ?>" type="number" placeholder="Escribir Enfrec Enf Id" step="any"  required="" name="enfrec_enf_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="enfrec_tipo">Enfrec Tipo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-enfrec_tipo-holder" class=" ">
                                                <input id="ctrl-enfrec_tipo" data-field="enfrec_tipo"  value="<?php echo get_value('enfrec_tipo') ?>" type="text" placeholder="Escribir Enfrec Tipo"  name="enfrec_tipo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="enfrec_estado">Enfrec Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-enfrec_estado-holder" class=" ">
                                                <input id="ctrl-enfrec_estado" data-field="enfrec_estado"  value="<?php echo get_value('enfrec_estado') ?>" type="text" placeholder="Escribir Enfrec Estado"  name="enfrec_estado"  class="form-control " />
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
