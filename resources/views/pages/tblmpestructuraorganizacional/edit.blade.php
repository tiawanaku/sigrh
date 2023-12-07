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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblmpestructuraorganizacional/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="eo_id">Eo Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-eo_id-holder" class=" ">
                                            <input id="ctrl-eo_id" data-field="eo_id"  value="<?php  echo $data['eo_id']; ?>" type="number" placeholder="Escribir Eo Id" step="any"  required="" name="eo_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="eo_pr_id">Eo Pr Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-eo_pr_id-holder" class=" ">
                                            <input id="ctrl-eo_pr_id" data-field="eo_pr_id"  value="<?php  echo $data['eo_pr_id']; ?>" type="number" placeholder="Escribir Eo Pr Id" step="any"  required="" name="eo_pr_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="eo_cp_id">Eo Cp Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-eo_cp_id-holder" class=" ">
                                            <input id="ctrl-eo_cp_id" data-field="eo_cp_id"  value="<?php  echo $data['eo_cp_id']; ?>" type="number" placeholder="Escribir Eo Cp Id" step="any"  name="eo_cp_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="eo_prog">Eo Prog <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-eo_prog-holder" class=" ">
                                            <input id="ctrl-eo_prog" data-field="eo_prog"  value="<?php  echo $data['eo_prog']; ?>" type="number" placeholder="Escribir Eo Prog" step="any"  required="" name="eo_prog"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="eo_sprog">Eo Sprog <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-eo_sprog-holder" class=" ">
                                            <input id="ctrl-eo_sprog" data-field="eo_sprog"  value="<?php  echo $data['eo_sprog']; ?>" type="number" placeholder="Escribir Eo Sprog" step="any"  required="" name="eo_sprog"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="eo_proy">Eo Proy <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-eo_proy-holder" class=" ">
                                            <input id="ctrl-eo_proy" data-field="eo_proy"  value="<?php  echo $data['eo_proy']; ?>" type="number" placeholder="Escribir Eo Proy" step="any"  required="" name="eo_proy"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="eo_obract">Eo Obract <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-eo_obract-holder" class=" ">
                                            <input id="ctrl-eo_obract" data-field="eo_obract"  value="<?php  echo $data['eo_obract']; ?>" type="number" placeholder="Escribir Eo Obract" step="any"  required="" name="eo_obract"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="eo_unidad">Eo Unidad <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-eo_unidad-holder" class=" ">
                                            <input id="ctrl-eo_unidad" data-field="eo_unidad"  value="<?php  echo $data['eo_unidad']; ?>" type="number" placeholder="Escribir Eo Unidad" step="any"  required="" name="eo_unidad"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="eo_descripcion">Eo Descripcion <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-eo_descripcion-holder" class=" ">
                                            <input id="ctrl-eo_descripcion" data-field="eo_descripcion"  value="<?php  echo $data['eo_descripcion']; ?>" type="text" placeholder="Escribir Eo Descripcion"  required="" name="eo_descripcion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="eo_estado">Eo Estado <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-eo_estado-holder" class=" ">
                                            <input id="ctrl-eo_estado" data-field="eo_estado"  value="<?php  echo $data['eo_estado']; ?>" type="text" placeholder="Escribir Eo Estado"  required="" name="eo_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="eo_cod_superior">Eo Cod Superior </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-eo_cod_superior-holder" class=" ">
                                            <input id="ctrl-eo_cod_superior" data-field="eo_cod_superior"  value="<?php  echo $data['eo_cod_superior']; ?>" type="number" placeholder="Escribir Eo Cod Superior" step="any"  name="eo_cod_superior"  class="form-control " />
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
