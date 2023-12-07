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
                        <form id="tblkdrequisitoformacion-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblkdrequisitoformacion.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rf_id">Rf Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rf_id-holder" class=" ">
                                                <input id="ctrl-rf_id" data-field="rf_id"  value="<?php echo get_value('rf_id') ?>" type="number" placeholder="Escribir Rf Id" step="any"  required="" name="rf_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rf_formacion">Rf Formacion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rf_formacion-holder" class=" ">
                                                <input id="ctrl-rf_formacion" data-field="rf_formacion"  value="<?php echo get_value('rf_formacion') ?>" type="text" placeholder="Escribir Rf Formacion"  required="" name="rf_formacion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rf_exp_gral">Rf Exp Gral </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rf_exp_gral-holder" class=" ">
                                                <input id="ctrl-rf_exp_gral" data-field="rf_exp_gral"  value="<?php echo get_value('rf_exp_gral') ?>" type="text" placeholder="Escribir Rf Exp Gral"  name="rf_exp_gral"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rf_exp_esp">Rf Exp Esp </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rf_exp_esp-holder" class=" ">
                                                <input id="ctrl-rf_exp_esp" data-field="rf_exp_esp"  value="<?php echo get_value('rf_exp_esp') ?>" type="text" placeholder="Escribir Rf Exp Esp"  name="rf_exp_esp"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rf_exp_mun">Rf Exp Mun </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rf_exp_mun-holder" class=" ">
                                                <input id="ctrl-rf_exp_mun" data-field="rf_exp_mun"  value="<?php echo get_value('rf_exp_mun') ?>" type="text" placeholder="Escribir Rf Exp Mun"  name="rf_exp_mun"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rf_exp_mun_esp">Rf Exp Mun Esp </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rf_exp_mun_esp-holder" class=" ">
                                                <input id="ctrl-rf_exp_mun_esp" data-field="rf_exp_mun_esp"  value="<?php echo get_value('rf_exp_mun_esp') ?>" type="text" placeholder="Escribir Rf Exp Mun Esp"  name="rf_exp_mun_esp"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="rf_estado">Rf Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-rf_estado-holder" class=" ">
                                                <input id="ctrl-rf_estado" data-field="rf_estado"  value="<?php echo get_value('rf_estado') ?>" type="text" placeholder="Escribir Rf Estado"  name="rf_estado"  class="form-control " />
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
