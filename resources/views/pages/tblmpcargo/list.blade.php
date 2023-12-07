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
    $pageTitle = "Tbl Mp Cargo"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Mp Cargo</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("tblmpcargo/add", true) ?>" >
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
                    <div id="tblmpcargo-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblmpcargo/", $field_name, $field_value); ?>
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
                                        <th class="td-ca_id" > Ca Id</th>
                                        <th class="td-ca_es_id" > Ca Es Id</th>
                                        <th class="td-ca_eo_id" > Ca Eo Id</th>
                                        <th class="td-ca_ti_item" > Ca Ti Item</th>
                                        <th class="td-ca_num_item" > Ca Num Item</th>
                                        <th class="td-ca_estado" > Ca Estado</th>
                                        <th class="td-ca_aplica_incremento" > Ca Aplica Incremento</th>
                                        <th class="td-ca_tipo_jornada" > Ca Tipo Jornada</th>
                                        <th class="td-ca_basico_calculado" > Ca Basico Calculado</th>
                                        <th class="td-ca_tipo_calculo" > Ca Tipo Calculo</th>
                                        <th class="td-ca_pr_id" > Ca Pr Id</th>
                                        <th class="td-ca_usuario_creacion" > Ca Usuario Creacion</th>
                                        <th class="td-ca_fecha_creacion" > Ca Fecha Creacion</th>
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
                                        $rec_id = ($data['ca_id'] ? urlencode($data['ca_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['ca_id'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <!--PageComponentStart-->
                                        <td class="td-ca_id">
                                            <a href="<?php print_link("/tblmpcargo/view/$data[ca_id]") ?>"><?php echo $data['ca_id']; ?></a>
                                        </td>
                                        <td class="td-ca_es_id">
                                            <?php echo  $data['ca_es_id'] ; ?>
                                        </td>
                                        <td class="td-ca_eo_id">
                                            <?php echo  $data['ca_eo_id'] ; ?>
                                        </td>
                                        <td class="td-ca_ti_item">
                                            <?php echo  $data['ca_ti_item'] ; ?>
                                        </td>
                                        <td class="td-ca_num_item">
                                            <?php echo  $data['ca_num_item'] ; ?>
                                        </td>
                                        <td class="td-ca_estado">
                                            <?php echo  $data['ca_estado'] ; ?>
                                        </td>
                                        <td class="td-ca_aplica_incremento">
                                            <?php echo  $data['ca_aplica_incremento'] ; ?>
                                        </td>
                                        <td class="td-ca_tipo_jornada">
                                            <?php echo  $data['ca_tipo_jornada'] ; ?>
                                        </td>
                                        <td class="td-ca_basico_calculado">
                                            <?php echo  $data['ca_basico_calculado'] ; ?>
                                        </td>
                                        <td class="td-ca_tipo_calculo">
                                            <?php echo  $data['ca_tipo_calculo'] ; ?>
                                        </td>
                                        <td class="td-ca_pr_id">
                                            <?php echo  $data['ca_pr_id'] ; ?>
                                        </td>
                                        <td class="td-ca_usuario_creacion">
                                            <?php echo  $data['ca_usuario_creacion'] ; ?>
                                        </td>
                                        <td class="td-ca_fecha_creacion">
                                            <?php echo  $data['ca_fecha_creacion'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <div class="dropdown" >
                                                <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="material-icons">menu</i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item "   href="<?php print_link("tblmpcargo/view/$rec_id"); ?>" >
                                                    <i class="material-icons">visibility</i> View
                                                </a>
                                                <a class="dropdown-item "   href="<?php print_link("tblmpcargo/edit/$rec_id"); ?>" >
                                                <i class="material-icons">edit</i> Edit
                                            </a>
                                            <a class="dropdown-item record-delete-btn" data-prompt-msg="¿Seguro que quieres borrar este registro?" data-display-style="modal" href="<?php print_link("tblmpcargo/delete/$rec_id"); ?>" >
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
                        " data-display-style="modal" data-url="<?php print_link("tblmpcargo/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
