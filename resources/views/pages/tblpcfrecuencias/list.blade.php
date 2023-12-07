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
    $pageTitle = "Tbl Pc Frecuencias"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Pc Frecuencias</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("tblpcfrecuencias/add", true) ?>" >
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
                    <div id="tblpcfrecuencias-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblpcfrecuencias/", $field_name, $field_value); ?>
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
                                        <th class="td-fr_id" > Fr Id</th>
                                        <th class="td-fr_es_id" > Fr Es Id</th>
                                        <th class="td-fr_tiempo" > Fr Tiempo</th>
                                        <th class="td-fr_cp_id" > Fr Cp Id</th>
                                        <th class="td-fr_pu_descripcion" > Fr Pu Descripcion</th>
                                        <th class="td-fr_estado" > Fr Estado</th>
                                        <th class="td-fr_observaciones" > Fr Observaciones</th>
                                        <th class="td-fr_cod_poa" > Fr Cod Poa</th>
                                        <th class="td-fr_fecha_inicio" > Fr Fecha Inicio</th>
                                        <th class="td-fr_fecha_fin" > Fr Fecha Fin</th>
                                        <th class="td-fr_id_anterior" > Fr Id Anterior</th>
                                        <th class="td-fr_tiempo_original" > Fr Tiempo Original</th>
                                        <th class="td-fr_tipo_jornada" > Fr Tipo Jornada</th>
                                        <th class="td-fr_obj_puesto" > Fr Obj Puesto</th>
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
                                        $rec_id = ($data['fr_id'] ? urlencode($data['fr_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['fr_id'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <!--PageComponentStart-->
                                        <td class="td-fr_id">
                                            <a href="<?php print_link("/tblpcfrecuencias/view/$data[fr_id]") ?>"><?php echo $data['fr_id']; ?></a>
                                        </td>
                                        <td class="td-fr_es_id">
                                            <?php echo  $data['fr_es_id'] ; ?>
                                        </td>
                                        <td class="td-fr_tiempo">
                                            <?php echo  $data['fr_tiempo'] ; ?>
                                        </td>
                                        <td class="td-fr_cp_id">
                                            <?php echo  $data['fr_cp_id'] ; ?>
                                        </td>
                                        <td class="td-fr_pu_descripcion">
                                            <?php echo  $data['fr_pu_descripcion'] ; ?>
                                        </td>
                                        <td class="td-fr_estado">
                                            <?php echo  $data['fr_estado'] ; ?>
                                        </td>
                                        <td class="td-fr_observaciones">
                                            <?php echo  $data['fr_observaciones'] ; ?>
                                        </td>
                                        <td class="td-fr_cod_poa">
                                            <?php echo  $data['fr_cod_poa'] ; ?>
                                        </td>
                                        <td class="td-fr_fecha_inicio">
                                            <?php echo  $data['fr_fecha_inicio'] ; ?>
                                        </td>
                                        <td class="td-fr_fecha_fin">
                                            <?php echo  $data['fr_fecha_fin'] ; ?>
                                        </td>
                                        <td class="td-fr_id_anterior">
                                            <?php echo  $data['fr_id_anterior'] ; ?>
                                        </td>
                                        <td class="td-fr_tiempo_original">
                                            <?php echo  $data['fr_tiempo_original'] ; ?>
                                        </td>
                                        <td class="td-fr_tipo_jornada">
                                            <?php echo  $data['fr_tipo_jornada'] ; ?>
                                        </td>
                                        <td class="td-fr_obj_puesto">
                                            <?php echo  $data['fr_obj_puesto'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <div class="dropdown" >
                                                <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="material-icons">menu</i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item "   href="<?php print_link("tblpcfrecuencias/view/$rec_id"); ?>" >
                                                    <i class="material-icons">visibility</i> View
                                                </a>
                                                <a class="dropdown-item "   href="<?php print_link("tblpcfrecuencias/edit/$rec_id"); ?>" >
                                                <i class="material-icons">edit</i> Edit
                                            </a>
                                            <a class="dropdown-item record-delete-btn" data-prompt-msg="¿Seguro que quieres borrar este registro?" data-display-style="modal" href="<?php print_link("tblpcfrecuencias/delete/$rec_id"); ?>" >
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
                        " data-display-style="modal" data-url="<?php print_link("tblpcfrecuencias/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
