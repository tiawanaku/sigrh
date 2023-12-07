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
                        <form id="tblrfspoai-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblrfspoai.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="poai_rs_id">Poai Rs Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-poai_rs_id-holder" class=" ">
                                                <input id="ctrl-poai_rs_id" data-field="poai_rs_id"  value="<?php echo get_value('poai_rs_id') ?>" type="number" placeholder="Escribir Poai Rs Id" step="any"  name="poai_rs_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="poai_per_id">Poai Per Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-poai_per_id-holder" class=" ">
                                                <input id="ctrl-poai_per_id" data-field="poai_per_id"  value="<?php echo get_value('poai_per_id') ?>" type="number" placeholder="Escribir Poai Per Id" step="any"  name="poai_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="poai_objetivo">Poai Objetivo <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-poai_objetivo-holder" class=" ">
                                                <input id="ctrl-poai_objetivo" data-field="poai_objetivo"  value="<?php echo get_value('poai_objetivo') ?>" type="text" placeholder="Escribir Poai Objetivo"  required="" name="poai_objetivo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="poai_formaci_n_profesional">Poai Formaci N Profesional <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-poai_formaci_n_profesional-holder" class=" ">
                                                <input id="ctrl-poai_formaci_n_profesional" data-field="poai_formaci_n_profesional"  value="<?php echo get_value('poai_formaci_n_profesional') ?>" type="text" placeholder="Escribir Poai Formaci N Profesional"  required="" name="poai_formaci_n_profesional"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="poai_estado">Poai Estado <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-poai_estado-holder" class=" ">
                                                <input id="ctrl-poai_estado" data-field="poai_estado"  value="<?php echo get_value('poai_estado') ?>" type="text" placeholder="Escribir Poai Estado"  required="" name="poai_estado"  class="form-control " />
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
