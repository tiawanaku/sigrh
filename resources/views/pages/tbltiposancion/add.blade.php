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
                        <form id="tbltiposancion-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tbltiposancion.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ts_id">Ts Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ts_id-holder" class=" ">
                                                <input id="ctrl-ts_id" data-field="ts_id"  value="<?php echo get_value('ts_id') ?>" type="number" placeholder="Escribir Ts Id" step="any"  required="" name="ts_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ts_tiempominimo">Ts Tiempominimo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ts_tiempominimo-holder" class=" ">
                                                <input id="ctrl-ts_tiempominimo" data-field="ts_tiempominimo"  value="<?php echo get_value('ts_tiempominimo') ?>" type="number" placeholder="Escribir Ts Tiempominimo" step="any"  name="ts_tiempominimo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ts_tiempomaximo">Ts Tiempomaximo </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ts_tiempomaximo-holder" class=" ">
                                                <input id="ctrl-ts_tiempomaximo" data-field="ts_tiempomaximo"  value="<?php echo get_value('ts_tiempomaximo') ?>" type="number" placeholder="Escribir Ts Tiempomaximo" step="any"  name="ts_tiempomaximo"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ts_fa_id">Ts Fa Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ts_fa_id-holder" class=" ">
                                                <input id="ctrl-ts_fa_id" data-field="ts_fa_id"  value="<?php echo get_value('ts_fa_id') ?>" type="number" placeholder="Escribir Ts Fa Id" step="any"  required="" name="ts_fa_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ts_sanciondias">Ts Sanciondias </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ts_sanciondias-holder" class=" ">
                                                <input id="ctrl-ts_sanciondias" data-field="ts_sanciondias"  value="<?php echo get_value('ts_sanciondias') ?>" type="number" placeholder="Escribir Ts Sanciondias" step="0.1"  name="ts_sanciondias"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ts_descripcion">Ts Descripcion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ts_descripcion-holder" class=" ">
                                                <input id="ctrl-ts_descripcion" data-field="ts_descripcion"  value="<?php echo get_value('ts_descripcion') ?>" type="text" placeholder="Escribir Ts Descripcion"  required="" name="ts_descripcion"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ts_estado">Ts Estado <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ts_estado-holder" class=" ">
                                                <input id="ctrl-ts_estado" data-field="ts_estado"  value="<?php echo get_value('ts_estado') ?>" type="text" placeholder="Escribir Ts Estado"  required="" name="ts_estado"  class="form-control " />
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
