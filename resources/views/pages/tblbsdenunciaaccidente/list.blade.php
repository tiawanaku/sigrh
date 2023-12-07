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
    $pageTitle = "Tbl Bs Denuncia Accidente"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Bs Denuncia Accidente</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("tblbsdenunciaaccidente/add", true) ?>" >
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
                    <div id="tblbsdenunciaaccidente-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblbsdenunciaaccidente/", $field_name, $field_value); ?>
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
                                        <th class="td-denacc_id" > Denacc Id</th>
                                        <th class="td-denacc_per_id" > Denacc Per Id</th>
                                        <th class="td-denacc_fecha_denunciaacc" > Denacc Fecha Denunciaacc</th>
                                        <th class="td-denacc_lugar_accidente" > Denacc Lugar Accidente</th>
                                        <th class="td-denacc_fecha_accidente" > Denacc Fecha Accidente</th>
                                        <th class="td-denacc_ocurrio_accidente" > Denacc Ocurrio Accidente</th>
                                        <th class="td-denacc_causas_accidente" > Denacc Causas Accidente</th>
                                        <th class="td-denacc_labor_accidente" > Denacc Labor Accidente</th>
                                        <th class="td-denacc_atencion_accidente" > Denacc Atencion Accidente</th>
                                        <th class="td-denacc_estado" > Denacc Estado</th>
                                        <th class="td-denacc_clase_accidente" > Denacc Clase Accidente</th>
                                        <th class="td-denacc_diag_accidente" > Denacc Diag Accidente</th>
                                        <th class="td-denacc_trat_accidente" > Denacc Trat Accidente</th>
                                        <th class="td-denacc_testigo_primero" > Denacc Testigo Primero</th>
                                        <th class="td-denacc_testigo_segundo" > Denacc Testigo Segundo</th>
                                        <th class="td-denacc_ubicacion_verdadera" > Denacc Ubicacion Verdadera</th>
                                        <th class="td-denacc_as_id" > Denacc As Id</th>
                                        <th class="td-denacc_estado_tramite" > Denacc Estado Tramite</th>
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
                                        $rec_id = ($data['denacc_id'] ? urlencode($data['denacc_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['denacc_id'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <!--PageComponentStart-->
                                        <td class="td-denacc_id">
                                            <a href="<?php print_link("/tblbsdenunciaaccidente/view/$data[denacc_id]") ?>"><?php echo $data['denacc_id']; ?></a>
                                        </td>
                                        <td class="td-denacc_per_id">
                                            <?php echo  $data['denacc_per_id'] ; ?>
                                        </td>
                                        <td class="td-denacc_fecha_denunciaacc">
                                            <?php echo  $data['denacc_fecha_denunciaacc'] ; ?>
                                        </td>
                                        <td class="td-denacc_lugar_accidente">
                                            <?php echo  $data['denacc_lugar_accidente'] ; ?>
                                        </td>
                                        <td class="td-denacc_fecha_accidente">
                                            <?php echo  $data['denacc_fecha_accidente'] ; ?>
                                        </td>
                                        <td class="td-denacc_ocurrio_accidente">
                                            <?php echo  $data['denacc_ocurrio_accidente'] ; ?>
                                        </td>
                                        <td class="td-denacc_causas_accidente">
                                            <?php echo  $data['denacc_causas_accidente'] ; ?>
                                        </td>
                                        <td class="td-denacc_labor_accidente">
                                            <?php echo  $data['denacc_labor_accidente'] ; ?>
                                        </td>
                                        <td class="td-denacc_atencion_accidente">
                                            <?php echo  $data['denacc_atencion_accidente'] ; ?>
                                        </td>
                                        <td class="td-denacc_estado">
                                            <?php echo  $data['denacc_estado'] ; ?>
                                        </td>
                                        <td class="td-denacc_clase_accidente">
                                            <?php echo  $data['denacc_clase_accidente'] ; ?>
                                        </td>
                                        <td class="td-denacc_diag_accidente">
                                            <?php echo  $data['denacc_diag_accidente'] ; ?>
                                        </td>
                                        <td class="td-denacc_trat_accidente">
                                            <?php echo  $data['denacc_trat_accidente'] ; ?>
                                        </td>
                                        <td class="td-denacc_testigo_primero">
                                            <?php echo  $data['denacc_testigo_primero'] ; ?>
                                        </td>
                                        <td class="td-denacc_testigo_segundo">
                                            <?php echo  $data['denacc_testigo_segundo'] ; ?>
                                        </td>
                                        <td class="td-denacc_ubicacion_verdadera">
                                            <?php echo  $data['denacc_ubicacion_verdadera'] ; ?>
                                        </td>
                                        <td class="td-denacc_as_id">
                                            <?php echo  $data['denacc_as_id'] ; ?>
                                        </td>
                                        <td class="td-denacc_estado_tramite">
                                            <?php echo  $data['denacc_estado_tramite'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <div class="dropdown" >
                                                <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="material-icons">menu</i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item "   href="<?php print_link("tblbsdenunciaaccidente/view/$rec_id"); ?>" >
                                                    <i class="material-icons">visibility</i> View
                                                </a>
                                                <a class="dropdown-item "   href="<?php print_link("tblbsdenunciaaccidente/edit/$rec_id"); ?>" >
                                                <i class="material-icons">edit</i> Edit
                                            </a>
                                            <a class="dropdown-item record-delete-btn" data-prompt-msg="¿Seguro que quieres borrar este registro?" data-display-style="modal" href="<?php print_link("tblbsdenunciaaccidente/delete/$rec_id"); ?>" >
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
                        " data-display-style="modal" data-url="<?php print_link("tblbsdenunciaaccidente/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
