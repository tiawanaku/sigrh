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
                        <form id="tblcpasistencia-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblcpasistencia.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_id">Att Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_id-holder" class=" ">
                                                <input id="ctrl-att_id" data-field="att_id"  value="<?php echo get_value('att_id') ?>" type="number" placeholder="Escribir Att Id" step="any"  required="" name="att_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_per_id">Att Per Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_per_id-holder" class=" ">
                                                <input id="ctrl-att_per_id" data-field="att_per_id"  value="<?php echo get_value('att_per_id') ?>" type="number" placeholder="Escribir Att Per Id" step="any"  required="" name="att_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_fecha">Att Fecha <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_fecha-holder" class="input-group ">
                                                <input id="ctrl-att_fecha" data-field="att_fecha" class="form-control datepicker  datepicker"  required="" value="<?php echo get_value('att_fecha') ?>" type="datetime" name="att_fecha" placeholder="Escribir Att Fecha" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_dia">Att Dia <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_dia-holder" class=" ">
                                                <input id="ctrl-att_dia" data-field="att_dia"  value="<?php echo get_value('att_dia') ?>" type="text" placeholder="Escribir Att Dia"  required="" name="att_dia"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_ing1">Att Ing1 </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_ing1-holder" class=" ">
                                                <input id="ctrl-att_ing1" data-field="att_ing1"  value="<?php echo get_value('att_ing1') ?>" type="text" placeholder="Escribir Att Ing1"  name="att_ing1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_sal1">Att Sal1 </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_sal1-holder" class=" ">
                                                <input id="ctrl-att_sal1" data-field="att_sal1"  value="<?php echo get_value('att_sal1') ?>" type="text" placeholder="Escribir Att Sal1"  name="att_sal1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_ing2">Att Ing2 </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_ing2-holder" class=" ">
                                                <input id="ctrl-att_ing2" data-field="att_ing2"  value="<?php echo get_value('att_ing2') ?>" type="text" placeholder="Escribir Att Ing2"  name="att_ing2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_sal2">Att Sal2 </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_sal2-holder" class=" ">
                                                <input id="ctrl-att_sal2" data-field="att_sal2"  value="<?php echo get_value('att_sal2') ?>" type="text" placeholder="Escribir Att Sal2"  name="att_sal2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_id_lic_ing1">Att Id Lic Ing1 </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_id_lic_ing1-holder" class=" ">
                                                <input id="ctrl-att_id_lic_ing1" data-field="att_id_lic_ing1"  value="<?php echo get_value('att_id_lic_ing1') ?>" type="number" placeholder="Escribir Att Id Lic Ing1" step="any"  name="att_id_lic_ing1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_id_lic_sal1">Att Id Lic Sal1 </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_id_lic_sal1-holder" class=" ">
                                                <input id="ctrl-att_id_lic_sal1" data-field="att_id_lic_sal1"  value="<?php echo get_value('att_id_lic_sal1') ?>" type="number" placeholder="Escribir Att Id Lic Sal1" step="any"  name="att_id_lic_sal1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_id_lic_ing2">Att Id Lic Ing2 </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_id_lic_ing2-holder" class=" ">
                                                <input id="ctrl-att_id_lic_ing2" data-field="att_id_lic_ing2"  value="<?php echo get_value('att_id_lic_ing2') ?>" type="number" placeholder="Escribir Att Id Lic Ing2" step="any"  name="att_id_lic_ing2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_id_lic_sal2">Att Id Lic Sal2 </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_id_lic_sal2-holder" class=" ">
                                                <input id="ctrl-att_id_lic_sal2" data-field="att_id_lic_sal2"  value="<?php echo get_value('att_id_lic_sal2') ?>" type="number" placeholder="Escribir Att Id Lic Sal2" step="any"  name="att_id_lic_sal2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_min_atraso">Att Min Atraso </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_min_atraso-holder" class=" ">
                                                <input id="ctrl-att_min_atraso" data-field="att_min_atraso"  value="<?php echo get_value('att_min_atraso') ?>" type="number" placeholder="Escribir Att Min Atraso" step="any"  name="att_min_atraso"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_min_atraso_mayor30">Att Min Atraso Mayor30 </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_min_atraso_mayor30-holder" class=" ">
                                                <input id="ctrl-att_min_atraso_mayor30" data-field="att_min_atraso_mayor30"  value="<?php echo get_value('att_min_atraso_mayor30') ?>" type="number" placeholder="Escribir Att Min Atraso Mayor30" step="any"  name="att_min_atraso_mayor30"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_min_salio_antes">Att Min Salio Antes </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_min_salio_antes-holder" class=" ">
                                                <input id="ctrl-att_min_salio_antes" data-field="att_min_salio_antes"  value="<?php echo get_value('att_min_salio_antes') ?>" type="number" placeholder="Escribir Att Min Salio Antes" step="any"  name="att_min_salio_antes"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_min_extras">Att Min Extras </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_min_extras-holder" class=" ">
                                                <input id="ctrl-att_min_extras" data-field="att_min_extras"  value="<?php echo get_value('att_min_extras') ?>" type="number" placeholder="Escribir Att Min Extras" step="any"  name="att_min_extras"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_tipo_observado">Att Tipo Observado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_tipo_observado-holder" class=" ">
                                                <input id="ctrl-att_tipo_observado" data-field="att_tipo_observado"  value="<?php echo get_value('att_tipo_observado') ?>" type="text" placeholder="Escribir Att Tipo Observado"  name="att_tipo_observado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_id_horario">Att Id Horario </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_id_horario-holder" class=" ">
                                                <input id="ctrl-att_id_horario" data-field="att_id_horario"  value="<?php echo get_value('att_id_horario') ?>" type="number" placeholder="Escribir Att Id Horario" step="any"  name="att_id_horario"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_id_horario_esp">Att Id Horario Esp </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_id_horario_esp-holder" class=" ">
                                                <input id="ctrl-att_id_horario_esp" data-field="att_id_horario_esp"  value="<?php echo get_value('att_id_horario_esp') ?>" type="number" placeholder="Escribir Att Id Horario Esp" step="any"  name="att_id_horario_esp"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="att_edificio">Att Edificio </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-att_edificio-holder" class=" ">
                                                <input id="ctrl-att_edificio" data-field="att_edificio"  value="<?php echo get_value('att_edificio') ?>" type="number" placeholder="Escribir Att Edificio" step="any"  name="att_edificio"  class="form-control " />
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
