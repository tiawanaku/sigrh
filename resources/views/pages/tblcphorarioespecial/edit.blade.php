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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblcphorarioespecial/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="he_id">He Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-he_id-holder" class=" ">
                                            <input id="ctrl-he_id" data-field="he_id"  value="<?php  echo $data['he_id']; ?>" type="number" placeholder="Escribir He Id" step="any"  required="" name="he_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="he_per_id">He Per Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-he_per_id-holder" class=" ">
                                            <input id="ctrl-he_per_id" data-field="he_per_id"  value="<?php  echo $data['he_per_id']; ?>" type="number" placeholder="Escribir He Per Id" step="any"  required="" name="he_per_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="he_tipo_horario">He Tipo Horario <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-he_tipo_horario-holder" class=" ">
                                            <input id="ctrl-he_tipo_horario" data-field="he_tipo_horario"  value="<?php  echo $data['he_tipo_horario']; ?>" type="number" placeholder="Escribir He Tipo Horario" step="any"  required="" name="he_tipo_horario"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="he_fecha">He Fecha <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-he_fecha-holder" class="input-group ">
                                            <input id="ctrl-he_fecha" data-field="he_fecha" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['he_fecha']; ?>" type="datetime" name="he_fecha" placeholder="Escribir He Fecha" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="he_ing1">He Ing1 <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-he_ing1-holder" class=" ">
                                            <input id="ctrl-he_ing1" data-field="he_ing1"  value="<?php  echo $data['he_ing1']; ?>" type="text" placeholder="Escribir He Ing1"  required="" name="he_ing1"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="he_sal1">He Sal1 </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-he_sal1-holder" class=" ">
                                            <input id="ctrl-he_sal1" data-field="he_sal1"  value="<?php  echo $data['he_sal1']; ?>" type="text" placeholder="Escribir He Sal1"  name="he_sal1"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="he_ing2">He Ing2 </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-he_ing2-holder" class=" ">
                                            <input id="ctrl-he_ing2" data-field="he_ing2"  value="<?php  echo $data['he_ing2']; ?>" type="text" placeholder="Escribir He Ing2"  name="he_ing2"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="he_sal2">He Sal2 </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-he_sal2-holder" class=" ">
                                            <input id="ctrl-he_sal2" data-field="he_sal2"  value="<?php  echo $data['he_sal2']; ?>" type="text" placeholder="Escribir He Sal2"  name="he_sal2"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="he_autoriza">He Autoriza <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-he_autoriza-holder" class=" ">
                                            <input id="ctrl-he_autoriza" data-field="he_autoriza"  value="<?php  echo $data['he_autoriza']; ?>" type="text" placeholder="Escribir He Autoriza"  required="" name="he_autoriza"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="he_documento">He Documento <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-he_documento-holder" class=" ">
                                            <input id="ctrl-he_documento" data-field="he_documento"  value="<?php  echo $data['he_documento']; ?>" type="text" placeholder="Escribir He Documento"  required="" name="he_documento"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="he_descripcion">He Descripcion <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-he_descripcion-holder" class=" ">
                                            <input id="ctrl-he_descripcion" data-field="he_descripcion"  value="<?php  echo $data['he_descripcion']; ?>" type="text" placeholder="Escribir He Descripcion"  required="" name="he_descripcion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="he_estado">He Estado <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-he_estado-holder" class=" ">
                                            <input id="ctrl-he_estado" data-field="he_estado"  value="<?php  echo $data['he_estado']; ?>" type="text" placeholder="Escribir He Estado"  required="" name="he_estado"  class="form-control " />
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
