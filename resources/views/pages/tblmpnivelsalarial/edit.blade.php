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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblmpnivelsalarial/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ns_id">Ns Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ns_id-holder" class=" ">
                                            <input id="ctrl-ns_id" data-field="ns_id"  value="<?php  echo $data['ns_id']; ?>" type="number" placeholder="Escribir Ns Id" step="any"  required="" name="ns_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ns_clase">Ns Clase <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ns_clase-holder" class=" ">
                                            <input id="ctrl-ns_clase" data-field="ns_clase"  value="<?php  echo $data['ns_clase']; ?>" type="text" placeholder="Escribir Ns Clase"  required="" name="ns_clase"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ns_nivel">Ns Nivel <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ns_nivel-holder" class=" ">
                                            <input id="ctrl-ns_nivel" data-field="ns_nivel"  value="<?php  echo $data['ns_nivel']; ?>" type="text" placeholder="Escribir Ns Nivel"  required="" name="ns_nivel"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ns_descripcion">Ns Descripcion <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ns_descripcion-holder" class=" ">
                                            <input id="ctrl-ns_descripcion" data-field="ns_descripcion"  value="<?php  echo $data['ns_descripcion']; ?>" type="text" placeholder="Escribir Ns Descripcion"  required="" name="ns_descripcion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ns_haber_basico">Ns Haber Basico <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ns_haber_basico-holder" class=" ">
                                            <input id="ctrl-ns_haber_basico" data-field="ns_haber_basico"  value="<?php  echo $data['ns_haber_basico']; ?>" type="number" placeholder="Escribir Ns Haber Basico" step="0.1"  required="" name="ns_haber_basico"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ns_estado">Ns Estado <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ns_estado-holder" class=" ">
                                            <input id="ctrl-ns_estado" data-field="ns_estado"  value="<?php  echo $data['ns_estado']; ?>" type="text" placeholder="Escribir Ns Estado"  required="" name="ns_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ns_incremento">Ns Incremento </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ns_incremento-holder" class=" ">
                                            <input id="ctrl-ns_incremento" data-field="ns_incremento"  value="<?php  echo $data['ns_incremento']; ?>" type="number" placeholder="Escribir Ns Incremento" step="0.1"  name="ns_incremento"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ns_pr_id">Ns Pr Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ns_pr_id-holder" class=" ">
                                            <input id="ctrl-ns_pr_id" data-field="ns_pr_id"  value="<?php  echo $data['ns_pr_id']; ?>" type="number" placeholder="Escribir Ns Pr Id" step="any"  name="ns_pr_id"  class="form-control " />
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
