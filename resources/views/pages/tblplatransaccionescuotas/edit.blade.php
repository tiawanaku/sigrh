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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblplatransaccionescuotas/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tc_tr_id">Tc Tr Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tc_tr_id-holder" class=" ">
                                            <input id="ctrl-tc_tr_id" data-field="tc_tr_id"  value="<?php  echo $data['tc_tr_id']; ?>" type="number" placeholder="Escribir Tc Tr Id" step="any"  required="" name="tc_tr_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tc_cant_cuotas">Tc Cant Cuotas <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tc_cant_cuotas-holder" class=" ">
                                            <input id="ctrl-tc_cant_cuotas" data-field="tc_cant_cuotas"  value="<?php  echo $data['tc_cant_cuotas']; ?>" type="number" placeholder="Escribir Tc Cant Cuotas" step="any"  required="" name="tc_cant_cuotas"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tc_monto">Tc Monto <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tc_monto-holder" class=" ">
                                            <input id="ctrl-tc_monto" data-field="tc_monto"  value="<?php  echo $data['tc_monto']; ?>" type="number" placeholder="Escribir Tc Monto" step="0.1"  required="" name="tc_monto"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tc_montobs">Tc Montobs </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tc_montobs-holder" class=" ">
                                            <input id="ctrl-tc_montobs" data-field="tc_montobs"  value="<?php  echo $data['tc_montobs']; ?>" type="number" placeholder="Escribir Tc Montobs" step="0.1"  name="tc_montobs"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tc_estado">Tc Estado <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tc_estado-holder" class=" ">
                                            <input id="ctrl-tc_estado" data-field="tc_estado"  value="<?php  echo $data['tc_estado']; ?>" type="text" placeholder="Escribir Tc Estado"  required="" name="tc_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tc_fechapago">Tc Fechapago </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tc_fechapago-holder" class="input-group ">
                                            <input id="ctrl-tc_fechapago" data-field="tc_fechapago" class="form-control datepicker  datepicker" value="<?php  echo $data['tc_fechapago']; ?>" type="datetime"  name="tc_fechapago" placeholder="Escribir Tc Fechapago" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tc_fechareprogamado">Tc Fechareprogamado </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tc_fechareprogamado-holder" class="input-group ">
                                            <input id="ctrl-tc_fechareprogamado" data-field="tc_fechareprogamado" class="form-control datepicker  datepicker" value="<?php  echo $data['tc_fechareprogamado']; ?>" type="datetime"  name="tc_fechareprogamado" placeholder="Escribir Tc Fechareprogamado" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tc_tipopago">Tc Tipopago </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tc_tipopago-holder" class=" ">
                                            <input id="ctrl-tc_tipopago" data-field="tc_tipopago"  value="<?php  echo $data['tc_tipopago']; ?>" type="number" placeholder="Escribir Tc Tipopago" step="any"  name="tc_tipopago"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tc_obs">Tc Obs </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tc_obs-holder" class=" ">
                                            <textarea placeholder="Escribir Tc Obs" id="ctrl-tc_obs" data-field="tc_obs"  rows="5" name="tc_obs" class=" form-control"><?php  echo $data['tc_obs']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tc_fechadeposito">Tc Fechadeposito </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tc_fechadeposito-holder" class="input-group ">
                                            <input id="ctrl-tc_fechadeposito" data-field="tc_fechadeposito" class="form-control datepicker  datepicker" value="<?php  echo $data['tc_fechadeposito']; ?>" type="datetime"  name="tc_fechadeposito" placeholder="Escribir Tc Fechadeposito" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tc_nrofactura">Tc Nrofactura </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tc_nrofactura-holder" class=" ">
                                            <input id="ctrl-tc_nrofactura" data-field="tc_nrofactura"  value="<?php  echo $data['tc_nrofactura']; ?>" type="text" placeholder="Escribir Tc Nrofactura"  name="tc_nrofactura"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tc_usuario">Tc Usuario </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tc_usuario-holder" class=" ">
                                            <input id="ctrl-tc_usuario" data-field="tc_usuario"  value="<?php  echo $data['tc_usuario']; ?>" type="number" placeholder="Escribir Tc Usuario" step="any"  name="tc_usuario"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tc_fecharegistro">Tc Fecharegistro </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tc_fecharegistro-holder" class="input-group ">
                                            <input id="ctrl-tc_fecharegistro" data-field="tc_fecharegistro" class="form-control datepicker  datepicker" value="<?php  echo $data['tc_fecharegistro']; ?>" type="datetime"  name="tc_fecharegistro" placeholder="Escribir Tc Fecharegistro" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tc_tipohaberdebe">Tc Tipohaberdebe </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tc_tipohaberdebe-holder" class=" ">
                                            <input id="ctrl-tc_tipohaberdebe" data-field="tc_tipohaberdebe"  value="<?php  echo $data['tc_tipohaberdebe']; ?>" type="text" placeholder="Escribir Tc Tipohaberdebe"  name="tc_tipohaberdebe"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tc_tiposervicio">Tc Tiposervicio </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tc_tiposervicio-holder" class=" ">
                                            <input id="ctrl-tc_tiposervicio" data-field="tc_tiposervicio"  value="<?php  echo $data['tc_tiposervicio']; ?>" type="text" placeholder="Escribir Tc Tiposervicio"  name="tc_tiposervicio"  class="form-control " />
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
