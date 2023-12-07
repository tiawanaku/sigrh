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
                        <form id="tblpsproccoactfisc-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblpsproccoactfisc.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pca_id_proccoactfisc">Pca Id Proccoactfisc <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pca_id_proccoactfisc-holder" class=" ">
                                                <input id="ctrl-pca_id_proccoactfisc" data-field="pca_id_proccoactfisc"  value="<?php echo get_value('pca_id_proccoactfisc') ?>" type="number" placeholder="Escribir Pca Id Proccoactfisc" step="any"  required="" name="pca_id_proccoactfisc"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pca_per_id">Pca Per Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pca_per_id-holder" class=" ">
                                                <input id="ctrl-pca_per_id" data-field="pca_per_id"  value="<?php echo get_value('pca_per_id') ?>" type="number" placeholder="Escribir Pca Per Id" step="any"  name="pca_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pca_secuencial">Pca Secuencial </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pca_secuencial-holder" class=" ">
                                                <input id="ctrl-pca_secuencial" data-field="pca_secuencial"  value="<?php echo get_value('pca_secuencial') ?>" type="number" placeholder="Escribir Pca Secuencial" step="any"  name="pca_secuencial"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pca_sujeto_procesal">Pca Sujeto Procesal </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pca_sujeto_procesal-holder" class=" ">
                                                <input id="ctrl-pca_sujeto_procesal" data-field="pca_sujeto_procesal"  value="<?php echo get_value('pca_sujeto_procesal') ?>" type="text" placeholder="Escribir Pca Sujeto Procesal"  name="pca_sujeto_procesal"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pca_nota_cargo">Pca Nota Cargo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pca_nota_cargo-holder" class=" ">
                                                <input id="ctrl-pca_nota_cargo" data-field="pca_nota_cargo"  value="<?php echo get_value('pca_nota_cargo') ?>" type="text" placeholder="Escribir Pca Nota Cargo"  name="pca_nota_cargo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pca_monto_act">Pca Monto Act </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pca_monto_act-holder" class=" ">
                                                <input id="ctrl-pca_monto_act" data-field="pca_monto_act"  value="<?php echo get_value('pca_monto_act') ?>" type="number" placeholder="Escribir Pca Monto Act" step="0.1"  name="pca_monto_act"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pca_total_rec">Pca Total Rec </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pca_total_rec-holder" class=" ">
                                                <input id="ctrl-pca_total_rec" data-field="pca_total_rec"  value="<?php echo get_value('pca_total_rec') ?>" type="number" placeholder="Escribir Pca Total Rec" step="0.1"  name="pca_total_rec"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pca_estado_proceso">Pca Estado Proceso </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pca_estado_proceso-holder" class=" ">
                                                <textarea placeholder="Escribir Pca Estado Proceso" id="ctrl-pca_estado_proceso" data-field="pca_estado_proceso"  rows="5" name="pca_estado_proceso" class=" form-control"><?php echo get_value('pca_estado_proceso') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pca_juzgado">Pca Juzgado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pca_juzgado-holder" class=" ">
                                                <input id="ctrl-pca_juzgado" data-field="pca_juzgado"  value="<?php echo get_value('pca_juzgado') ?>" type="text" placeholder="Escribir Pca Juzgado"  name="pca_juzgado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pca_tipo">Pca Tipo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pca_tipo-holder" class=" ">
                                                <input id="ctrl-pca_tipo" data-field="pca_tipo"  value="<?php echo get_value('pca_tipo') ?>" type="text" placeholder="Escribir Pca Tipo"  name="pca_tipo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pca_estado">Pca Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pca_estado-holder" class=" ">
                                                <input id="ctrl-pca_estado" data-field="pca_estado"  value="<?php echo get_value('pca_estado') ?>" type="text" placeholder="Escribir Pca Estado"  name="pca_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pca_fecha_registro">Pca Fecha Registro </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pca_fecha_registro-holder" class="input-group ">
                                                <input id="ctrl-pca_fecha_registro" data-field="pca_fecha_registro" class="form-control datepicker  datepicker" value="<?php echo get_value('pca_fecha_registro') ?>" type="datetime"  name="pca_fecha_registro" placeholder="Escribir Pca Fecha Registro" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
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
