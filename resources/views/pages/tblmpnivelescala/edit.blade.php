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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblmpnivelescala/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ne_id">Ne Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ne_id-holder" class=" ">
                                            <input id="ctrl-ne_id" data-field="ne_id"  value="<?php  echo $data['ne_id']; ?>" type="number" placeholder="Escribir Ne Id" step="any"  required="" name="ne_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ne_descripcion">Ne Descripcion <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ne_descripcion-holder" class=" ">
                                            <input id="ctrl-ne_descripcion" data-field="ne_descripcion"  value="<?php  echo $data['ne_descripcion']; ?>" type="text" placeholder="Escribir Ne Descripcion"  required="" name="ne_descripcion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ne_sub_descripcion">Ne Sub Descripcion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ne_sub_descripcion-holder" class=" ">
                                            <input id="ctrl-ne_sub_descripcion" data-field="ne_sub_descripcion"  value="<?php  echo $data['ne_sub_descripcion']; ?>" type="text" placeholder="Escribir Ne Sub Descripcion"  name="ne_sub_descripcion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ne_secuencial">Ne Secuencial <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ne_secuencial-holder" class=" ">
                                            <input id="ctrl-ne_secuencial" data-field="ne_secuencial"  value="<?php  echo $data['ne_secuencial']; ?>" type="number" placeholder="Escribir Ne Secuencial" step="any"  required="" name="ne_secuencial"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ne_estado">Ne Estado <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ne_estado-holder" class=" ">
                                            <input id="ctrl-ne_estado" data-field="ne_estado"  value="<?php  echo $data['ne_estado']; ?>" type="text" placeholder="Escribir Ne Estado"  required="" name="ne_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ne_pr_id">Ne Pr Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ne_pr_id-holder" class=" ">
                                            <input id="ctrl-ne_pr_id" data-field="ne_pr_id"  value="<?php  echo $data['ne_pr_id']; ?>" type="number" placeholder="Escribir Ne Pr Id" step="any"  name="ne_pr_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ne_categoria">Ne Categoria </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ne_categoria-holder" class=" ">
                                            <input id="ctrl-ne_categoria" data-field="ne_categoria"  value="<?php  echo $data['ne_categoria']; ?>" type="text" placeholder="Escribir Ne Categoria"  name="ne_categoria"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ne_nivel_interno">Ne Nivel Interno </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ne_nivel_interno-holder" class=" ">
                                            <input id="ctrl-ne_nivel_interno" data-field="ne_nivel_interno"  value="<?php  echo $data['ne_nivel_interno']; ?>" type="number" placeholder="Escribir Ne Nivel Interno" step="any"  name="ne_nivel_interno"  class="form-control " />
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
