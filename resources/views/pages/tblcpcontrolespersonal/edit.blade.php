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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblcpcontrolespersonal/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cp_id">Cp Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cp_id-holder" class=" ">
                                            <input id="ctrl-cp_id" data-field="cp_id"  value="<?php  echo $data['cp_id']; ?>" type="number" placeholder="Escribir Cp Id" step="any"  required="" name="cp_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cp_per_id">Cp Per Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cp_per_id-holder" class=" ">
                                            <input id="ctrl-cp_per_id" data-field="cp_per_id"  value="<?php  echo $data['cp_per_id']; ?>" type="number" placeholder="Escribir Cp Per Id" step="any"  required="" name="cp_per_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cp_edificio">Cp Edificio <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cp_edificio-holder" class=" ">
                                            <input id="ctrl-cp_edificio" data-field="cp_edificio"  value="<?php  echo $data['cp_edificio']; ?>" type="number" placeholder="Escribir Cp Edificio" step="any"  required="" name="cp_edificio"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cp_fecha_inicio">Cp Fecha Inicio <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cp_fecha_inicio-holder" class="input-group ">
                                            <input id="ctrl-cp_fecha_inicio" data-field="cp_fecha_inicio" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['cp_fecha_inicio']; ?>" type="datetime" name="cp_fecha_inicio" placeholder="Escribir Cp Fecha Inicio" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cp_fecha_final">Cp Fecha Final </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cp_fecha_final-holder" class="input-group ">
                                            <input id="ctrl-cp_fecha_final" data-field="cp_fecha_final" class="form-control datepicker  datepicker"  value="<?php  echo $data['cp_fecha_final']; ?>" type="datetime" name="cp_fecha_final" placeholder="Escribir Cp Fecha Final" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
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
                                            <input id="ctrl-cp_estado" data-field="cp_estado"  value="<?php  echo $data['cp_estado']; ?>" type="text" placeholder="Escribir Cp Estado"  required="" name="cp_estado"  class="form-control " />
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
