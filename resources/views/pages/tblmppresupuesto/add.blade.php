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
                        <form id="tblmppresupuesto-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblmppresupuesto.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pp_cp_id">Pp Cp Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pp_cp_id-holder" class=" ">
                                                <input id="ctrl-pp_cp_id" data-field="pp_cp_id"  value="<?php echo get_value('pp_cp_id') ?>" type="number" placeholder="Escribir Pp Cp Id" step="any"  required="" name="pp_cp_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pp_partida">Pp Partida <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pp_partida-holder" class=" ">
                                                <input id="ctrl-pp_partida" data-field="pp_partida"  value="<?php echo get_value('pp_partida') ?>" type="number" placeholder="Escribir Pp Partida" step="any"  required="" name="pp_partida"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pp_entidad_trans">Pp Entidad Trans </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pp_entidad_trans-holder" class=" ">
                                                <input id="ctrl-pp_entidad_trans" data-field="pp_entidad_trans"  value="<?php echo get_value('pp_entidad_trans') ?>" type="number" placeholder="Escribir Pp Entidad Trans" step="any"  name="pp_entidad_trans"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pp_fecha_calculo">Pp Fecha Calculo <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pp_fecha_calculo-holder" class="input-group ">
                                                <input id="ctrl-pp_fecha_calculo" data-field="pp_fecha_calculo" class="form-control datepicker  datepicker" required="" value="<?php echo get_value('pp_fecha_calculo') ?>" type="datetime"  name="pp_fecha_calculo" placeholder="Escribir Pp Fecha Calculo" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pp_monto">Pp Monto <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pp_monto-holder" class=" ">
                                                <input id="ctrl-pp_monto" data-field="pp_monto"  value="<?php echo get_value('pp_monto') ?>" type="number" placeholder="Escribir Pp Monto" step="0.1"  required="" name="pp_monto"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pp_saldo">Pp Saldo <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pp_saldo-holder" class=" ">
                                                <input id="ctrl-pp_saldo" data-field="pp_saldo"  value="<?php echo get_value('pp_saldo') ?>" type="number" placeholder="Escribir Pp Saldo" step="0.1"  required="" name="pp_saldo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pp_estado">Pp Estado <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pp_estado-holder" class=" ">
                                                <input id="ctrl-pp_estado" data-field="pp_estado"  value="<?php echo get_value('pp_estado') ?>" type="text" placeholder="Escribir Pp Estado"  required="" name="pp_estado"  class="form-control " />
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
