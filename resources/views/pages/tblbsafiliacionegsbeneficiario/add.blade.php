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
                        <form id="tblbsafiliacionegsbeneficiario-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblbsafiliacionegsbeneficiario.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="aeb_ae_id">Aeb Ae Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-aeb_ae_id-holder" class=" ">
                                                <input id="ctrl-aeb_ae_id" data-field="aeb_ae_id"  value="<?php echo get_value('aeb_ae_id') ?>" type="number" placeholder="Escribir Aeb Ae Id" step="any"  name="aeb_ae_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="aeb_pf_id">Aeb Pf Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-aeb_pf_id-holder" class=" ">
                                                <input id="ctrl-aeb_pf_id" data-field="aeb_pf_id"  value="<?php echo get_value('aeb_pf_id') ?>" type="number" placeholder="Escribir Aeb Pf Id" step="any"  name="aeb_pf_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="aeb_fecha_afi">Aeb Fecha Afi </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-aeb_fecha_afi-holder" class="input-group ">
                                                <input id="ctrl-aeb_fecha_afi" data-field="aeb_fecha_afi" class="form-control datepicker  datepicker" value="<?php echo get_value('aeb_fecha_afi') ?>" type="datetime"  name="aeb_fecha_afi" placeholder="Escribir Aeb Fecha Afi" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="aeb_afi_por">Aeb Afi Por </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-aeb_afi_por-holder" class=" ">
                                                <input id="ctrl-aeb_afi_por" data-field="aeb_afi_por"  value="<?php echo get_value('aeb_afi_por') ?>" type="text" placeholder="Escribir Aeb Afi Por"  name="aeb_afi_por"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="aeb_estado">Aeb Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-aeb_estado-holder" class=" ">
                                                <input id="ctrl-aeb_estado" data-field="aeb_estado"  value="<?php echo get_value('aeb_estado') ?>" type="text" placeholder="Escribir Aeb Estado"  name="aeb_estado"  class="form-control " />
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
