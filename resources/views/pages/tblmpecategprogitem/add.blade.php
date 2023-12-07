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
                        <form id="tblmpecategprogitem-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblmpecategprogitem.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="eoi_eo_id">Eoi Eo Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-eoi_eo_id-holder" class=" ">
                                                <input id="ctrl-eoi_eo_id" data-field="eoi_eo_id"  value="<?php echo get_value('eoi_eo_id') ?>" type="number" placeholder="Escribir Eoi Eo Id" step="any"  name="eoi_eo_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="eoi_ti_item">Eoi Ti Item </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-eoi_ti_item-holder" class=" ">
                                                <input id="ctrl-eoi_ti_item" data-field="eoi_ti_item"  value="<?php echo get_value('eoi_ti_item') ?>" type="text" placeholder="Escribir Eoi Ti Item"  name="eoi_ti_item"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="eoi_estado">Eoi Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-eoi_estado-holder" class=" ">
                                                <input id="ctrl-eoi_estado" data-field="eoi_estado"  value="<?php echo get_value('eoi_estado') ?>" type="text" placeholder="Escribir Eoi Estado"  name="eoi_estado"  class="form-control " />
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
