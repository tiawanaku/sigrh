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
                        <form id="tblpladetboletahistorico-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblpladetboletahistorico.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dbh_id">Dbh Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dbh_id-holder" class=" ">
                                                <input id="ctrl-dbh_id" data-field="dbh_id"  value="<?php echo get_value('dbh_id') ?>" type="number" placeholder="Escribir Dbh Id" step="any"  required="" name="dbh_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dbh_cb_id">Dbh Cb Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dbh_cb_id-holder" class=" ">
                                                <input id="ctrl-dbh_cb_id" data-field="dbh_cb_id"  value="<?php echo get_value('dbh_cb_id') ?>" type="number" placeholder="Escribir Dbh Cb Id" step="any"  required="" name="dbh_cb_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dbh_fa_id">Dbh Fa Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dbh_fa_id-holder" class=" ">
                                                <input id="ctrl-dbh_fa_id" data-field="dbh_fa_id"  value="<?php echo get_value('dbh_fa_id') ?>" type="number" placeholder="Escribir Dbh Fa Id" step="any"  required="" name="dbh_fa_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dbh_valor">Dbh Valor <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dbh_valor-holder" class=" ">
                                                <input id="ctrl-dbh_valor" data-field="dbh_valor"  value="<?php echo get_value('dbh_valor') ?>" type="number" placeholder="Escribir Dbh Valor" step="0.1"  required="" name="dbh_valor"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dbh_estado">Dbh Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dbh_estado-holder" class=" ">
                                                <input id="ctrl-dbh_estado" data-field="dbh_estado"  value="<?php echo get_value('dbh_estado') ?>" type="text" placeholder="Escribir Dbh Estado"  name="dbh_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dbh_tr_id">Dbh Tr Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dbh_tr_id-holder" class=" ">
                                                <input id="ctrl-dbh_tr_id" data-field="dbh_tr_id"  value="<?php echo get_value('dbh_tr_id') ?>" type="number" placeholder="Escribir Dbh Tr Id" step="any"  name="dbh_tr_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="dbh_cs_id">Dbh Cs Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-dbh_cs_id-holder" class=" ">
                                                <input id="ctrl-dbh_cs_id" data-field="dbh_cs_id"  value="<?php echo get_value('dbh_cs_id') ?>" type="number" placeholder="Escribir Dbh Cs Id" step="any"  name="dbh_cs_id"  class="form-control " />
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
