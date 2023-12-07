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
                        <form id="tblplasuplenciadocadj-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblplasuplenciadocadj.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasupdocadj_id">Plasupdocadj Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasupdocadj_id-holder" class=" ">
                                                <input id="ctrl-plasupdocadj_id" data-field="plasupdocadj_id"  value="<?php echo get_value('plasupdocadj_id') ?>" type="number" placeholder="Escribir Plasupdocadj Id" step="any"  required="" name="plasupdocadj_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasupdocadj_plasup_id">Plasupdocadj Plasup Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasupdocadj_plasup_id-holder" class=" ">
                                                <input id="ctrl-plasupdocadj_plasup_id" data-field="plasupdocadj_plasup_id"  value="<?php echo get_value('plasupdocadj_plasup_id') ?>" type="number" placeholder="Escribir Plasupdocadj Plasup Id" step="any"  name="plasupdocadj_plasup_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasupdocadj_doc">Plasupdocadj Doc </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasupdocadj_doc-holder" class=" ">
                                                <input id="ctrl-plasupdocadj_doc" data-field="plasupdocadj_doc"  value="<?php echo get_value('plasupdocadj_doc') ?>" type="text" placeholder="Escribir Plasupdocadj Doc"  name="plasupdocadj_doc"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="plasupdocadj_estado">Plasupdocadj Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-plasupdocadj_estado-holder" class=" ">
                                                <input id="ctrl-plasupdocadj_estado" data-field="plasupdocadj_estado"  value="<?php echo get_value('plasupdocadj_estado') ?>" type="text" placeholder="Escribir Plasupdocadj Estado"  name="plasupdocadj_estado"  class="form-control " />
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
