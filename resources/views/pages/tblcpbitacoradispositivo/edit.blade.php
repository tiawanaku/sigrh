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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("tblcpbitacoradispositivo/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="bd_id">Bd Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-bd_id-holder" class=" ">
                                            <input id="ctrl-bd_id" data-field="bd_id"  value="<?php  echo $data['bd_id']; ?>" type="number" placeholder="Escribir Bd Id" step="any"  required="" name="bd_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="bd_di_id">Bd Di Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-bd_di_id-holder" class=" ">
                                            <select required=""  id="ctrl-bd_di_id" data-field="bd_di_id" name="bd_di_id"  placeholder="Seleccione un valor"    class="form-select" >
                                            <option value="">Seleccione un valor</option>
                                            <?php
                                                $options = $comp_model->bd_di_id_option_list() ?? [];
                                                foreach($options as $option){
                                                $value = $option->value;
                                                $label = $option->label ?? $value;
                                                $selected = ( $value == $data['bd_di_id'] ? 'selected' : null );
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
                                        <label class="control-label" for="bd_fecha">Bd Fecha <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-bd_fecha-holder" class="input-group ">
                                            <input id="ctrl-bd_fecha" data-field="bd_fecha" class="form-control datepicker  datepicker" required="" value="<?php  echo $data['bd_fecha']; ?>" type="datetime"  name="bd_fecha" placeholder="Escribir Bd Fecha" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="bd_estado_com_abrir">Bd Estado Com Abrir <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-bd_estado_com_abrir-holder" class=" ">
                                            <input id="ctrl-bd_estado_com_abrir" data-field="bd_estado_com_abrir"  value="<?php  echo $data['bd_estado_com_abrir']; ?>" type="text" placeholder="Escribir Bd Estado Com Abrir"  required="" name="bd_estado_com_abrir"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="bd_estado_exp_archivo">Bd Estado Exp Archivo </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-bd_estado_exp_archivo-holder" class=" ">
                                            <input id="ctrl-bd_estado_exp_archivo" data-field="bd_estado_exp_archivo"  value="<?php  echo $data['bd_estado_exp_archivo']; ?>" type="text" placeholder="Escribir Bd Estado Exp Archivo"  name="bd_estado_exp_archivo"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="bd_marcas_leidas">Bd Marcas Leidas </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-bd_marcas_leidas-holder" class=" ">
                                            <input id="ctrl-bd_marcas_leidas" data-field="bd_marcas_leidas"  value="<?php  echo $data['bd_marcas_leidas']; ?>" type="number" placeholder="Escribir Bd Marcas Leidas" step="any"  name="bd_marcas_leidas"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="bd_marcas_descargadas">Bd Marcas Descargadas </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-bd_marcas_descargadas-holder" class=" ">
                                            <input id="ctrl-bd_marcas_descargadas" data-field="bd_marcas_descargadas"  value="<?php  echo $data['bd_marcas_descargadas']; ?>" type="number" placeholder="Escribir Bd Marcas Descargadas" step="any"  name="bd_marcas_descargadas"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="bd_estado_com_cerrar">Bd Estado Com Cerrar <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-bd_estado_com_cerrar-holder" class=" ">
                                            <input id="ctrl-bd_estado_com_cerrar" data-field="bd_estado_com_cerrar"  value="<?php  echo $data['bd_estado_com_cerrar']; ?>" type="text" placeholder="Escribir Bd Estado Com Cerrar"  required="" name="bd_estado_com_cerrar"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="bd_estado_exito">Bd Estado Exito </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-bd_estado_exito-holder" class=" ">
                                            <input id="ctrl-bd_estado_exito" data-field="bd_estado_exito"  value="<?php  echo $data['bd_estado_exito']; ?>" type="text" placeholder="Escribir Bd Estado Exito"  name="bd_estado_exito"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="bd_observaciones">Bd Observaciones </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-bd_observaciones-holder" class=" ">
                                            <input id="ctrl-bd_observaciones" data-field="bd_observaciones"  value="<?php  echo $data['bd_observaciones']; ?>" type="text" placeholder="Escribir Bd Observaciones"  name="bd_observaciones"  class="form-control " />
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
