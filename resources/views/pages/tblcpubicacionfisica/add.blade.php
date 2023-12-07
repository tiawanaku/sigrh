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
                        <form id="tblcpubicacionfisica-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblcpubicacionfisica.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="uf_id">Uf Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-uf_id-holder" class=" ">
                                                <input id="ctrl-uf_id" data-field="uf_id"  value="<?php echo get_value('uf_id') ?>" type="number" placeholder="Escribir Uf Id" step="any"  required="" name="uf_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="uf_per_id">Uf Per Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-uf_per_id-holder" class=" ">
                                                <input id="ctrl-uf_per_id" data-field="uf_per_id"  value="<?php echo get_value('uf_per_id') ?>" type="number" placeholder="Escribir Uf Per Id" step="any"  required="" name="uf_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="uf_edificio">Uf Edificio <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-uf_edificio-holder" class=" ">
                                                <input id="ctrl-uf_edificio" data-field="uf_edificio"  value="<?php echo get_value('uf_edificio') ?>" type="number" placeholder="Escribir Uf Edificio" step="any"  required="" name="uf_edificio"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="uf_piso">Uf Piso </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-uf_piso-holder" class=" ">
                                                <input id="ctrl-uf_piso" data-field="uf_piso"  value="<?php echo get_value('uf_piso') ?>" type="text" placeholder="Escribir Uf Piso"  name="uf_piso"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="uf_bloque">Uf Bloque </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-uf_bloque-holder" class=" ">
                                                <input id="ctrl-uf_bloque" data-field="uf_bloque"  value="<?php echo get_value('uf_bloque') ?>" type="text" placeholder="Escribir Uf Bloque"  name="uf_bloque"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="uf_telefono_interno">Uf Telefono Interno </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-uf_telefono_interno-holder" class=" ">
                                                <input id="ctrl-uf_telefono_interno" data-field="uf_telefono_interno"  value="<?php echo get_value('uf_telefono_interno') ?>" type="number" placeholder="Escribir Uf Telefono Interno" step="any"  name="uf_telefono_interno"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="uf_telefono_oficina">Uf Telefono Oficina </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-uf_telefono_oficina-holder" class=" ">
                                                <input id="ctrl-uf_telefono_oficina" data-field="uf_telefono_oficina"  value="<?php echo get_value('uf_telefono_oficina') ?>" type="number" placeholder="Escribir Uf Telefono Oficina" step="any"  name="uf_telefono_oficina"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="uf_nombre_oficina">Uf Nombre Oficina </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-uf_nombre_oficina-holder" class=" ">
                                                <input id="ctrl-uf_nombre_oficina" data-field="uf_nombre_oficina"  value="<?php echo get_value('uf_nombre_oficina') ?>" type="text" placeholder="Escribir Uf Nombre Oficina"  name="uf_nombre_oficina"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="uf_fecha_inicio">Uf Fecha Inicio <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-uf_fecha_inicio-holder" class="input-group ">
                                                <input id="ctrl-uf_fecha_inicio" data-field="uf_fecha_inicio" class="form-control datepicker  datepicker"  required="" value="<?php echo get_value('uf_fecha_inicio') ?>" type="datetime" name="uf_fecha_inicio" placeholder="Escribir Uf Fecha Inicio" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="uf_fecha_final">Uf Fecha Final </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-uf_fecha_final-holder" class="input-group ">
                                                <input id="ctrl-uf_fecha_final" data-field="uf_fecha_final" class="form-control datepicker  datepicker"  value="<?php echo get_value('uf_fecha_final') ?>" type="datetime" name="uf_fecha_final" placeholder="Escribir Uf Fecha Final" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="uf_estado">Uf Estado <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-uf_estado-holder" class=" ">
                                                <input id="ctrl-uf_estado" data-field="uf_estado"  value="<?php echo get_value('uf_estado') ?>" type="text" placeholder="Escribir Uf Estado"  required="" name="uf_estado"  class="form-control " />
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
