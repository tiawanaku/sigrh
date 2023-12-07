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
                        <form id="tblpladetbonohistorico-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblpladetbonohistorico.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dboh_id">Dboh Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dboh_id-holder" class=" ">
                                                <input id="ctrl-dboh_id" data-field="dboh_id"  value="<?php echo get_value('dboh_id') ?>" type="number" placeholder="Escribir Dboh Id" step="any"  required="" name="dboh_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dboh_dbh_id">Dboh Dbh Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dboh_dbh_id-holder" class=" ">
                                                <input id="ctrl-dboh_dbh_id" data-field="dboh_dbh_id"  value="<?php echo get_value('dboh_dbh_id') ?>" type="number" placeholder="Escribir Dboh Dbh Id" step="any"  required="" name="dboh_dbh_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dboh_cs_id">Dboh Cs Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dboh_cs_id-holder" class=" ">
                                                <input id="ctrl-dboh_cs_id" data-field="dboh_cs_id"  value="<?php echo get_value('dboh_cs_id') ?>" type="number" placeholder="Escribir Dboh Cs Id" step="any"  name="dboh_cs_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dboh_factorhaberbasico">Dboh Factorhaberbasico <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dboh_factorhaberbasico-holder" class=" ">
                                                <input id="ctrl-dboh_factorhaberbasico" data-field="dboh_factorhaberbasico"  value="<?php echo get_value('dboh_factorhaberbasico') ?>" type="number" placeholder="Escribir Dboh Factorhaberbasico" step="0.1"  required="" name="dboh_factorhaberbasico"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dboh_fechacas">Dboh Fechacas <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dboh_fechacas-holder" class="input-group ">
                                                <input id="ctrl-dboh_fechacas" data-field="dboh_fechacas" class="form-control datepicker  datepicker" required="" value="<?php echo get_value('dboh_fechacas') ?>" type="datetime"  name="dboh_fechacas" placeholder="Escribir Dboh Fechacas" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dboh_observacion">Dboh Observacion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dboh_observacion-holder" class=" ">
                                                <input id="ctrl-dboh_observacion" data-field="dboh_observacion"  value="<?php echo get_value('dboh_observacion') ?>" type="text" placeholder="Escribir Dboh Observacion"  required="" name="dboh_observacion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dboh_tiporegistro">Dboh Tiporegistro <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dboh_tiporegistro-holder" class=" ">
                                                <input id="ctrl-dboh_tiporegistro" data-field="dboh_tiporegistro"  value="<?php echo get_value('dboh_tiporegistro') ?>" type="text" placeholder="Escribir Dboh Tiporegistro"  required="" name="dboh_tiporegistro"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dboh_diasbono">Dboh Diasbono <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dboh_diasbono-holder" class=" ">
                                                <input id="ctrl-dboh_diasbono" data-field="dboh_diasbono"  value="<?php echo get_value('dboh_diasbono') ?>" type="number" placeholder="Escribir Dboh Diasbono" step="any"  required="" name="dboh_diasbono"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dboh_porcentajeanterior">Dboh Porcentajeanterior <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dboh_porcentajeanterior-holder" class=" ">
                                                <input id="ctrl-dboh_porcentajeanterior" data-field="dboh_porcentajeanterior"  value="<?php echo get_value('dboh_porcentajeanterior') ?>" type="number" placeholder="Escribir Dboh Porcentajeanterior" step="0.1"  required="" name="dboh_porcentajeanterior"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dboh_porcentajevigente">Dboh Porcentajevigente <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dboh_porcentajevigente-holder" class=" ">
                                                <input id="ctrl-dboh_porcentajevigente" data-field="dboh_porcentajevigente"  value="<?php echo get_value('dboh_porcentajevigente') ?>" type="number" placeholder="Escribir Dboh Porcentajevigente" step="0.1"  required="" name="dboh_porcentajevigente"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dboh_adecuacion">Dboh Adecuacion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dboh_adecuacion-holder" class=" ">
                                                <input id="ctrl-dboh_adecuacion" data-field="dboh_adecuacion"  value="<?php echo get_value('dboh_adecuacion') ?>" type="text" placeholder="Escribir Dboh Adecuacion"  required="" name="dboh_adecuacion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dboh_montobono">Dboh Montobono <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dboh_montobono-holder" class=" ">
                                                <input id="ctrl-dboh_montobono" data-field="dboh_montobono"  value="<?php echo get_value('dboh_montobono') ?>" type="number" placeholder="Escribir Dboh Montobono" step="0.1"  required="" name="dboh_montobono"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dboh_factorreintegrobono">Dboh Factorreintegrobono <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dboh_factorreintegrobono-holder" class=" ">
                                                <input id="ctrl-dboh_factorreintegrobono" data-field="dboh_factorreintegrobono"  value="<?php echo get_value('dboh_factorreintegrobono') ?>" type="number" placeholder="Escribir Dboh Factorreintegrobono" step="0.1"  required="" name="dboh_factorreintegrobono"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dboh_estado">Dboh Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dboh_estado-holder" class=" ">
                                                <input id="ctrl-dboh_estado" data-field="dboh_estado"  value="<?php echo get_value('dboh_estado') ?>" type="text" placeholder="Escribir Dboh Estado"  name="dboh_estado"  class="form-control " />
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
