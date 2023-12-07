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
                        <form id="tblmptipoitem-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblmptipoitem.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ti_item">Ti Item <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ti_item-holder" class=" ">
                                                <input id="ctrl-ti_item" data-field="ti_item"  value="<?php echo get_value('ti_item') ?>" type="text" placeholder="Escribir Ti Item"  required="" name="ti_item"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ti_descripcion">Ti Descripcion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ti_descripcion-holder" class=" ">
                                                <input id="ctrl-ti_descripcion" data-field="ti_descripcion"  value="<?php echo get_value('ti_descripcion') ?>" type="text" placeholder="Escribir Ti Descripcion"  required="" name="ti_descripcion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ti_estado">Ti Estado <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ti_estado-holder" class=" ">
                                                <input id="ctrl-ti_estado" data-field="ti_estado"  value="<?php echo get_value('ti_estado') ?>" type="text" placeholder="Escribir Ti Estado"  required="" name="ti_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ti_tipo">Ti Tipo <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ti_tipo-holder" class=" ">
                                                <input id="ctrl-ti_tipo" data-field="ti_tipo"  value="<?php echo get_value('ti_tipo') ?>" type="text" placeholder="Escribir Ti Tipo"  required="" name="ti_tipo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ti_item_suplencia">Ti Item Suplencia </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ti_item_suplencia-holder" class=" ">
                                                <input id="ctrl-ti_item_suplencia" data-field="ti_item_suplencia"  value="<?php echo get_value('ti_item_suplencia') ?>" type="text" placeholder="Escribir Ti Item Suplencia"  name="ti_item_suplencia"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ti_orden">Ti Orden <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ti_orden-holder" class=" ">
                                                <input id="ctrl-ti_orden" data-field="ti_orden"  value="<?php echo get_value('ti_orden') ?>" type="number" placeholder="Escribir Ti Orden" step="any"  required="" name="ti_orden"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ti_tipo_pago">Ti Tipo Pago <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ti_tipo_pago-holder" class=" ">
                                                <input id="ctrl-ti_tipo_pago" data-field="ti_tipo_pago"  value="<?php echo get_value('ti_tipo_pago') ?>" type="text" placeholder="Escribir Ti Tipo Pago"  required="" name="ti_tipo_pago"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ti_control">Ti Control </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ti_control-holder" class=" ">
                                                <input id="ctrl-ti_control" data-field="ti_control"  value="<?php echo get_value('ti_control') ?>" type="text" placeholder="Escribir Ti Control"  name="ti_control"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ti_tipo_item_gral">Ti Tipo Item Gral </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ti_tipo_item_gral-holder" class=" ">
                                                <input id="ctrl-ti_tipo_item_gral" data-field="ti_tipo_item_gral"  value="<?php echo get_value('ti_tipo_item_gral') ?>" type="text" placeholder="Escribir Ti Tipo Item Gral"  name="ti_tipo_item_gral"  class="form-control " />
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
