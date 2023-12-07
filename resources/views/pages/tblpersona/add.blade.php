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
                        <form id="tblpersona-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblpersona.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="per_tipo_doc">Per Tipo Doc <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-per_tipo_doc-holder" class=" ">
                                                <input id="ctrl-per_tipo_doc" data-field="per_tipo_doc"  value="<?php echo get_value('per_tipo_doc') ?>" type="number" placeholder="Escribir Per Tipo Doc" step="any"  required="" name="per_tipo_doc"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="per_num_doc">Per Num Doc <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-per_num_doc-holder" class=" ">
                                                <input id="ctrl-per_num_doc" data-field="per_num_doc"  value="<?php echo get_value('per_num_doc') ?>" type="text" placeholder="Escribir Per Num Doc"  required="" name="per_num_doc"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="per_lugar_exp">Per Lugar Exp <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-per_lugar_exp-holder" class=" ">
                                                <input id="ctrl-per_lugar_exp" data-field="per_lugar_exp"  value="<?php echo get_value('per_lugar_exp') ?>" type="number" placeholder="Escribir Per Lugar Exp" step="any"  required="" name="per_lugar_exp"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="per_ap_paterno">Per Ap Paterno </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-per_ap_paterno-holder" class=" ">
                                                <input id="ctrl-per_ap_paterno" data-field="per_ap_paterno"  value="<?php echo get_value('per_ap_paterno') ?>" type="text" placeholder="Escribir Per Ap Paterno"  name="per_ap_paterno"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="per_ap_materno">Per Ap Materno </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-per_ap_materno-holder" class=" ">
                                                <input id="ctrl-per_ap_materno" data-field="per_ap_materno"  value="<?php echo get_value('per_ap_materno') ?>" type="text" placeholder="Escribir Per Ap Materno"  name="per_ap_materno"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="per_nombres">Per Nombres <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-per_nombres-holder" class=" ">
                                                <input id="ctrl-per_nombres" data-field="per_nombres"  value="<?php echo get_value('per_nombres') ?>" type="text" placeholder="Escribir Per Nombres"  required="" name="per_nombres"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="per_ap_casada">Per Ap Casada </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-per_ap_casada-holder" class=" ">
                                                <input id="ctrl-per_ap_casada" data-field="per_ap_casada"  value="<?php echo get_value('per_ap_casada') ?>" type="text" placeholder="Escribir Per Ap Casada"  name="per_ap_casada"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="per_sexo">Per Sexo <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-per_sexo-holder" class=" ">
                                                <?php
                                                    $options = Menu::perSexo();
                                                    if(!empty($options)){
                                                    foreach($options as $option){
                                                    $value = $option['value'];
                                                    $label = $option['label'];
                                                    //check if current option is checked option
                                                    $checked = Html::get_field_checked('per_sexo', $value, "");
                                                ?>
                                                <label class="form-check">
                                                <input class="form-check-input" <?php echo $checked ?>  value="<?php echo $value ?>" type="radio" required=""   name="per_sexo" />
                                                <span class="form-check-label"><?php echo $label ?></span>
                                                </label>
                                                <?php
                                                    }
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="per_fecha_nac">Per Fecha Nac </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-per_fecha_nac-holder" class="input-group ">
                                                <input id="ctrl-per_fecha_nac" data-field="per_fecha_nac" class="form-control datepicker  datepicker" value="<?php echo get_value('per_fecha_nac') ?>" type="datetime"  name="per_fecha_nac" placeholder="Escribir Per Fecha Nac" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="per_procedencia">Per Procedencia <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-per_procedencia-holder" class=" ">
                                                <input id="ctrl-per_procedencia" data-field="per_procedencia"  value="<?php echo get_value('per_procedencia') ?>" type="number" placeholder="Escribir Per Procedencia" step="any"  required="" name="per_procedencia"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="per_serie_libreta_militar">Per Serie Libreta Militar </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-per_serie_libreta_militar-holder" class=" ">
                                                <input id="ctrl-per_serie_libreta_militar" data-field="per_serie_libreta_militar"  value="<?php echo get_value('per_serie_libreta_militar') ?>" type="text" placeholder="Escribir Per Serie Libreta Militar"  name="per_serie_libreta_militar"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="per_lugar_nac">Per Lugar Nac </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-per_lugar_nac-holder" class=" ">
                                                <input id="ctrl-per_lugar_nac" data-field="per_lugar_nac"  value="<?php echo get_value('per_lugar_nac') ?>" type="number" placeholder="Escribir Per Lugar Nac" step="any"  name="per_lugar_nac"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="per_estado_civil">Per Estado Civil </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-per_estado_civil-holder" class=" ">
                                                <input id="ctrl-per_estado_civil" data-field="per_estado_civil"  value="<?php echo get_value('per_estado_civil') ?>" type="number" placeholder="Escribir Per Estado Civil" step="any"  name="per_estado_civil"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="per_fecha_registro">Per Fecha Registro </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-per_fecha_registro-holder" class="input-group ">
                                                <input id="ctrl-per_fecha_registro" data-field="per_fecha_registro" class="form-control datepicker  datepicker" value="<?php echo get_value('per_fecha_registro') ?>" type="datetime"  name="per_fecha_registro" placeholder="Escribir Per Fecha Registro" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
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
