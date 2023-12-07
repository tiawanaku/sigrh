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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblbonoantiguedadescala/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ba_id">Ba Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ba_id-holder" class=" ">
                                            <input id="ctrl-ba_id" data-field="ba_id"  value="<?php  echo $data['ba_id']; ?>" type="number" placeholder="Escribir Ba Id" step="any"  required="" name="ba_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ba_tiempo_minimo">Ba Tiempo Minimo </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ba_tiempo_minimo-holder" class=" ">
                                            <input id="ctrl-ba_tiempo_minimo" data-field="ba_tiempo_minimo"  value="<?php  echo $data['ba_tiempo_minimo']; ?>" type="number" placeholder="Escribir Ba Tiempo Minimo" step="any"  name="ba_tiempo_minimo"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ba_tiempo_maximo">Ba Tiempo Maximo </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ba_tiempo_maximo-holder" class=" ">
                                            <input id="ctrl-ba_tiempo_maximo" data-field="ba_tiempo_maximo"  value="<?php  echo $data['ba_tiempo_maximo']; ?>" type="number" placeholder="Escribir Ba Tiempo Maximo" step="any"  name="ba_tiempo_maximo"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ba_porcentaje">Ba Porcentaje </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ba_porcentaje-holder" class=" ">
                                            <input id="ctrl-ba_porcentaje" data-field="ba_porcentaje"  value="<?php  echo $data['ba_porcentaje']; ?>" type="number" placeholder="Escribir Ba Porcentaje" step="0.1"  name="ba_porcentaje"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ba_estado">Ba Estado </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ba_estado-holder" class=" ">
                                            <input id="ctrl-ba_estado" data-field="ba_estado"  value="<?php  echo $data['ba_estado']; ?>" type="text" placeholder="Escribir Ba Estado"  name="ba_estado"  class="form-control " />
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
