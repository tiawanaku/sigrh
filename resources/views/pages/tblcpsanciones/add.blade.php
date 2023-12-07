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
                        <form id="tblcpsanciones-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblcpsanciones.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_id">Sa Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_id-holder" class=" ">
                                                <input id="ctrl-sa_id" data-field="sa_id"  value="<?php echo get_value('sa_id') ?>" type="number" placeholder="Escribir Sa Id" step="any"  required="" name="sa_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_per_id">Sa Per Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_per_id-holder" class=" ">
                                                <input id="ctrl-sa_per_id" data-field="sa_per_id"  value="<?php echo get_value('sa_per_id') ?>" type="number" placeholder="Escribir Sa Per Id" step="any"  required="" name="sa_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_factor">Sa Factor <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_factor-holder" class=" ">
                                                <input id="ctrl-sa_factor" data-field="sa_factor"  value="<?php echo get_value('sa_factor') ?>" type="number" placeholder="Escribir Sa Factor" step="any"  required="" name="sa_factor"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_minutos">Sa Minutos </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_minutos-holder" class=" ">
                                                <input id="ctrl-sa_minutos" data-field="sa_minutos"  value="<?php echo get_value('sa_minutos') ?>" type="number" placeholder="Escribir Sa Minutos" step="any"  name="sa_minutos"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_fecha_inicio">Sa Fecha Inicio </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_fecha_inicio-holder" class="input-group ">
                                                <input id="ctrl-sa_fecha_inicio" data-field="sa_fecha_inicio" class="form-control datepicker  datepicker"  value="<?php echo get_value('sa_fecha_inicio') ?>" type="datetime" name="sa_fecha_inicio" placeholder="Escribir Sa Fecha Inicio" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_fecha_fin">Sa Fecha Fin </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_fecha_fin-holder" class="input-group ">
                                                <input id="ctrl-sa_fecha_fin" data-field="sa_fecha_fin" class="form-control datepicker  datepicker"  value="<?php echo get_value('sa_fecha_fin') ?>" type="datetime" name="sa_fecha_fin" placeholder="Escribir Sa Fecha Fin" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_tipo_sancion">Sa Tipo Sancion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_tipo_sancion-holder" class=" ">
                                                <input id="ctrl-sa_tipo_sancion" data-field="sa_tipo_sancion"  value="<?php echo get_value('sa_tipo_sancion') ?>" type="text" placeholder="Escribir Sa Tipo Sancion"  required="" name="sa_tipo_sancion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_dias_sancion">Sa Dias Sancion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_dias_sancion-holder" class=" ">
                                                <input id="ctrl-sa_dias_sancion" data-field="sa_dias_sancion"  value="<?php echo get_value('sa_dias_sancion') ?>" type="number" placeholder="Escribir Sa Dias Sancion" step="0.1"  required="" name="sa_dias_sancion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sa_estado">Sa Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sa_estado-holder" class=" ">
                                                <input id="ctrl-sa_estado" data-field="sa_estado"  value="<?php echo get_value('sa_estado') ?>" type="text" placeholder="Escribir Sa Estado"  name="sa_estado"  class="form-control " />
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
