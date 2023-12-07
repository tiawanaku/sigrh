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
                        <form id="tblbsasignacionbeneficio-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblbsasignacionbeneficio.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ab_aeb_id">Ab Aeb Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ab_aeb_id-holder" class=" ">
                                                <input id="ctrl-ab_aeb_id" data-field="ab_aeb_id"  value="<?php echo get_value('ab_aeb_id') ?>" type="number" placeholder="Escribir Ab Aeb Id" step="any"  required="" name="ab_aeb_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ab_fa_id">Ab Fa Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ab_fa_id-holder" class=" ">
                                                <input id="ctrl-ab_fa_id" data-field="ab_fa_id"  value="<?php echo get_value('ab_fa_id') ?>" type="number" placeholder="Escribir Ab Fa Id" step="any"  required="" name="ab_fa_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ab_fecha_inicio">Ab Fecha Inicio <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ab_fecha_inicio-holder" class="input-group ">
                                                <input id="ctrl-ab_fecha_inicio" data-field="ab_fecha_inicio" class="form-control datepicker  datepicker" required="" value="<?php echo get_value('ab_fecha_inicio') ?>" type="datetime"  name="ab_fecha_inicio" placeholder="Escribir Ab Fecha Inicio" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ab_fecha_fin">Ab Fecha Fin <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ab_fecha_fin-holder" class="input-group ">
                                                <input id="ctrl-ab_fecha_fin" data-field="ab_fecha_fin" class="form-control datepicker  datepicker" required="" value="<?php echo get_value('ab_fecha_fin') ?>" type="datetime"  name="ab_fecha_fin" placeholder="Escribir Ab Fecha Fin" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ab_estado">Ab Estado <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ab_estado-holder" class=" ">
                                                <input id="ctrl-ab_estado" data-field="ab_estado"  value="<?php echo get_value('ab_estado') ?>" type="text" placeholder="Escribir Ab Estado"  required="" name="ab_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ab_tipo_beneficiario">Ab Tipo Beneficiario </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ab_tipo_beneficiario-holder" class=" ">
                                                <input id="ctrl-ab_tipo_beneficiario" data-field="ab_tipo_beneficiario"  value="<?php echo get_value('ab_tipo_beneficiario') ?>" type="text" placeholder="Escribir Ab Tipo Beneficiario"  name="ab_tipo_beneficiario"  class="form-control " />
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
