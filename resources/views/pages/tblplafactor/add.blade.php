<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = "Agregar nuevo"; //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="add" data-page-url="{{ url()->full() }}">
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
                        <div class="h5 font-weight-bold text-primary">Agregar nuevo</div>
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
                        <form id="tblplafactor-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblplafactor.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="fa_id">Fa Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-fa_id-holder" class=" ">
                                                <input id="ctrl-fa_id" data-field="fa_id"  value="<?php echo get_value('fa_id') ?>" type="number" placeholder="Escribir Fa Id" step="any"  required="" name="fa_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="fa_descripcion">Fa Descripcion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-fa_descripcion-holder" class=" ">
                                                <input id="ctrl-fa_descripcion" data-field="fa_descripcion"  value="<?php echo get_value('fa_descripcion') ?>" type="text" placeholder="Escribir Fa Descripcion"  required="" name="fa_descripcion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="fa_signo">Fa Signo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-fa_signo-holder" class=" ">
                                                <input id="ctrl-fa_signo" data-field="fa_signo"  value="<?php echo get_value('fa_signo') ?>" type="text" placeholder="Escribir Fa Signo"  name="fa_signo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="fa_ac_id">Fa Ac Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-fa_ac_id-holder" class=" ">
                                                <input id="ctrl-fa_ac_id" data-field="fa_ac_id"  value="<?php echo get_value('fa_ac_id') ?>" type="number" placeholder="Escribir Fa Ac Id" step="any"  name="fa_ac_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="fa_tipo_calculo">Fa Tipo Calculo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-fa_tipo_calculo-holder" class=" ">
                                                <input id="ctrl-fa_tipo_calculo" data-field="fa_tipo_calculo"  value="<?php echo get_value('fa_tipo_calculo') ?>" type="text" placeholder="Escribir Fa Tipo Calculo"  name="fa_tipo_calculo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="fa_valor">Fa Valor </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-fa_valor-holder" class=" ">
                                                <input id="ctrl-fa_valor" data-field="fa_valor"  value="<?php echo get_value('fa_valor') ?>" type="number" placeholder="Escribir Fa Valor" step="0.1"  name="fa_valor"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="fa_tipo">Fa Tipo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-fa_tipo-holder" class=" ">
                                                <input id="ctrl-fa_tipo" data-field="fa_tipo"  value="<?php echo get_value('fa_tipo') ?>" type="text" placeholder="Escribir Fa Tipo"  name="fa_tipo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="fa_orden">Fa Orden </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-fa_orden-holder" class=" ">
                                                <input id="ctrl-fa_orden" data-field="fa_orden"  value="<?php echo get_value('fa_orden') ?>" type="number" placeholder="Escribir Fa Orden" step="any"  name="fa_orden"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="fa_estado">Fa Estado <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-fa_estado-holder" class=" ">
                                                <input id="ctrl-fa_estado" data-field="fa_estado"  value="<?php echo get_value('fa_estado') ?>" type="text" placeholder="Escribir Fa Estado"  required="" name="fa_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-ajax-status"></div>
                            <!--[form-button-start]-->
                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                <button class="btn btn-primary" type="submit">
                                Entregar
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
    
$(document).ready(function(){
	// custom javascript | jquery codes
});

</script>
@endsection
