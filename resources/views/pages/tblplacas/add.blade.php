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
                        <form id="tblplacas-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblplacas.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cs_id">Cs Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cs_id-holder" class=" ">
                                                <input id="ctrl-cs_id" data-field="cs_id"  value="<?php echo get_value('cs_id') ?>" type="number" placeholder="Escribir Cs Id" step="any"  required="" name="cs_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cs_per_id">Cs Per Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cs_per_id-holder" class=" ">
                                                <input id="ctrl-cs_per_id" data-field="cs_per_id"  value="<?php echo get_value('cs_per_id') ?>" type="number" placeholder="Escribir Cs Per Id" step="any"  required="" name="cs_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cs_res_adm">Cs Res Adm <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cs_res_adm-holder" class=" ">
                                                <input id="ctrl-cs_res_adm" data-field="cs_res_adm"  value="<?php echo get_value('cs_res_adm') ?>" type="text" placeholder="Escribir Cs Res Adm"  required="" name="cs_res_adm"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cs_nro_cas">Cs Nro Cas <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cs_nro_cas-holder" class=" ">
                                                <input id="ctrl-cs_nro_cas" data-field="cs_nro_cas"  value="<?php echo get_value('cs_nro_cas') ?>" type="text" placeholder="Escribir Cs Nro Cas"  required="" name="cs_nro_cas"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cs_fecha_cas">Cs Fecha Cas <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cs_fecha_cas-holder" class="input-group ">
                                                <input id="ctrl-cs_fecha_cas" data-field="cs_fecha_cas" class="form-control datepicker  datepicker" required="" value="<?php echo get_value('cs_fecha_cas') ?>" type="datetime"  name="cs_fecha_cas" placeholder="Escribir Cs Fecha Cas" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cs_anos">Cs Anos <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cs_anos-holder" class=" ">
                                                <input id="ctrl-cs_anos" data-field="cs_anos"  value="<?php echo get_value('cs_anos') ?>" type="number" placeholder="Escribir Cs Anos" step="any"  required="" name="cs_anos"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cs_meses">Cs Meses <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cs_meses-holder" class=" ">
                                                <input id="ctrl-cs_meses" data-field="cs_meses"  value="<?php echo get_value('cs_meses') ?>" type="number" placeholder="Escribir Cs Meses" step="any"  required="" name="cs_meses"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cs_dias">Cs Dias <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cs_dias-holder" class=" ">
                                                <input id="ctrl-cs_dias" data-field="cs_dias"  value="<?php echo get_value('cs_dias') ?>" type="number" placeholder="Escribir Cs Dias" step="any"  required="" name="cs_dias"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cs_tipo_reg">Cs Tipo Reg <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cs_tipo_reg-holder" class=" ">
                                                <input id="ctrl-cs_tipo_reg" data-field="cs_tipo_reg"  value="<?php echo get_value('cs_tipo_reg') ?>" type="text" placeholder="Escribir Cs Tipo Reg"  required="" name="cs_tipo_reg"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cs_procesado">Cs Procesado <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cs_procesado-holder" class=" ">
                                                <input id="ctrl-cs_procesado" data-field="cs_procesado"  value="<?php echo get_value('cs_procesado') ?>" type="text" placeholder="Escribir Cs Procesado"  required="" name="cs_procesado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cs_estado">Cs Estado <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cs_estado-holder" class=" ">
                                                <input id="ctrl-cs_estado" data-field="cs_estado"  value="<?php echo get_value('cs_estado') ?>" type="text" placeholder="Escribir Cs Estado"  required="" name="cs_estado"  class="form-control " />
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
