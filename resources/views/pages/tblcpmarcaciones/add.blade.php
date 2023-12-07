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
                        <form id="tblcpmarcaciones-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblcpmarcaciones.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ma_id">Ma Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ma_id-holder" class=" ">
                                                <input id="ctrl-ma_id" data-field="ma_id"  value="<?php echo get_value('ma_id') ?>" type="number" placeholder="Escribir Ma Id" step="any"  required="" name="ma_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ma_per_id">Ma Per Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ma_per_id-holder" class=" ">
                                                <input id="ctrl-ma_per_id" data-field="ma_per_id"  value="<?php echo get_value('ma_per_id') ?>" type="number" placeholder="Escribir Ma Per Id" step="any"  required="" name="ma_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ma_fecha">Ma Fecha <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ma_fecha-holder" class="input-group ">
                                                <input id="ctrl-ma_fecha" data-field="ma_fecha" class="form-control datepicker  datepicker"  required="" value="<?php echo get_value('ma_fecha') ?>" type="datetime" name="ma_fecha" placeholder="Escribir Ma Fecha" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ma_di_id">Ma Di Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ma_di_id-holder" class=" ">
                                                <input id="ctrl-ma_di_id" data-field="ma_di_id"  value="<?php echo get_value('ma_di_id') ?>" type="number" placeholder="Escribir Ma Di Id" step="any"  required="" name="ma_di_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ma_hora">Ma Hora <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ma_hora-holder" class=" ">
                                                <input id="ctrl-ma_hora" data-field="ma_hora"  value="<?php echo get_value('ma_hora') ?>" type="text" placeholder="Escribir Ma Hora"  required="" name="ma_hora"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ma_estado">Ma Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ma_estado-holder" class=" ">
                                                <input id="ctrl-ma_estado" data-field="ma_estado"  value="<?php echo get_value('ma_estado') ?>" type="text" placeholder="Escribir Ma Estado"  name="ma_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ma_tipo">Ma Tipo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ma_tipo-holder" class=" ">
                                                <input id="ctrl-ma_tipo" data-field="ma_tipo"  value="<?php echo get_value('ma_tipo') ?>" type="text" placeholder="Escribir Ma Tipo"  name="ma_tipo"  class="form-control " />
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
