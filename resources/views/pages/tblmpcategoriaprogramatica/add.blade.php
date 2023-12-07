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
                        <form id="tblmpcategoriaprogramatica-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblmpcategoriaprogramatica.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cp_da">Cp Da <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cp_da-holder" class=" ">
                                                <input id="ctrl-cp_da" data-field="cp_da"  value="<?php echo get_value('cp_da') ?>" type="number" placeholder="Escribir Cp Da" step="any"  required="" name="cp_da"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cp_da_descripcion">Cp Da Descripcion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cp_da_descripcion-holder" class=" ">
                                                <input id="ctrl-cp_da_descripcion" data-field="cp_da_descripcion"  value="<?php echo get_value('cp_da_descripcion') ?>" type="text" placeholder="Escribir Cp Da Descripcion"  required="" name="cp_da_descripcion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cp_ue">Cp Ue <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cp_ue-holder" class=" ">
                                                <input id="ctrl-cp_ue" data-field="cp_ue"  value="<?php echo get_value('cp_ue') ?>" type="number" placeholder="Escribir Cp Ue" step="any"  required="" name="cp_ue"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cp_ue_descripcion">Cp Ue Descripcion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cp_ue_descripcion-holder" class=" ">
                                                <input id="ctrl-cp_ue_descripcion" data-field="cp_ue_descripcion"  value="<?php echo get_value('cp_ue_descripcion') ?>" type="text" placeholder="Escribir Cp Ue Descripcion"  required="" name="cp_ue_descripcion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cp_programa">Cp Programa <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cp_programa-holder" class=" ">
                                                <input id="ctrl-cp_programa" data-field="cp_programa"  value="<?php echo get_value('cp_programa') ?>" type="number" placeholder="Escribir Cp Programa" step="any"  required="" name="cp_programa"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cp_proyecto">Cp Proyecto </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cp_proyecto-holder" class=" ">
                                                <input id="ctrl-cp_proyecto" data-field="cp_proyecto"  value="<?php echo get_value('cp_proyecto') ?>" type="number" placeholder="Escribir Cp Proyecto" step="any"  name="cp_proyecto"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cp_actividad">Cp Actividad <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cp_actividad-holder" class=" ">
                                                <input id="ctrl-cp_actividad" data-field="cp_actividad"  value="<?php echo get_value('cp_actividad') ?>" type="number" placeholder="Escribir Cp Actividad" step="any"  required="" name="cp_actividad"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cp_cod_poa">Cp Cod Poa <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cp_cod_poa-holder" class=" ">
                                                <input id="ctrl-cp_cod_poa" data-field="cp_cod_poa"  value="<?php echo get_value('cp_cod_poa') ?>" type="number" placeholder="Escribir Cp Cod Poa" step="any"  required="" name="cp_cod_poa"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cp_descripcion">Cp Descripcion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cp_descripcion-holder" class=" ">
                                                <input id="ctrl-cp_descripcion" data-field="cp_descripcion"  value="<?php echo get_value('cp_descripcion') ?>" type="text" placeholder="Escribir Cp Descripcion"  required="" name="cp_descripcion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cp_estado">Cp Estado <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cp_estado-holder" class=" ">
                                                <input id="ctrl-cp_estado" data-field="cp_estado"  value="<?php echo get_value('cp_estado') ?>" type="text" placeholder="Escribir Cp Estado"  required="" name="cp_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cp_tipo_gasto">Cp Tipo Gasto <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cp_tipo_gasto-holder" class=" ">
                                                <input id="ctrl-cp_tipo_gasto" data-field="cp_tipo_gasto"  value="<?php echo get_value('cp_tipo_gasto') ?>" type="text" placeholder="Escribir Cp Tipo Gasto"  required="" name="cp_tipo_gasto"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cp_fuente">Cp Fuente </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cp_fuente-holder" class=" ">
                                                <input id="ctrl-cp_fuente" data-field="cp_fuente"  value="<?php echo get_value('cp_fuente') ?>" type="number" placeholder="Escribir Cp Fuente" step="any"  name="cp_fuente"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cp_organismo">Cp Organismo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cp_organismo-holder" class=" ">
                                                <input id="ctrl-cp_organismo" data-field="cp_organismo"  value="<?php echo get_value('cp_organismo') ?>" type="number" placeholder="Escribir Cp Organismo" step="any"  name="cp_organismo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cp_pr_id">Cp Pr Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cp_pr_id-holder" class=" ">
                                                <input id="ctrl-cp_pr_id" data-field="cp_pr_id"  value="<?php echo get_value('cp_pr_id') ?>" type="number" placeholder="Escribir Cp Pr Id" step="any"  required="" name="cp_pr_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cp_fecha_modificacion">Cp Fecha Modificacion </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-cp_fecha_modificacion-holder" class="input-group ">
                                                <input id="ctrl-cp_fecha_modificacion" data-field="cp_fecha_modificacion" class="form-control datepicker  datepicker" value="<?php echo get_value('cp_fecha_modificacion') ?>" type="datetime"  name="cp_fecha_modificacion" placeholder="Escribir Cp Fecha Modificacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
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
