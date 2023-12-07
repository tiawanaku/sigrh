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
                        <form id="tblpsaisa-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblpsaisa.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_id">Ps Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_id-holder" class=" ">
                                                <input id="ctrl-ps_id" data-field="ps_id"  value="<?php echo get_value('ps_id') ?>" type="number" placeholder="Escribir Ps Id" step="any"  required="" name="ps_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_per_id">Ps Per Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_per_id-holder" class=" ">
                                                <input id="ctrl-ps_per_id" data-field="ps_per_id"  value="<?php echo get_value('ps_per_id') ?>" type="number" placeholder="Escribir Ps Per Id" step="any"  name="ps_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_secuencial">Ps Secuencial </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_secuencial-holder" class=" ">
                                                <input id="ctrl-ps_secuencial" data-field="ps_secuencial"  value="<?php echo get_value('ps_secuencial') ?>" type="number" placeholder="Escribir Ps Secuencial" step="any"  name="ps_secuencial"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_n_sitram">Ps N Sitram </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_n_sitram-holder" class=" ">
                                                <input id="ctrl-ps_n_sitram" data-field="ps_n_sitram"  value="<?php echo get_value('ps_n_sitram') ?>" type="number" placeholder="Escribir Ps N Sitram" step="any"  name="ps_n_sitram"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_numero">Ps Numero </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_numero-holder" class=" ">
                                                <input id="ctrl-ps_numero" data-field="ps_numero"  value="<?php echo get_value('ps_numero') ?>" type="text" placeholder="Escribir Ps Numero"  name="ps_numero"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_gestion">Ps Gestion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_gestion-holder" class=" ">
                                                <input id="ctrl-ps_gestion" data-field="ps_gestion"  value="<?php echo get_value('ps_gestion') ?>" type="number" placeholder="Escribir Ps Gestion" step="any"  name="ps_gestion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_causa">Ps Causa </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_causa-holder" class=" ">
                                                <input id="ctrl-ps_causa" data-field="ps_causa"  value="<?php echo get_value('ps_causa') ?>" type="text" placeholder="Escribir Ps Causa"  name="ps_causa"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_fecha_creacion">Ps Fecha Creacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_fecha_creacion-holder" class="input-group ">
                                                <input id="ctrl-ps_fecha_creacion" data-field="ps_fecha_creacion" class="form-control datepicker  datepicker" value="<?php echo get_value('ps_fecha_creacion') ?>" type="datetime"  name="ps_fecha_creacion" placeholder="Escribir Ps Fecha Creacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_doc_adjunta">Ps Doc Adjunta </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_doc_adjunta-holder" class=" ">
                                                <input id="ctrl-ps_doc_adjunta" data-field="ps_doc_adjunta"  value="<?php echo get_value('ps_doc_adjunta') ?>" type="text" placeholder="Escribir Ps Doc Adjunta"  name="ps_doc_adjunta"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_fecha_ejecucion_sancion">Ps Fecha Ejecucion Sancion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_fecha_ejecucion_sancion-holder" class="input-group ">
                                                <input id="ctrl-ps_fecha_ejecucion_sancion" data-field="ps_fecha_ejecucion_sancion" class="form-control datepicker  datepicker" value="<?php echo get_value('ps_fecha_ejecucion_sancion') ?>" type="datetime"  name="ps_fecha_ejecucion_sancion" placeholder="Escribir Ps Fecha Ejecucion Sancion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_tipo_resolucion">Ps Tipo Resolucion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_tipo_resolucion-holder" class=" ">
                                                <input id="ctrl-ps_tipo_resolucion" data-field="ps_tipo_resolucion"  value="<?php echo get_value('ps_tipo_resolucion') ?>" type="number" placeholder="Escribir Ps Tipo Resolucion" step="any"  name="ps_tipo_resolucion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_resolucion">Ps Resolucion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_resolucion-holder" class=" ">
                                                <input id="ctrl-ps_resolucion" data-field="ps_resolucion"  value="<?php echo get_value('ps_resolucion') ?>" type="text" placeholder="Escribir Ps Resolucion"  name="ps_resolucion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_fecha_resolucion">Ps Fecha Resolucion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_fecha_resolucion-holder" class="input-group ">
                                                <input id="ctrl-ps_fecha_resolucion" data-field="ps_fecha_resolucion" class="form-control datepicker  datepicker" value="<?php echo get_value('ps_fecha_resolucion') ?>" type="datetime"  name="ps_fecha_resolucion" placeholder="Escribir Ps Fecha Resolucion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_estado">Ps Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_estado-holder" class=" ">
                                                <input id="ctrl-ps_estado" data-field="ps_estado"  value="<?php echo get_value('ps_estado') ?>" type="number" placeholder="Escribir Ps Estado" step="any"  name="ps_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_id_sancion">Ps Id Sancion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_id_sancion-holder" class=" ">
                                                <input id="ctrl-ps_id_sancion" data-field="ps_id_sancion"  value="<?php echo get_value('ps_id_sancion') ?>" type="number" placeholder="Escribir Ps Id Sancion" step="any"  name="ps_id_sancion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ps_unidad_organizacional">Ps Unidad Organizacional </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ps_unidad_organizacional-holder" class=" ">
                                                <input id="ctrl-ps_unidad_organizacional" data-field="ps_unidad_organizacional"  value="<?php echo get_value('ps_unidad_organizacional') ?>" type="text" placeholder="Escribir Ps Unidad Organizacional"  name="ps_unidad_organizacional"  class="form-control " />
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
