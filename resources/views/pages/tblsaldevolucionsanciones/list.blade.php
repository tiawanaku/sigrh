<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $field_name = request()->segment(3);
    $field_value = request()->segment(4);
    $total_records = $records->total();
    $limit = $records->perPage();
    $record_count = count($records);
    $pageTitle = "Tbl Sal Devolucion Sanciones"; //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="list" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3" >
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center gap-3">
                <div class="col  " >
                    <div class="">
                        <div class="h5 font-weight-bold text-primary">Tbl Sal Devolucion Sanciones</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("tblsaldevolucionsanciones/add", true) ?>" >
                    <i class="material-icons">add</i>                               
                    Agregar nuevo 
                </a>
            </div>
            <div class="col-md-3  " >
                <!-- Page drop down search component -->
                <form  class="search" action="{{ url()->current() }}" method="get">
                    <input type="hidden" name="page" value="1" />
                    <div class="input-group">
                        <input value="<?php echo get_value('search'); ?>" class="form-control page-search" type="text" name="search"  placeholder="Buscar" />
                        <button class="btn btn-primary"><i class="material-icons">search</i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>
<div  class="" >
    <div class="container-fluid">
        <div class="row ">
            <div class="col comp-grid " >
                <div  class=" page-content" >
                    <div id="tblsaldevolucionsanciones-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblsaldevolucionsanciones/", $field_name, $field_value); ?>
                            <?php Html::display_page_errors($errors); ?>
                            <div class="filter-tags mb-2">
                                <?php Html::filter_tag('search', __('Search')); ?>
                            </div>
                            <table class="table table-hover table-striped table-sm text-left">
                                <thead class="table-header ">
                                    <tr>
                                        <th class="td-checkbox">
                                        <label class="form-check-label">
                                        <input class="toggle-check-all form-check-input" type="checkbox" />
                                        </label>
                                        </th>
                                        <th class="td-dev_id" > Dev Id</th>
                                        <th class="td-dev_per_id" > Dev Per Id</th>
                                        <th class="td-dev_cod_proceso" > Dev Cod Proceso</th>
                                        <th class="td-dev_cod_cargo" > Dev Cod Cargo</th>
                                        <th class="td-dev_secuencial" > Dev Secuencial</th>
                                        <th class="td-dev_tipo_fun" > Dev Tipo Fun</th>
                                        <th class="td-dev_prefijo" > Dev Prefijo</th>
                                        <th class="td-dev_tipo_aportante" > Dev Tipo Aportante</th>
                                        <th class="td-dev_beneficiario" > Dev Beneficiario</th>
                                        <th class="td-dev_cod_sancion" > Dev Cod Sancion</th>
                                        <th class="td-dev_dias_sancion" > Dev Dias Sancion</th>
                                        <th class="td-dev_dias_devolucion" > Dev Dias Devolucion</th>
                                        <th class="td-dev_motivo_devolucion" > Dev Motivo Devolucion</th>
                                        <th class="td-dev_tipo_doc" > Dev Tipo Doc</th>
                                        <th class="td-dev_num_doc" > Dev Num Doc</th>
                                        <th class="td-dev_estado" > Dev Estado</th>
                                        <th class="td-dev_fecha_registro" > Dev Fecha Registro</th>
                                        <th class="td-dev_usuario_registro" > Dev Usuario Registro</th>
                                        <th class="td-dev_fecha_salarios" > Dev Fecha Salarios</th>
                                        <th class="td-dev_usuario_planilla" > Dev Usuario Planilla</th>
                                        <th class="td-dev_nro_planilla" > Dev Nro Planilla</th>
                                        <th class="td-dev_nro_planilla_salarios" > Dev Nro Planilla Salarios</th>
                                        <th class="td-dev_basico" > Dev Basico</th>
                                        <th class="td-btn"></th>
                                    </tr>
                                </thead>
                                <?php
                                    if($total_records){
                                ?>
                                <tbody class="page-data">
                                    <!--record-->
                                    <?php
                                        $counter = 0;
                                        foreach($records as $data){
                                        $rec_id = ($data['dev_id'] ? urlencode($data['dev_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['dev_id'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <!--PageComponentStart-->
                                        <td class="td-dev_id">
                                            <a href="<?php print_link("/tblsaldevolucionsanciones/view/$data[dev_id]") ?>"><?php echo $data['dev_id']; ?></a>
                                        </td>
                                        <td class="td-dev_per_id">
                                            <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("tblpersona/view/$data[dev_per_id]?subpage=1") ?>">
                                            <i class="material-icons">visibility</i> <?php echo "Tbl Persona" ?>
                                        </a>
                                    </td>
                                    <td class="td-dev_cod_proceso">
                                        <?php echo  $data['dev_cod_proceso'] ; ?>
                                    </td>
                                    <td class="td-dev_cod_cargo">
                                        <?php echo  $data['dev_cod_cargo'] ; ?>
                                    </td>
                                    <td class="td-dev_secuencial">
                                        <?php echo  $data['dev_secuencial'] ; ?>
                                    </td>
                                    <td class="td-dev_tipo_fun">
                                        <?php echo  $data['dev_tipo_fun'] ; ?>
                                    </td>
                                    <td class="td-dev_prefijo">
                                        <?php echo  $data['dev_prefijo'] ; ?>
                                    </td>
                                    <td class="td-dev_tipo_aportante">
                                        <?php echo  $data['dev_tipo_aportante'] ; ?>
                                    </td>
                                    <td class="td-dev_beneficiario">
                                        <?php echo  $data['dev_beneficiario'] ; ?>
                                    </td>
                                    <td class="td-dev_cod_sancion">
                                        <?php echo  $data['dev_cod_sancion'] ; ?>
                                    </td>
                                    <td class="td-dev_dias_sancion">
                                        <?php echo  $data['dev_dias_sancion'] ; ?>
                                    </td>
                                    <td class="td-dev_dias_devolucion">
                                        <?php echo  $data['dev_dias_devolucion'] ; ?>
                                    </td>
                                    <td class="td-dev_motivo_devolucion">
                                        <?php echo  $data['dev_motivo_devolucion'] ; ?>
                                    </td>
                                    <td class="td-dev_tipo_doc">
                                        <?php echo  $data['dev_tipo_doc'] ; ?>
                                    </td>
                                    <td class="td-dev_num_doc">
                                        <?php echo  $data['dev_num_doc'] ; ?>
                                    </td>
                                    <td class="td-dev_estado">
                                        <?php echo  $data['dev_estado'] ; ?>
                                    </td>
                                    <td class="td-dev_fecha_registro">
                                        <?php echo  $data['dev_fecha_registro'] ; ?>
                                    </td>
                                    <td class="td-dev_usuario_registro">
                                        <?php echo  $data['dev_usuario_registro'] ; ?>
                                    </td>
                                    <td class="td-dev_fecha_salarios">
                                        <?php echo  $data['dev_fecha_salarios'] ; ?>
                                    </td>
                                    <td class="td-dev_usuario_planilla">
                                        <?php echo  $data['dev_usuario_planilla'] ; ?>
                                    </td>
                                    <td class="td-dev_nro_planilla">
                                        <?php echo  $data['dev_nro_planilla'] ; ?>
                                    </td>
                                    <td class="td-dev_nro_planilla_salarios">
                                        <?php echo  $data['dev_nro_planilla_salarios'] ; ?>
                                    </td>
                                    <td class="td-dev_basico">
                                        <?php echo  $data['dev_basico'] ; ?>
                                    </td>
                                    <!--PageComponentEnd-->
                                    <td class="td-btn">
                                        <div class="dropdown" >
                                            <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                            <i class="material-icons">menu</i> 
                                            </button>
                                            <ul class="dropdown-menu">
                                                <a class="dropdown-item "   href="<?php print_link("tblsaldevolucionsanciones/view/$rec_id"); ?>" >
                                                <i class="material-icons">visibility</i> View
                                            </a>
                                            <a class="dropdown-item "   href="<?php print_link("tblsaldevolucionsanciones/edit/$rec_id"); ?>" >
                                            <i class="material-icons">edit</i> Edit
                                        </a>
                                        <a class="dropdown-item record-delete-btn" data-prompt-msg="¿Seguro que quieres borrar este registro?" data-display-style="modal" href="<?php print_link("tblsaldevolucionsanciones/delete/$rec_id"); ?>" >
                                        <i class="material-icons">delete_sweep</i> Delete
                                    </a>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php 
                        }
                    ?>
                    <!--endrecord-->
                </tbody>
                <tbody class="search-data"></tbody>
                <?php
                    }
                    else{
                ?>
                <tbody class="page-data">
                    <tr>
                        <td class="bg-light text-center text-muted animated bounce p-3" colspan="1000">
                            <i class="material-icons">block</i> ningún record fue encontrado
                        </td>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
            </table>
        </div>
        <?php
            if($show_footer){
        ?>
        <div class=" mt-3">
            <div class="row align-items-center justify-content-between">    
                <div class="col-md-auto d-flex">    
                    <button data-prompt-msg="¿Está seguro de que desea eliminar estos registros?
                    " data-display-style="modal" data-url="<?php print_link("tblsaldevolucionsanciones/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                    <i class="material-icons">delete_sweep</i> Eliminar seleccionado
                    </button>
                </div>
                <div class="col">   
                    <?php
                        if($show_pagination == true){
                        $pager = new Pagination($total_records, $record_count);
                        $pager->show_page_count = false;
                        $pager->show_record_count = true;
                        $pager->show_page_limit =false;
                        $pager->limit = $limit;
                        $pager->show_page_number_list = true;
                        $pager->pager_link_range=5;
                        $pager->render();
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
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
