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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblplaproceso/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pc_id">Pc Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pc_id-holder" class=" ">
                                            <input id="ctrl-pc_id" data-field="pc_id"  value="<?php  echo $data['pc_id']; ?>" type="number" placeholder="Escribir Pc Id" step="any"  required="" name="pc_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pc_pr_id">Pc Pr Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pc_pr_id-holder" class=" ">
                                            <input id="ctrl-pc_pr_id" data-field="pc_pr_id"  value="<?php  echo $data['pc_pr_id']; ?>" type="number" placeholder="Escribir Pc Pr Id" step="any"  required="" name="pc_pr_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pc_titulo">Pc Titulo <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pc_titulo-holder" class=" ">
                                            <input id="ctrl-pc_titulo" data-field="pc_titulo"  value="<?php  echo $data['pc_titulo']; ?>" type="text" placeholder="Escribir Pc Titulo"  required="" name="pc_titulo"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pc_fecha_inicio">Pc Fecha Inicio </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pc_fecha_inicio-holder" class="input-group ">
                                            <input id="ctrl-pc_fecha_inicio" data-field="pc_fecha_inicio" class="form-control datepicker  datepicker" value="<?php  echo $data['pc_fecha_inicio']; ?>" type="datetime"  name="pc_fecha_inicio" placeholder="Escribir Pc Fecha Inicio" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pc_fecha_fin">Pc Fecha Fin </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pc_fecha_fin-holder" class="input-group ">
                                            <input id="ctrl-pc_fecha_fin" data-field="pc_fecha_fin" class="form-control datepicker  datepicker" value="<?php  echo $data['pc_fecha_fin']; ?>" type="datetime"  name="pc_fecha_fin" placeholder="Escribir Pc Fecha Fin" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pc_mn_id">Pc Mn Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pc_mn_id-holder" class=" ">
                                            <input id="ctrl-pc_mn_id" data-field="pc_mn_id"  value="<?php  echo $data['pc_mn_id']; ?>" type="number" placeholder="Escribir Pc Mn Id" step="any"  required="" name="pc_mn_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pc_ufv">Pc Ufv </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pc_ufv-holder" class=" ">
                                            <input id="ctrl-pc_ufv" data-field="pc_ufv"  value="<?php  echo $data['pc_ufv']; ?>" type="number" placeholder="Escribir Pc Ufv" step="0.1"  name="pc_ufv"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pc_ufv_fecha">Pc Ufv Fecha </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pc_ufv_fecha-holder" class="input-group ">
                                            <input id="ctrl-pc_ufv_fecha" data-field="pc_ufv_fecha" class="form-control datepicker  datepicker" value="<?php  echo $data['pc_ufv_fecha']; ?>" type="datetime"  name="pc_ufv_fecha" placeholder="Escribir Pc Ufv Fecha" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pc_estado">Pc Estado <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pc_estado-holder" class=" ">
                                            <input id="ctrl-pc_estado" data-field="pc_estado"  value="<?php  echo $data['pc_estado']; ?>" type="text" placeholder="Escribir Pc Estado"  required="" name="pc_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pc_prefijo">Pc Prefijo </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pc_prefijo-holder" class=" ">
                                            <input id="ctrl-pc_prefijo" data-field="pc_prefijo"  value="<?php  echo $data['pc_prefijo']; ?>" type="text" placeholder="Escribir Pc Prefijo"  name="pc_prefijo"  class="form-control " />
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
