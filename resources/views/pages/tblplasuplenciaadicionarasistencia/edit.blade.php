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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblplasuplenciaadicionarasistencia/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="plasupadasist_id">Plasupadasist Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-plasupadasist_id-holder" class=" ">
                                            <input id="ctrl-plasupadasist_id" data-field="plasupadasist_id"  value="<?php  echo $data['plasupadasist_id']; ?>" type="number" placeholder="Escribir Plasupadasist Id" step="any"  required="" name="plasupadasist_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="plasupadasist_plasup_id">Plasupadasist Plasup Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-plasupadasist_plasup_id-holder" class=" ">
                                            <input id="ctrl-plasupadasist_plasup_id" data-field="plasupadasist_plasup_id"  value="<?php  echo $data['plasupadasist_plasup_id']; ?>" type="number" placeholder="Escribir Plasupadasist Plasup Id" step="any"  name="plasupadasist_plasup_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="plasupadasist_plasupasist_id">Plasupadasist Plasupasist Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-plasupadasist_plasupasist_id-holder" class=" ">
                                            <input id="ctrl-plasupadasist_plasupasist_id" data-field="plasupadasist_plasupasist_id"  value="<?php  echo $data['plasupadasist_plasupasist_id']; ?>" type="number" placeholder="Escribir Plasupadasist Plasupasist Id" step="any"  name="plasupadasist_plasupasist_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="plasupadasist_fecha_recep_plaasist">Plasupadasist Fecha Recep Plaasist </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-plasupadasist_fecha_recep_plaasist-holder" class="input-group ">
                                            <input id="ctrl-plasupadasist_fecha_recep_plaasist" data-field="plasupadasist_fecha_recep_plaasist" class="form-control datepicker  datepicker" value="<?php  echo $data['plasupadasist_fecha_recep_plaasist']; ?>" type="datetime"  name="plasupadasist_fecha_recep_plaasist" placeholder="Escribir Plasupadasist Fecha Recep Plaasist" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="plasupadasist_estado">Plasupadasist Estado </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-plasupadasist_estado-holder" class=" ">
                                            <input id="ctrl-plasupadasist_estado" data-field="plasupadasist_estado"  value="<?php  echo $data['plasupadasist_estado']; ?>" type="text" placeholder="Escribir Plasupadasist Estado"  name="plasupadasist_estado"  class="form-control " />
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
