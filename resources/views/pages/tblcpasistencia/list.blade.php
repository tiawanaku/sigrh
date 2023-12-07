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
    $pageTitle = "Tbl Cp Asistencia"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Cp Asistencia</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("tblcpasistencia/add", true) ?>" >
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
                    <div id="tblcpasistencia-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblcpasistencia/", $field_name, $field_value); ?>
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
                                        <th class="td-att_id" > Att Id</th>
                                        <th class="td-att_per_id" > Att Per Id</th>
                                        <th class="td-att_fecha" > Att Fecha</th>
                                        <th class="td-att_dia" > Att Dia</th>
                                        <th class="td-att_ing1" > Att Ing1</th>
                                        <th class="td-att_sal1" > Att Sal1</th>
                                        <th class="td-att_ing2" > Att Ing2</th>
                                        <th class="td-att_sal2" > Att Sal2</th>
                                        <th class="td-att_id_lic_ing1" > Att Id Lic Ing1</th>
                                        <th class="td-att_id_lic_sal1" > Att Id Lic Sal1</th>
                                        <th class="td-att_id_lic_ing2" > Att Id Lic Ing2</th>
                                        <th class="td-att_id_lic_sal2" > Att Id Lic Sal2</th>
                                        <th class="td-att_min_atraso" > Att Min Atraso</th>
                                        <th class="td-att_min_atraso_mayor30" > Att Min Atraso Mayor30</th>
                                        <th class="td-att_min_salio_antes" > Att Min Salio Antes</th>
                                        <th class="td-att_min_extras" > Att Min Extras</th>
                                        <th class="td-att_tipo_observado" > Att Tipo Observado</th>
                                        <th class="td-att_id_horario" > Att Id Horario</th>
                                        <th class="td-att_id_horario_esp" > Att Id Horario Esp</th>
                                        <th class="td-att_edificio" > Att Edificio</th>
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
                                        $rec_id = ($data['att_id'] ? urlencode($data['att_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['att_id'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <!--PageComponentStart-->
                                        <td class="td-att_id">
                                            <a href="<?php print_link("/tblcpasistencia/view/$data[att_id]") ?>"><?php echo $data['att_id']; ?></a>
                                        </td>
                                        <td class="td-att_per_id">
                                            <?php echo  $data['att_per_id'] ; ?>
                                        </td>
                                        <td class="td-att_fecha">
                                            <?php echo  $data['att_fecha'] ; ?>
                                        </td>
                                        <td class="td-att_dia">
                                            <?php echo  $data['att_dia'] ; ?>
                                        </td>
                                        <td class="td-att_ing1">
                                            <?php echo  $data['att_ing1'] ; ?>
                                        </td>
                                        <td class="td-att_sal1">
                                            <?php echo  $data['att_sal1'] ; ?>
                                        </td>
                                        <td class="td-att_ing2">
                                            <?php echo  $data['att_ing2'] ; ?>
                                        </td>
                                        <td class="td-att_sal2">
                                            <?php echo  $data['att_sal2'] ; ?>
                                        </td>
                                        <td class="td-att_id_lic_ing1">
                                            <?php echo  $data['att_id_lic_ing1'] ; ?>
                                        </td>
                                        <td class="td-att_id_lic_sal1">
                                            <?php echo  $data['att_id_lic_sal1'] ; ?>
                                        </td>
                                        <td class="td-att_id_lic_ing2">
                                            <?php echo  $data['att_id_lic_ing2'] ; ?>
                                        </td>
                                        <td class="td-att_id_lic_sal2">
                                            <?php echo  $data['att_id_lic_sal2'] ; ?>
                                        </td>
                                        <td class="td-att_min_atraso">
                                            <?php echo  $data['att_min_atraso'] ; ?>
                                        </td>
                                        <td class="td-att_min_atraso_mayor30">
                                            <?php echo  $data['att_min_atraso_mayor30'] ; ?>
                                        </td>
                                        <td class="td-att_min_salio_antes">
                                            <?php echo  $data['att_min_salio_antes'] ; ?>
                                        </td>
                                        <td class="td-att_min_extras">
                                            <?php echo  $data['att_min_extras'] ; ?>
                                        </td>
                                        <td class="td-att_tipo_observado">
                                            <?php echo  $data['att_tipo_observado'] ; ?>
                                        </td>
                                        <td class="td-att_id_horario">
                                            <?php echo  $data['att_id_horario'] ; ?>
                                        </td>
                                        <td class="td-att_id_horario_esp">
                                            <?php echo  $data['att_id_horario_esp'] ; ?>
                                        </td>
                                        <td class="td-att_edificio">
                                            <?php echo  $data['att_edificio'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <div class="dropdown" >
                                                <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="material-icons">menu</i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item "   href="<?php print_link("tblcpasistencia/view/$rec_id"); ?>" >
                                                    <i class="material-icons">visibility</i> View
                                                </a>
                                                <a class="dropdown-item "   href="<?php print_link("tblcpasistencia/edit/$rec_id"); ?>" >
                                                <i class="material-icons">edit</i> Edit
                                            </a>
                                            <a class="dropdown-item record-delete-btn" data-prompt-msg="¿Seguro que quieres borrar este registro?" data-display-style="modal" href="<?php print_link("tblcpasistencia/delete/$rec_id"); ?>" >
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
                        " data-display-style="modal" data-url="<?php print_link("tblcpasistencia/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
