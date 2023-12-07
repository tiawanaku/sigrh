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
                        <form id="tblbsagenteinvolucrado-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblbsagenteinvolucrado.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="aginvexpre_id">Aginvexpre Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-aginvexpre_id-holder" class=" ">
                                                <input id="ctrl-aginvexpre_id" data-field="aginvexpre_id"  value="<?php echo get_value('aginvexpre_id') ?>" type="number" placeholder="Escribir Aginvexpre Id" step="any"  required="" name="aginvexpre_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="aginvexpre_exp_id">Aginvexpre Exp Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-aginvexpre_exp_id-holder" class=" ">
                                                <select  id="ctrl-aginvexpre_exp_id" data-field="aginvexpre_exp_id" name="aginvexpre_exp_id"  placeholder="Seleccione un valor"    class="form-select" >
                                                <option value="">Seleccione un valor</option>
                                                <?php 
                                                    $options = $comp_model->aginvexpre_exp_id_option_list() ?? [];
                                                    foreach($options as $option){
                                                    $value = $option->value;
                                                    $label = $option->label ?? $value;
                                                    $selected = Html::get_field_selected('aginvexpre_exp_id', $value, "");
                                                ?>
                                                <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                                <?php echo $label; ?>
                                                </option>
                                                <?php
                                                    }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="aginvexpre_aginv_id">Aginvexpre Aginv Id </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-aginvexpre_aginv_id-holder" class=" ">
                                                <input id="ctrl-aginvexpre_aginv_id" data-field="aginvexpre_aginv_id"  value="<?php echo get_value('aginvexpre_aginv_id') ?>" type="number" placeholder="Escribir Aginvexpre Aginv Id" step="any"  name="aginvexpre_aginv_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="aginvexpre_estado">Aginvexpre Estado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-aginvexpre_estado-holder" class=" ">
                                                <input id="ctrl-aginvexpre_estado" data-field="aginvexpre_estado"  value="<?php echo get_value('aginvexpre_estado') ?>" type="text" placeholder="Escribir Aginvexpre Estado"  name="aginvexpre_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="aginvexpre_fechamod">Aginvexpre Fechamod </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-aginvexpre_fechamod-holder" class="input-group ">
                                                <input id="ctrl-aginvexpre_fechamod" data-field="aginvexpre_fechamod" class="form-control datepicker  datepicker" value="<?php echo get_value('aginvexpre_fechamod') ?>" type="datetime"  name="aginvexpre_fechamod" placeholder="Escribir Aginvexpre Fechamod" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
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
