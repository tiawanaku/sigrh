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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblkdrequisito/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rq_id">Rq Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rq_id-holder" class=" ">
                                            <input id="ctrl-rq_id" data-field="rq_id"  value="<?php  echo $data['rq_id']; ?>" type="number" placeholder="Escribir Rq Id" step="any"  required="" name="rq_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rq_descripcion">Rq Descripcion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rq_descripcion-holder" class=" ">
                                            <input id="ctrl-rq_descripcion" data-field="rq_descripcion"  value="<?php  echo $data['rq_descripcion']; ?>" type="text" placeholder="Escribir Rq Descripcion"  name="rq_descripcion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rq_estado">Rq Estado </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rq_estado-holder" class=" ">
                                            <input id="ctrl-rq_estado" data-field="rq_estado"  value="<?php  echo $data['rq_estado']; ?>" type="text" placeholder="Escribir Rq Estado"  name="rq_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rq_usuario_creacion">Rq Usuario Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rq_usuario_creacion-holder" class=" ">
                                            <input id="ctrl-rq_usuario_creacion" data-field="rq_usuario_creacion"  value="<?php  echo $data['rq_usuario_creacion']; ?>" type="number" placeholder="Escribir Rq Usuario Creacion" step="any"  name="rq_usuario_creacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rq_fecha_creacion">Rq Fecha Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rq_fecha_creacion-holder" class="input-group ">
                                            <input id="ctrl-rq_fecha_creacion" data-field="rq_fecha_creacion" class="form-control datepicker  datepicker" value="<?php  echo $data['rq_fecha_creacion']; ?>" type="datetime"  name="rq_fecha_creacion" placeholder="Escribir Rq Fecha Creacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="rq_categoria">Rq Categoria </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-rq_categoria-holder" class=" ">
                                            <input id="ctrl-rq_categoria" data-field="rq_categoria"  value="<?php  echo $data['rq_categoria']; ?>" type="text" placeholder="Escribir Rq Categoria"  name="rq_categoria"  class="form-control " />
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
