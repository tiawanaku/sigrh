<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = "Editar"; //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="edit" data-page-url="{{ url()->full() }}">
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
                        <div class="h5 font-weight-bold text-primary">Editar</div>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblcplicenciajustificada/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="lj_per_id">Lj Per Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-lj_per_id-holder" class=" ">
                                            <input id="ctrl-lj_per_id" data-field="lj_per_id"  value="<?php  echo $data['lj_per_id']; ?>" type="number" placeholder="Escribir Lj Per Id" step="any"  required="" name="lj_per_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="lj_tipo_licencia">Lj Tipo Licencia </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-lj_tipo_licencia-holder" class=" ">
                                            <input id="ctrl-lj_tipo_licencia" data-field="lj_tipo_licencia"  value="<?php  echo $data['lj_tipo_licencia']; ?>" type="number" placeholder="Escribir Lj Tipo Licencia" step="any"  name="lj_tipo_licencia"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="lj_fecha_inicial">Lj Fecha Inicial </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-lj_fecha_inicial-holder" class="input-group ">
                                            <input id="ctrl-lj_fecha_inicial" data-field="lj_fecha_inicial" class="form-control datepicker  datepicker"  value="<?php  echo $data['lj_fecha_inicial']; ?>" type="datetime" name="lj_fecha_inicial" placeholder="Escribir Lj Fecha Inicial" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="lj_fecha_final">Lj Fecha Final </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-lj_fecha_final-holder" class="input-group ">
                                            <input id="ctrl-lj_fecha_final" data-field="lj_fecha_final" class="form-control datepicker  datepicker"  value="<?php  echo $data['lj_fecha_final']; ?>" type="datetime" name="lj_fecha_final" placeholder="Escribir Lj Fecha Final" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="lj_fecha_emision">Lj Fecha Emision </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-lj_fecha_emision-holder" class="input-group ">
                                            <input id="ctrl-lj_fecha_emision" data-field="lj_fecha_emision" class="form-control datepicker  datepicker" value="<?php  echo $data['lj_fecha_emision']; ?>" type="datetime"  name="lj_fecha_emision" placeholder="Escribir Lj Fecha Emision" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="lj_hora_salida">Lj Hora Salida </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-lj_hora_salida-holder" class=" ">
                                            <input id="ctrl-lj_hora_salida" data-field="lj_hora_salida"  value="<?php  echo $data['lj_hora_salida']; ?>" type="text" placeholder="Escribir Lj Hora Salida"  name="lj_hora_salida"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="lj_hora_retorno">Lj Hora Retorno </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-lj_hora_retorno-holder" class=" ">
                                            <input id="ctrl-lj_hora_retorno" data-field="lj_hora_retorno"  value="<?php  echo $data['lj_hora_retorno']; ?>" type="text" placeholder="Escribir Lj Hora Retorno"  name="lj_hora_retorno"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="lj_motivo">Lj Motivo </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-lj_motivo-holder" class=" ">
                                            <input id="ctrl-lj_motivo" data-field="lj_motivo"  value="<?php  echo $data['lj_motivo']; ?>" type="text" placeholder="Escribir Lj Motivo"  name="lj_motivo"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="lj_lugar">Lj Lugar </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-lj_lugar-holder" class=" ">
                                            <input id="ctrl-lj_lugar" data-field="lj_lugar"  value="<?php  echo $data['lj_lugar']; ?>" type="text" placeholder="Escribir Lj Lugar"  name="lj_lugar"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="lj_per_id_autoriza">Lj Per Id Autoriza </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-lj_per_id_autoriza-holder" class=" ">
                                            <input id="ctrl-lj_per_id_autoriza" data-field="lj_per_id_autoriza"  value="<?php  echo $data['lj_per_id_autoriza']; ?>" type="text" placeholder="Escribir Lj Per Id Autoriza"  name="lj_per_id_autoriza"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="lj_estado">Lj Estado <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-lj_estado-holder" class=" ">
                                            <input id="ctrl-lj_estado" data-field="lj_estado"  value="<?php  echo $data['lj_estado']; ?>" type="text" placeholder="Escribir Lj Estado"  required="" name="lj_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-ajax-status"></div>
                        <!--[form-content-end]-->
                        <!--[form-button-start]-->
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">
                            Actualizar
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
    <!--pageautofill-->
$(document).ready(function(){
	// custom javascript | jquery codes
});

</script>
@endsection
