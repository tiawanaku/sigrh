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
    $pageTitle = "Tbl Rfs Registro Sap"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Rfs Registro Sap</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("tblrfsregistrosap/add", true) ?>" >
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
                    <div id="tblrfsregistrosap-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblrfsregistrosap/", $field_name, $field_value); ?>
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
                                        <th class="td-rs_id" > Rs Id</th>
                                        <th class="td-rs_per_id" > Rs Per Id</th>
                                        <th class="td-rs_ca_num_item" > Rs Ca Num Item</th>
                                        <th class="td-rs_ca_id_actual" > Rs Ca Id Actual</th>
                                        <th class="td-rs_pu_id_actual" > Rs Pu Id Actual</th>
                                        <th class="td-rs_eo_id_actual" > Rs Eo Id Actual</th>
                                        <th class="td-rs_eo_descripcion_actual" > Rs Eo Descripcion Actual</th>
                                        <th class="td-rs_eo_destino" > Rs Eo Destino</th>
                                        <th class="td-rs_eo_descripcion_destino" > Rs Eo Descripcion Destino</th>
                                        <th class="td-rs_ca_id_destino" > Rs Ca Id Destino</th>
                                        <th class="td-rs_pu_id_destino" > Rs Pu Id Destino</th>
                                        <th class="td-rs_justificacion_tecnica" > Rs Justificacion Tecnica</th>
                                        <th class="td-rs_objetivo_propuesto" > Rs Objetivo Propuesto</th>
                                        <th class="td-rs_formacion" > Rs Formacion</th>
                                        <th class="td-rs_rc_id" > Rs Rc Id</th>
                                        <th class="td-rs_nro_informe_tecnico" > Rs Nro Informe Tecnico</th>
                                        <th class="td-rs_nro_informe_legal" > Rs Nro Informe Legal</th>
                                        <th class="td-rs_cp_da" > Rs Cp Da</th>
                                        <th class="td-rs_cp_ue" > Rs Cp Ue</th>
                                        <th class="td-rs_fecha_registro" > Rs Fecha Registro</th>
                                        <th class="td-rs_fecha_modificacion" > Rs Fecha Modificacion</th>
                                        <th class="td-rs_usuario_registro" > Rs Usuario Registro</th>
                                        <th class="td-rs_valida_destino" > Rs Valida Destino</th>
                                        <th class="td-rs_ratifica_origen" > Rs Ratifica Origen</th>
                                        <th class="td-rs_cp_da_destino" > Rs Cp Da Destino</th>
                                        <th class="td-rs_cp_ue_destino" > Rs Cp Ue Destino</th>
                                        <th class="td-rs_estado" > Rs Estado</th>
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
                                        $rec_id = ($data['rs_id'] ? urlencode($data['rs_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['rs_id'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <!--PageComponentStart-->
                                        <td class="td-rs_id">
                                            <a href="<?php print_link("/tblrfsregistrosap/view/$data[rs_id]") ?>"><?php echo $data['rs_id']; ?></a>
                                        </td>
                                        <td class="td-rs_per_id">
                                            <?php echo  $data['rs_per_id'] ; ?>
                                        </td>
                                        <td class="td-rs_ca_num_item">
                                            <?php echo  $data['rs_ca_num_item'] ; ?>
                                        </td>
                                        <td class="td-rs_ca_id_actual">
                                            <?php echo  $data['rs_ca_id_actual'] ; ?>
                                        </td>
                                        <td class="td-rs_pu_id_actual">
                                            <?php echo  $data['rs_pu_id_actual'] ; ?>
                                        </td>
                                        <td class="td-rs_eo_id_actual">
                                            <?php echo  $data['rs_eo_id_actual'] ; ?>
                                        </td>
                                        <td class="td-rs_eo_descripcion_actual">
                                            <?php echo  $data['rs_eo_descripcion_actual'] ; ?>
                                        </td>
                                        <td class="td-rs_eo_destino">
                                            <?php echo  $data['rs_eo_destino'] ; ?>
                                        </td>
                                        <td class="td-rs_eo_descripcion_destino">
                                            <?php echo  $data['rs_eo_descripcion_destino'] ; ?>
                                        </td>
                                        <td class="td-rs_ca_id_destino">
                                            <?php echo  $data['rs_ca_id_destino'] ; ?>
                                        </td>
                                        <td class="td-rs_pu_id_destino">
                                            <?php echo  $data['rs_pu_id_destino'] ; ?>
                                        </td>
                                        <td class="td-rs_justificacion_tecnica">
                                            <?php echo  $data['rs_justificacion_tecnica'] ; ?>
                                        </td>
                                        <td class="td-rs_objetivo_propuesto">
                                            <?php echo  $data['rs_objetivo_propuesto'] ; ?>
                                        </td>
                                        <td class="td-rs_formacion">
                                            <?php echo  $data['rs_formacion'] ; ?>
                                        </td>
                                        <td class="td-rs_rc_id">
                                            <?php echo  $data['rs_rc_id'] ; ?>
                                        </td>
                                        <td class="td-rs_nro_informe_tecnico">
                                            <?php echo  $data['rs_nro_informe_tecnico'] ; ?>
                                        </td>
                                        <td class="td-rs_nro_informe_legal">
                                            <?php echo  $data['rs_nro_informe_legal'] ; ?>
                                        </td>
                                        <td class="td-rs_cp_da">
                                            <?php echo  $data['rs_cp_da'] ; ?>
                                        </td>
                                        <td class="td-rs_cp_ue">
                                            <?php echo  $data['rs_cp_ue'] ; ?>
                                        </td>
                                        <td class="td-rs_fecha_registro">
                                            <?php echo  $data['rs_fecha_registro'] ; ?>
                                        </td>
                                        <td class="td-rs_fecha_modificacion">
                                            <?php echo  $data['rs_fecha_modificacion'] ; ?>
                                        </td>
                                        <td class="td-rs_usuario_registro">
                                            <?php echo  $data['rs_usuario_registro'] ; ?>
                                        </td>
                                        <td class="td-rs_valida_destino">
                                            <?php echo  $data['rs_valida_destino'] ; ?>
                                        </td>
                                        <td class="td-rs_ratifica_origen">
                                            <?php echo  $data['rs_ratifica_origen'] ; ?>
                                        </td>
                                        <td class="td-rs_cp_da_destino">
                                            <?php echo  $data['rs_cp_da_destino'] ; ?>
                                        </td>
                                        <td class="td-rs_cp_ue_destino">
                                            <?php echo  $data['rs_cp_ue_destino'] ; ?>
                                        </td>
                                        <td class="td-rs_estado">
                                            <?php echo  $data['rs_estado'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <div class="dropdown" >
                                                <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="material-icons">menu</i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item "   href="<?php print_link("tblrfsregistrosap/view/$rec_id"); ?>" >
                                                    <i class="material-icons">visibility</i> View
                                                </a>
                                                <a class="dropdown-item "   href="<?php print_link("tblrfsregistrosap/edit/$rec_id"); ?>" >
                                                <i class="material-icons">edit</i> Edit
                                            </a>
                                            <a class="dropdown-item record-delete-btn" data-prompt-msg="¿Seguro que quieres borrar este registro?" data-display-style="modal" href="<?php print_link("tblrfsregistrosap/delete/$rec_id"); ?>" >
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
                        " data-display-style="modal" data-url="<?php print_link("tblrfsregistrosap/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
