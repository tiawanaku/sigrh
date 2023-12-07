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
                        <form id="tblcphuellas-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblcphuellas.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="hu_id">Hu Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-hu_id-holder" class=" ">
                                                <input id="ctrl-hu_id" data-field="hu_id"  value="<?php echo get_value('hu_id') ?>" type="number" placeholder="Escribir Hu Id" step="any"  required="" name="hu_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="hu_per_id">Hu Per Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-hu_per_id-holder" class=" ">
                                                <input id="ctrl-hu_per_id" data-field="hu_per_id"  value="<?php echo get_value('hu_per_id') ?>" type="number" placeholder="Escribir Hu Per Id" step="any"  name="hu_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="hu_nro_huella">Hu Nro Huella </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-hu_nro_huella-holder" class=" ">
                                                <input id="ctrl-hu_nro_huella" data-field="hu_nro_huella"  value="<?php echo get_value('hu_nro_huella') ?>" type="number" placeholder="Escribir Hu Nro Huella" step="any"  name="hu_nro_huella"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="hu_huella">Hu Huella </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-hu_huella-holder" class=" ">
                                                <textarea placeholder="Escribir Hu Huella" id="ctrl-hu_huella" data-field="hu_huella"  rows="5" name="hu_huella" class=" form-control"><?php echo get_value('hu_huella') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="hu_privilegio">Hu Privilegio </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-hu_privilegio-holder" class=" ">
                                                <input id="ctrl-hu_privilegio" data-field="hu_privilegio"  value="<?php echo get_value('hu_privilegio') ?>" type="number" placeholder="Escribir Hu Privilegio" step="any"  name="hu_privilegio"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="hu_password">Hu Password </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-hu_password-holder" class="input-group ">
                                                <input id="ctrl-hu_password" data-field="hu_password"  value="<?php echo get_value('hu_password') ?>" type="password" placeholder="Escribir Hu Password"  name="hu_password"  class="form-control  password password-strength" />
                                                <button type="button" class="btn btn-outline-secondary btn-toggle-password">
                                                <i class="material-icons">visibility</i>
                                                </button>
                                            </div>
                                            <div class="password-strength-msg">
                                                <small class="fw-bold">Debería contener</small>
                                                <small class="length chip">6 caracteres min</small>
                                                <small class="caps chip">Letra mayúscula</small>
                                                <small class="number chip">Número</small>
                                                <small class="special chip">Símbolo</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="confirm_password">Confirm Password </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-confirm_password-holder" class="input-group ">
                                                <input id="ctrl-hu_password-confirm" data-match="#ctrl-hu_password"  class="form-control password-confirm " type="password" name="confirm_password"  placeholder="Confirm Password" />
                                                <button type="button" class="btn btn-outline-secondary btn-toggle-password">
                                                <i class="material-icons">visibility</i>
                                                </button>
                                                <div class="invalid-feedback">
                                                    Password does not match
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="hu_estado">Hu Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-hu_estado-holder" class=" ">
                                                <input id="ctrl-hu_estado" data-field="hu_estado"  value="<?php echo get_value('hu_estado') ?>" type="text" placeholder="Escribir Hu Estado"  name="hu_estado"  class="form-control " />
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
