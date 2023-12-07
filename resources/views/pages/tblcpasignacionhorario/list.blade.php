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
    $pageTitle = "Tbl Cp Asignacion Horario"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Cp Asignacion Horario</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("tblcpasignacionhorario/add", true) ?>" >
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
                    <div id="tblcpasignacionhorario-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblcpasignacionhorario/", $field_name, $field_value); ?>
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
                                        <th class="td-ah_id" > Ah Id</th>
                                        <th class="td-ah_per_id" > Ah Per Id</th>
                                        <th class="td-ah_tipo_horario" > Ah Tipo Horario</th>
                                        <th class="td-ah_fecha_inicial" > Ah Fecha Inicial</th>
                                        <th class="td-ah_fecha_final" > Ah Fecha Final</th>
                                        <th class="td-ah_lun_ing1" > Ah Lun Ing1</th>
                                        <th class="td-ah_lun_sal1" > Ah Lun Sal1</th>
                                        <th class="td-ah_lun_ing2" > Ah Lun Ing2</th>
                                        <th class="td-ah_lun_sal2" > Ah Lun Sal2</th>
                                        <th class="td-ah_mar_ing1" > Ah Mar Ing1</th>
                                        <th class="td-ah_mar_sal1" > Ah Mar Sal1</th>
                                        <th class="td-ah_mar_ing2" > Ah Mar Ing2</th>
                                        <th class="td-ah_mar_sal2" > Ah Mar Sal2</th>
                                        <th class="td-ah_mie_ing1" > Ah Mie Ing1</th>
                                        <th class="td-ah_mie_sal1" > Ah Mie Sal1</th>
                                        <th class="td-ah_mie_ing2" > Ah Mie Ing2</th>
                                        <th class="td-ah_mie_sal2" > Ah Mie Sal2</th>
                                        <th class="td-ah_jue_ing1" > Ah Jue Ing1</th>
                                        <th class="td-ah_jue_sal1" > Ah Jue Sal1</th>
                                        <th class="td-ah_jue_ing2" > Ah Jue Ing2</th>
                                        <th class="td-ah_jue_sal2" > Ah Jue Sal2</th>
                                        <th class="td-ah_vie_ing1" > Ah Vie Ing1</th>
                                        <th class="td-ah_vie_sal1" > Ah Vie Sal1</th>
                                        <th class="td-ah_vie_ing2" > Ah Vie Ing2</th>
                                        <th class="td-ah_vie_sal2" > Ah Vie Sal2</th>
                                        <th class="td-ah_sab_ing1" > Ah Sab Ing1</th>
                                        <th class="td-ah_sab_sal1" > Ah Sab Sal1</th>
                                        <th class="td-ah_sab_ing2" > Ah Sab Ing2</th>
                                        <th class="td-ah_sab_sal2" > Ah Sab Sal2</th>
                                        <th class="td-ah_dom_ing1" > Ah Dom Ing1</th>
                                        <th class="td-ah_dom_sal1" > Ah Dom Sal1</th>
                                        <th class="td-ah_dom_ing2" > Ah Dom Ing2</th>
                                        <th class="td-ah_dom_sal2" > Ah Dom Sal2</th>
                                        <th class="td-ah_autorizado" > Ah Autorizado</th>
                                        <th class="td-ah_json" > Ah Json</th>
                                        <th class="td-ah_estado" > Ah Estado</th>
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
                                        $rec_id = ($data['ah_id'] ? urlencode($data['ah_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['ah_id'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <!--PageComponentStart-->
                                        <td class="td-ah_id">
                                            <a href="<?php print_link("/tblcpasignacionhorario/view/$data[ah_id]") ?>"><?php echo $data['ah_id']; ?></a>
                                        </td>
                                        <td class="td-ah_per_id">
                                            <?php echo  $data['ah_per_id'] ; ?>
                                        </td>
                                        <td class="td-ah_tipo_horario">
                                            <?php echo  $data['ah_tipo_horario'] ; ?>
                                        </td>
                                        <td class="td-ah_fecha_inicial">
                                            <?php echo  $data['ah_fecha_inicial'] ; ?>
                                        </td>
                                        <td class="td-ah_fecha_final">
                                            <?php echo  $data['ah_fecha_final'] ; ?>
                                        </td>
                                        <td class="td-ah_lun_ing1">
                                            <?php echo  $data['ah_lun_ing1'] ; ?>
                                        </td>
                                        <td class="td-ah_lun_sal1">
                                            <?php echo  $data['ah_lun_sal1'] ; ?>
                                        </td>
                                        <td class="td-ah_lun_ing2">
                                            <?php echo  $data['ah_lun_ing2'] ; ?>
                                        </td>
                                        <td class="td-ah_lun_sal2">
                                            <?php echo  $data['ah_lun_sal2'] ; ?>
                                        </td>
                                        <td class="td-ah_mar_ing1">
                                            <?php echo  $data['ah_mar_ing1'] ; ?>
                                        </td>
                                        <td class="td-ah_mar_sal1">
                                            <?php echo  $data['ah_mar_sal1'] ; ?>
                                        </td>
                                        <td class="td-ah_mar_ing2">
                                            <?php echo  $data['ah_mar_ing2'] ; ?>
                                        </td>
                                        <td class="td-ah_mar_sal2">
                                            <?php echo  $data['ah_mar_sal2'] ; ?>
                                        </td>
                                        <td class="td-ah_mie_ing1">
                                            <?php echo  $data['ah_mie_ing1'] ; ?>
                                        </td>
                                        <td class="td-ah_mie_sal1">
                                            <?php echo  $data['ah_mie_sal1'] ; ?>
                                        </td>
                                        <td class="td-ah_mie_ing2">
                                            <?php echo  $data['ah_mie_ing2'] ; ?>
                                        </td>
                                        <td class="td-ah_mie_sal2">
                                            <?php echo  $data['ah_mie_sal2'] ; ?>
                                        </td>
                                        <td class="td-ah_jue_ing1">
                                            <?php echo  $data['ah_jue_ing1'] ; ?>
                                        </td>
                                        <td class="td-ah_jue_sal1">
                                            <?php echo  $data['ah_jue_sal1'] ; ?>
                                        </td>
                                        <td class="td-ah_jue_ing2">
                                            <?php echo  $data['ah_jue_ing2'] ; ?>
                                        </td>
                                        <td class="td-ah_jue_sal2">
                                            <?php echo  $data['ah_jue_sal2'] ; ?>
                                        </td>
                                        <td class="td-ah_vie_ing1">
                                            <?php echo  $data['ah_vie_ing1'] ; ?>
                                        </td>
                                        <td class="td-ah_vie_sal1">
                                            <?php echo  $data['ah_vie_sal1'] ; ?>
                                        </td>
                                        <td class="td-ah_vie_ing2">
                                            <?php echo  $data['ah_vie_ing2'] ; ?>
                                        </td>
                                        <td class="td-ah_vie_sal2">
                                            <?php echo  $data['ah_vie_sal2'] ; ?>
                                        </td>
                                        <td class="td-ah_sab_ing1">
                                            <?php echo  $data['ah_sab_ing1'] ; ?>
                                        </td>
                                        <td class="td-ah_sab_sal1">
                                            <?php echo  $data['ah_sab_sal1'] ; ?>
                                        </td>
                                        <td class="td-ah_sab_ing2">
                                            <?php echo  $data['ah_sab_ing2'] ; ?>
                                        </td>
                                        <td class="td-ah_sab_sal2">
                                            <?php echo  $data['ah_sab_sal2'] ; ?>
                                        </td>
                                        <td class="td-ah_dom_ing1">
                                            <?php echo  $data['ah_dom_ing1'] ; ?>
                                        </td>
                                        <td class="td-ah_dom_sal1">
                                            <?php echo  $data['ah_dom_sal1'] ; ?>
                                        </td>
                                        <td class="td-ah_dom_ing2">
                                            <?php echo  $data['ah_dom_ing2'] ; ?>
                                        </td>
                                        <td class="td-ah_dom_sal2">
                                            <?php echo  $data['ah_dom_sal2'] ; ?>
                                        </td>
                                        <td class="td-ah_autorizado">
                                            <?php echo  $data['ah_autorizado'] ; ?>
                                        </td>
                                        <td class="td-ah_json">
                                            <?php echo  $data['ah_json'] ; ?>
                                        </td>
                                        <td class="td-ah_estado">
                                            <?php echo  $data['ah_estado'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <div class="dropdown" >
                                                <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="material-icons">menu</i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item "   href="<?php print_link("tblcpasignacionhorario/view/$rec_id"); ?>" >
                                                    <i class="material-icons">visibility</i> View
                                                </a>
                                                <a class="dropdown-item "   href="<?php print_link("tblcpasignacionhorario/edit/$rec_id"); ?>" >
                                                <i class="material-icons">edit</i> Edit
                                            </a>
                                            <a class="dropdown-item record-delete-btn" data-prompt-msg="¿Seguro que quieres borrar este registro?" data-display-style="modal" href="<?php print_link("tblcpasignacionhorario/delete/$rec_id"); ?>" >
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
                        " data-display-style="modal" data-url="<?php print_link("tblcpasignacionhorario/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
