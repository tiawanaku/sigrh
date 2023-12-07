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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblpermisocategoriaprogramatica/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pcp_rol">Pcp Rol <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pcp_rol-holder" class=" ">
                                            <input id="ctrl-pcp_rol" data-field="pcp_rol"  value="<?php  echo $data['pcp_rol']; ?>" type="number" placeholder="Escribir Pcp Rol" step="any"  required="" name="pcp_rol"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pcp_ue">Pcp Ue <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pcp_ue-holder" class=" ">
                                            <input id="ctrl-pcp_ue" data-field="pcp_ue"  value="<?php  echo $data['pcp_ue']; ?>" type="number" placeholder="Escribir Pcp Ue" step="any"  required="" name="pcp_ue"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pcp_cp_id">Pcp Cp Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pcp_cp_id-holder" class=" ">
                                            <input id="ctrl-pcp_cp_id" data-field="pcp_cp_id"  value="<?php  echo $data['pcp_cp_id']; ?>" type="number" placeholder="Escribir Pcp Cp Id" step="any"  name="pcp_cp_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pcp_estado">Pcp Estado <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pcp_estado-holder" class=" ">
                                            <input id="ctrl-pcp_estado" data-field="pcp_estado"  value="<?php  echo $data['pcp_estado']; ?>" type="text" placeholder="Escribir Pcp Estado"  required="" name="pcp_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pcp_us_id">Pcp Us Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pcp_us_id-holder" class=" ">
                                            <input id="ctrl-pcp_us_id" data-field="pcp_us_id"  value="<?php  echo $data['pcp_us_id']; ?>" type="number" placeholder="Escribir Pcp Us Id" step="any"  required="" name="pcp_us_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pcp_pr_id">Pcp Pr Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pcp_pr_id-holder" class=" ">
                                            <input id="ctrl-pcp_pr_id" data-field="pcp_pr_id"  value="<?php  echo $data['pcp_pr_id']; ?>" type="number" placeholder="Escribir Pcp Pr Id" step="any"  required="" name="pcp_pr_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pcp_fecha_asignacion">Pcp Fecha Asignacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pcp_fecha_asignacion-holder" class="input-group ">
                                            <input id="ctrl-pcp_fecha_asignacion" data-field="pcp_fecha_asignacion" class="form-control datepicker  datepicker" value="<?php  echo $data['pcp_fecha_asignacion']; ?>" type="datetime"  name="pcp_fecha_asignacion" placeholder="Escribir Pcp Fecha Asignacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pcp_fecha_baja">Pcp Fecha Baja </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pcp_fecha_baja-holder" class="input-group ">
                                            <input id="ctrl-pcp_fecha_baja" data-field="pcp_fecha_baja" class="form-control datepicker  datepicker" value="<?php  echo $data['pcp_fecha_baja']; ?>" type="datetime"  name="pcp_fecha_baja" placeholder="Escribir Pcp Fecha Baja" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
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
