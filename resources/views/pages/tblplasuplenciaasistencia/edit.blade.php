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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblplasuplenciaasistencia/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="plasupasist_id">Plasupasist Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-plasupasist_id-holder" class=" ">
                                            <input id="ctrl-plasupasist_id" data-field="plasupasist_id"  value="<?php  echo $data['plasupasist_id']; ?>" type="number" placeholder="Escribir Plasupasist Id" step="any"  required="" name="plasupasist_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="plasupasist_dias_trabajados">Plasupasist Dias Trabajados </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-plasupasist_dias_trabajados-holder" class=" ">
                                            <input id="ctrl-plasupasist_dias_trabajados" data-field="plasupasist_dias_trabajados"  value="<?php  echo $data['plasupasist_dias_trabajados']; ?>" type="number" placeholder="Escribir Plasupasist Dias Trabajados" step="any"  name="plasupasist_dias_trabajados"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="plasupasist_mes">Plasupasist Mes </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-plasupasist_mes-holder" class=" ">
                                            <input id="ctrl-plasupasist_mes" data-field="plasupasist_mes"  value="<?php  echo $data['plasupasist_mes']; ?>" type="number" placeholder="Escribir Plasupasist Mes" step="any"  name="plasupasist_mes"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="plasupasist_gestion">Plasupasist Gestion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-plasupasist_gestion-holder" class=" ">
                                            <input id="ctrl-plasupasist_gestion" data-field="plasupasist_gestion"  value="<?php  echo $data['plasupasist_gestion']; ?>" type="number" placeholder="Escribir Plasupasist Gestion" step="any"  name="plasupasist_gestion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="plasupasist_per_id_control_personal">Plasupasist Per Id Control Personal </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-plasupasist_per_id_control_personal-holder" class=" ">
                                            <input id="ctrl-plasupasist_per_id_control_personal" data-field="plasupasist_per_id_control_personal"  value="<?php  echo $data['plasupasist_per_id_control_personal']; ?>" type="number" placeholder="Escribir Plasupasist Per Id Control Personal" step="any"  name="plasupasist_per_id_control_personal"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="plasupasist_per_id">Plasupasist Per Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-plasupasist_per_id-holder" class=" ">
                                            <input id="ctrl-plasupasist_per_id" data-field="plasupasist_per_id"  value="<?php  echo $data['plasupasist_per_id']; ?>" type="number" placeholder="Escribir Plasupasist Per Id" step="any"  name="plasupasist_per_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="plasupasist_per_id_responsable">Plasupasist Per Id Responsable </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-plasupasist_per_id_responsable-holder" class=" ">
                                            <input id="ctrl-plasupasist_per_id_responsable" data-field="plasupasist_per_id_responsable"  value="<?php  echo $data['plasupasist_per_id_responsable']; ?>" type="number" placeholder="Escribir Plasupasist Per Id Responsable" step="any"  name="plasupasist_per_id_responsable"  class="form-control " />
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
