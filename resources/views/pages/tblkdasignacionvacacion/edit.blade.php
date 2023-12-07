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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblkdasignacionvacacion/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="va_id">Va Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-va_id-holder" class=" ">
                                            <input id="ctrl-va_id" data-field="va_id"  value="<?php  echo $data['va_id']; ?>" type="number" placeholder="Escribir Va Id" step="any"  required="" name="va_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="va_per_id">Va Per Id </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-va_per_id-holder" class=" ">
                                            <input id="ctrl-va_per_id" data-field="va_per_id"  value="<?php  echo $data['va_per_id']; ?>" type="number" placeholder="Escribir Va Per Id" step="any"  name="va_per_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="va_gestion_inicio">Va Gestion Inicio </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-va_gestion_inicio-holder" class=" ">
                                            <input id="ctrl-va_gestion_inicio" data-field="va_gestion_inicio"  value="<?php  echo $data['va_gestion_inicio']; ?>" type="number" placeholder="Escribir Va Gestion Inicio" step="any"  name="va_gestion_inicio"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="va_gestion_fin">Va Gestion Fin </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-va_gestion_fin-holder" class=" ">
                                            <input id="ctrl-va_gestion_fin" data-field="va_gestion_fin"  value="<?php  echo $data['va_gestion_fin']; ?>" type="number" placeholder="Escribir Va Gestion Fin" step="any"  name="va_gestion_fin"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="va_dias_ley">Va Dias Ley </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-va_dias_ley-holder" class=" ">
                                            <input id="ctrl-va_dias_ley" data-field="va_dias_ley"  value="<?php  echo $data['va_dias_ley']; ?>" type="number" placeholder="Escribir Va Dias Ley" step="any"  name="va_dias_ley"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="va_dias_restantes">Va Dias Restantes </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-va_dias_restantes-holder" class=" ">
                                            <input id="ctrl-va_dias_restantes" data-field="va_dias_restantes"  value="<?php  echo $data['va_dias_restantes']; ?>" type="number" placeholder="Escribir Va Dias Restantes" step="any"  name="va_dias_restantes"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="va_horas_restantes">Va Horas Restantes </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-va_horas_restantes-holder" class=" ">
                                            <input id="ctrl-va_horas_restantes" data-field="va_horas_restantes"  value="<?php  echo $data['va_horas_restantes']; ?>" type="number" placeholder="Escribir Va Horas Restantes" step="any"  name="va_horas_restantes"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="va_fecha_ingreso_r">Va Fecha Ingreso R </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-va_fecha_ingreso_r-holder" class="input-group ">
                                            <input id="ctrl-va_fecha_ingreso_r" data-field="va_fecha_ingreso_r" class="form-control datepicker  datepicker" value="<?php  echo $data['va_fecha_ingreso_r']; ?>" type="datetime"  name="va_fecha_ingreso_r" placeholder="Escribir Va Fecha Ingreso R" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="va_anio">Va Anio </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-va_anio-holder" class=" ">
                                            <input id="ctrl-va_anio" data-field="va_anio"  value="<?php  echo $data['va_anio']; ?>" type="number" placeholder="Escribir Va Anio" step="any"  name="va_anio"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="va_estado">Va Estado </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-va_estado-holder" class=" ">
                                            <input id="ctrl-va_estado" data-field="va_estado"  value="<?php  echo $data['va_estado']; ?>" type="text" placeholder="Escribir Va Estado"  name="va_estado"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="va_usuario_creacion">Va Usuario Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-va_usuario_creacion-holder" class=" ">
                                            <input id="ctrl-va_usuario_creacion" data-field="va_usuario_creacion"  value="<?php  echo $data['va_usuario_creacion']; ?>" type="number" placeholder="Escribir Va Usuario Creacion" step="any"  name="va_usuario_creacion"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="va_fecha_creacion">Va Fecha Creacion </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-va_fecha_creacion-holder" class="input-group ">
                                            <input id="ctrl-va_fecha_creacion" data-field="va_fecha_creacion" class="form-control datepicker  datepicker" value="<?php  echo $data['va_fecha_creacion']; ?>" type="datetime"  name="va_fecha_creacion" placeholder="Escribir Va Fecha Creacion" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
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
