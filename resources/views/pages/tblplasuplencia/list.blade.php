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
    $pageTitle = "Tbl Pla Suplencia"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Pla Suplencia</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("tblplasuplencia/add", true) ?>" >
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
                    <div id="tblplasuplencia-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblplasuplencia/", $field_name, $field_value); ?>
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
                                        <th class="td-plasup_id" > Plasup Id</th>
                                        <th class="td-plasup_correlativo" > Plasup Correlativo</th>
                                        <th class="td-plasup_fecha_emision" > Plasup Fecha Emision</th>
                                        <th class="td-plasup_iniciales" > Plasup Iniciales</th>
                                        <th class="td-plasup_fecha_recep_contrato" > Plasup Fecha Recep Contrato</th>
                                        <th class="td-plasup_id_asig" > Plasup Id Asig</th>
                                        <th class="td-plasup_valor_rciva" > Plasup Valor Rciva</th>
                                        <th class="td-plasup_fecha_recep_valor_rciva" > Plasup Fecha Recep Valor Rciva</th>
                                        <th class="td-plasup_fecha_inicio_baja_medica" > Plasup Fecha Inicio Baja Medica</th>
                                        <th class="td-plasup_fecha_fin_baja_medica" > Plasup Fecha Fin Baja Medica</th>
                                        <th class="td-plasup_tipo_baja_medica" > Plasup Tipo Baja Medica</th>
                                        <th class="td-plasup_salario_minimo" > Plasup Salario Minimo</th>
                                        <th class="td-plasup_novedad" > Plasup Novedad</th>
                                        <th class="td-plasup_per_id_suplantado" > Plasup Per Id Suplantado</th>
                                        <th class="td-plasup_correlativo_interno" > Plasup Correlativo Interno</th>
                                        <th class="td-plasup_gestion_correlativo_interno" > Plasup Gestion Correlativo Interno</th>
                                        <th class="td-plasup_afp" > Plasup Afp</th>
                                        <th class="td-plasup_tipo_aportante" > Plasup Tipo Aportante</th>
                                        <th class="td-plasup_egs" > Plasup Egs</th>
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
                                        $rec_id = ($data['plasup_id'] ? urlencode($data['plasup_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['plasup_id'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <!--PageComponentStart-->
                                        <td class="td-plasup_id">
                                            <a href="<?php print_link("/tblplasuplencia/view/$data[plasup_id]") ?>"><?php echo $data['plasup_id']; ?></a>
                                        </td>
                                        <td class="td-plasup_correlativo">
                                            <?php echo  $data['plasup_correlativo'] ; ?>
                                        </td>
                                        <td class="td-plasup_fecha_emision">
                                            <?php echo  $data['plasup_fecha_emision'] ; ?>
                                        </td>
                                        <td class="td-plasup_iniciales">
                                            <?php echo  $data['plasup_iniciales'] ; ?>
                                        </td>
                                        <td class="td-plasup_fecha_recep_contrato">
                                            <?php echo  $data['plasup_fecha_recep_contrato'] ; ?>
                                        </td>
                                        <td class="td-plasup_id_asig">
                                            <?php echo  $data['plasup_id_asig'] ; ?>
                                        </td>
                                        <td class="td-plasup_valor_rciva">
                                            <?php echo  $data['plasup_valor_rciva'] ; ?>
                                        </td>
                                        <td class="td-plasup_fecha_recep_valor_rciva">
                                            <?php echo  $data['plasup_fecha_recep_valor_rciva'] ; ?>
                                        </td>
                                        <td class="td-plasup_fecha_inicio_baja_medica">
                                            <?php echo  $data['plasup_fecha_inicio_baja_medica'] ; ?>
                                        </td>
                                        <td class="td-plasup_fecha_fin_baja_medica">
                                            <?php echo  $data['plasup_fecha_fin_baja_medica'] ; ?>
                                        </td>
                                        <td class="td-plasup_tipo_baja_medica">
                                            <?php echo  $data['plasup_tipo_baja_medica'] ; ?>
                                        </td>
                                        <td class="td-plasup_salario_minimo">
                                            <?php echo  $data['plasup_salario_minimo'] ; ?>
                                        </td>
                                        <td class="td-plasup_novedad">
                                            <?php echo  $data['plasup_novedad'] ; ?>
                                        </td>
                                        <td class="td-plasup_per_id_suplantado">
                                            <?php echo  $data['plasup_per_id_suplantado'] ; ?>
                                        </td>
                                        <td class="td-plasup_correlativo_interno">
                                            <?php echo  $data['plasup_correlativo_interno'] ; ?>
                                        </td>
                                        <td class="td-plasup_gestion_correlativo_interno">
                                            <?php echo  $data['plasup_gestion_correlativo_interno'] ; ?>
                                        </td>
                                        <td class="td-plasup_afp">
                                            <?php echo  $data['plasup_afp'] ; ?>
                                        </td>
                                        <td class="td-plasup_tipo_aportante">
                                            <?php echo  $data['plasup_tipo_aportante'] ; ?>
                                        </td>
                                        <td class="td-plasup_egs">
                                            <?php echo  $data['plasup_egs'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <div class="dropdown" >
                                                <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="material-icons">menu</i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item "   href="<?php print_link("tblplasuplencia/view/$rec_id"); ?>" >
                                                    <i class="material-icons">visibility</i> View
                                                </a>
                                                <a class="dropdown-item "   href="<?php print_link("tblplasuplencia/edit/$rec_id"); ?>" >
                                                <i class="material-icons">edit</i> Edit
                                            </a>
                                            <a class="dropdown-item record-delete-btn" data-prompt-msg="¿Seguro que quieres borrar este registro?" data-display-style="modal" href="<?php print_link("tblplasuplencia/delete/$rec_id"); ?>" >
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
                        " data-display-style="modal" data-url="<?php print_link("tblplasuplencia/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
