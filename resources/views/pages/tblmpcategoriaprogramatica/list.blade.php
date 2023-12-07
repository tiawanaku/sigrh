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
    $pageTitle = "Tbl Mp Categoria Programatica"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Mp Categoria Programatica</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("tblmpcategoriaprogramatica/add", true) ?>" >
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
                    <div id="tblmpcategoriaprogramatica-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblmpcategoriaprogramatica/", $field_name, $field_value); ?>
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
                                        <th class="td-cp_id" > Cp Id</th>
                                        <th class="td-cp_da" > Cp Da</th>
                                        <th class="td-cp_da_descripcion" > Cp Da Descripcion</th>
                                        <th class="td-cp_ue" > Cp Ue</th>
                                        <th class="td-cp_ue_descripcion" > Cp Ue Descripcion</th>
                                        <th class="td-cp_programa" > Cp Programa</th>
                                        <th class="td-cp_proyecto" > Cp Proyecto</th>
                                        <th class="td-cp_actividad" > Cp Actividad</th>
                                        <th class="td-cp_cod_poa" > Cp Cod Poa</th>
                                        <th class="td-cp_descripcion" > Cp Descripcion</th>
                                        <th class="td-cp_estado" > Cp Estado</th>
                                        <th class="td-cp_tipo_gasto" > Cp Tipo Gasto</th>
                                        <th class="td-cp_fuente" > Cp Fuente</th>
                                        <th class="td-cp_organismo" > Cp Organismo</th>
                                        <th class="td-cp_pr_id" > Cp Pr Id</th>
                                        <th class="td-cp_fecha_modificacion" > Cp Fecha Modificacion</th>
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
                                        $rec_id = ($data['cp_id'] ? urlencode($data['cp_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['cp_id'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <!--PageComponentStart-->
                                        <td class="td-cp_id">
                                            <a href="<?php print_link("/tblmpcategoriaprogramatica/view/$data[cp_id]") ?>"><?php echo $data['cp_id']; ?></a>
                                        </td>
                                        <td class="td-cp_da">
                                            <?php echo  $data['cp_da'] ; ?>
                                        </td>
                                        <td class="td-cp_da_descripcion">
                                            <?php echo  $data['cp_da_descripcion'] ; ?>
                                        </td>
                                        <td class="td-cp_ue">
                                            <?php echo  $data['cp_ue'] ; ?>
                                        </td>
                                        <td class="td-cp_ue_descripcion">
                                            <?php echo  $data['cp_ue_descripcion'] ; ?>
                                        </td>
                                        <td class="td-cp_programa">
                                            <?php echo  $data['cp_programa'] ; ?>
                                        </td>
                                        <td class="td-cp_proyecto">
                                            <?php echo  $data['cp_proyecto'] ; ?>
                                        </td>
                                        <td class="td-cp_actividad">
                                            <?php echo  $data['cp_actividad'] ; ?>
                                        </td>
                                        <td class="td-cp_cod_poa">
                                            <?php echo  $data['cp_cod_poa'] ; ?>
                                        </td>
                                        <td class="td-cp_descripcion">
                                            <?php echo  $data['cp_descripcion'] ; ?>
                                        </td>
                                        <td class="td-cp_estado">
                                            <?php echo  $data['cp_estado'] ; ?>
                                        </td>
                                        <td class="td-cp_tipo_gasto">
                                            <?php echo  $data['cp_tipo_gasto'] ; ?>
                                        </td>
                                        <td class="td-cp_fuente">
                                            <?php echo  $data['cp_fuente'] ; ?>
                                        </td>
                                        <td class="td-cp_organismo">
                                            <?php echo  $data['cp_organismo'] ; ?>
                                        </td>
                                        <td class="td-cp_pr_id">
                                            <?php echo  $data['cp_pr_id'] ; ?>
                                        </td>
                                        <td class="td-cp_fecha_modificacion">
                                            <?php echo  $data['cp_fecha_modificacion'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <div class="dropdown" >
                                                <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="material-icons">menu</i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item "   href="<?php print_link("tblmpcategoriaprogramatica/view/$rec_id"); ?>" >
                                                    <i class="material-icons">visibility</i> View
                                                </a>
                                                <a class="dropdown-item "   href="<?php print_link("tblmpcategoriaprogramatica/edit/$rec_id"); ?>" >
                                                <i class="material-icons">edit</i> Edit
                                            </a>
                                            <a class="dropdown-item record-delete-btn" data-prompt-msg="¿Seguro que quieres borrar este registro?" data-display-style="modal" href="<?php print_link("tblmpcategoriaprogramatica/delete/$rec_id"); ?>" >
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
                        " data-display-style="modal" data-url="<?php print_link("tblmpcategoriaprogramatica/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
