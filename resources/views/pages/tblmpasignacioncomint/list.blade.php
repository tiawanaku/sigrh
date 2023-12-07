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
    $pageTitle = "Tbl Mp Asignacion Com Int"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Mp Asignacion Com Int</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("tblmpasignacioncomint/add", true) ?>" >
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
                    <div id="tblmpasignacioncomint-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblmpasignacioncomint/", $field_name, $field_value); ?>
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
                                        <th class="td-ci_id" > Ci Id</th>
                                        <th class="td-ci_per_id" > Ci Per Id</th>
                                        <th class="td-ci_ca_id" > Ci Ca Id</th>
                                        <th class="td-ci_fecha_inicio" > Ci Fecha Inicio</th>
                                        <th class="td-ci_fecha_fin" > Ci Fecha Fin</th>
                                        <th class="td-ci_estado" > Ci Estado</th>
                                        <th class="td-ci_tipo_reg" > Ci Tipo Reg</th>
                                        <th class="td-ci_tipo_mov" > Ci Tipo Mov</th>
                                        <th class="td-ci_pr_id" > Ci Pr Id</th>
                                        <th class="td-ci_tipo_mov_baja" > Ci Tipo Mov Baja</th>
                                        <th class="td-ci_ca_id_ant" > Ci Ca Id Ant</th>
                                        <th class="td-ci_ca_id_n" > Ci Ca Id N</th>
                                        <th class="td-ci_es_id_n" > Ci Es Id N</th>
                                        <th class="td-ci_eo_id_n" > Ci Eo Id N</th>
                                        <th class="td-ci_per_id_interinato" > Ci Per Id Interinato</th>
                                        <th class="td-ci_validacion" > Ci Validacion</th>
                                        <th class="td-ci_fecha_validacion" > Ci Fecha Validacion</th>
                                        <th class="td-ci_memo" > Ci Memo</th>
                                        <th class="td-ci_memo_baja" > Ci Memo Baja</th>
                                        <th class="td-ci_usuario_creacion" > Ci Usuario Creacion</th>
                                        <th class="td-ci_fecha_creacion" > Ci Fecha Creacion</th>
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
                                        $rec_id = ($data['ci_id'] ? urlencode($data['ci_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['ci_id'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <!--PageComponentStart-->
                                        <td class="td-ci_id">
                                            <a href="<?php print_link("/tblmpasignacioncomint/view/$data[ci_id]") ?>"><?php echo $data['ci_id']; ?></a>
                                        </td>
                                        <td class="td-ci_per_id">
                                            <?php echo  $data['ci_per_id'] ; ?>
                                        </td>
                                        <td class="td-ci_ca_id">
                                            <?php echo  $data['ci_ca_id'] ; ?>
                                        </td>
                                        <td class="td-ci_fecha_inicio">
                                            <?php echo  $data['ci_fecha_inicio'] ; ?>
                                        </td>
                                        <td class="td-ci_fecha_fin">
                                            <?php echo  $data['ci_fecha_fin'] ; ?>
                                        </td>
                                        <td class="td-ci_estado">
                                            <?php echo  $data['ci_estado'] ; ?>
                                        </td>
                                        <td class="td-ci_tipo_reg">
                                            <?php echo  $data['ci_tipo_reg'] ; ?>
                                        </td>
                                        <td class="td-ci_tipo_mov">
                                            <?php echo  $data['ci_tipo_mov'] ; ?>
                                        </td>
                                        <td class="td-ci_pr_id">
                                            <?php echo  $data['ci_pr_id'] ; ?>
                                        </td>
                                        <td class="td-ci_tipo_mov_baja">
                                            <?php echo  $data['ci_tipo_mov_baja'] ; ?>
                                        </td>
                                        <td class="td-ci_ca_id_ant">
                                            <?php echo  $data['ci_ca_id_ant'] ; ?>
                                        </td>
                                        <td class="td-ci_ca_id_n">
                                            <?php echo  $data['ci_ca_id_n'] ; ?>
                                        </td>
                                        <td class="td-ci_es_id_n">
                                            <?php echo  $data['ci_es_id_n'] ; ?>
                                        </td>
                                        <td class="td-ci_eo_id_n">
                                            <?php echo  $data['ci_eo_id_n'] ; ?>
                                        </td>
                                        <td class="td-ci_per_id_interinato">
                                            <?php echo  $data['ci_per_id_interinato'] ; ?>
                                        </td>
                                        <td class="td-ci_validacion">
                                            <?php echo  $data['ci_validacion'] ; ?>
                                        </td>
                                        <td class="td-ci_fecha_validacion">
                                            <?php echo  $data['ci_fecha_validacion'] ; ?>
                                        </td>
                                        <td class="td-ci_memo">
                                            <?php echo  $data['ci_memo'] ; ?>
                                        </td>
                                        <td class="td-ci_memo_baja">
                                            <?php echo  $data['ci_memo_baja'] ; ?>
                                        </td>
                                        <td class="td-ci_usuario_creacion">
                                            <?php echo  $data['ci_usuario_creacion'] ; ?>
                                        </td>
                                        <td class="td-ci_fecha_creacion">
                                            <?php echo  $data['ci_fecha_creacion'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <div class="dropdown" >
                                                <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="material-icons">menu</i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item "   href="<?php print_link("tblmpasignacioncomint/view/$rec_id"); ?>" >
                                                    <i class="material-icons">visibility</i> View
                                                </a>
                                                <a class="dropdown-item "   href="<?php print_link("tblmpasignacioncomint/edit/$rec_id"); ?>" >
                                                <i class="material-icons">edit</i> Edit
                                            </a>
                                            <a class="dropdown-item record-delete-btn" data-prompt-msg="¿Seguro que quieres borrar este registro?" data-display-style="modal" href="<?php print_link("tblmpasignacioncomint/delete/$rec_id"); ?>" >
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
                        " data-display-style="modal" data-url="<?php print_link("tblmpasignacioncomint/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
