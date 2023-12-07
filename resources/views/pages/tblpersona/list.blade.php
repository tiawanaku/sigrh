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
    $pageTitle = "Tbl Persona"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Persona</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("tblpersona/add", true) ?>" >
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
                    <div id="tblpersona-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblpersona/", $field_name, $field_value); ?>
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
                                        <th class="td-per_id" > Per Id</th>
                                        <th class="td-per_tipo_doc" > Per Tipo Doc</th>
                                        <th class="td-per_num_doc" > Per Num Doc</th>
                                        <th class="td-per_lugar_exp" > Per Lugar Exp</th>
                                        <th class="td-per_ap_paterno" > Per Ap Paterno</th>
                                        <th class="td-per_ap_materno" > Per Ap Materno</th>
                                        <th class="td-per_nombres" > Per Nombres</th>
                                        <th class="td-per_ap_casada" > Per Ap Casada</th>
                                        <th class="td-per_sexo" > Per Sexo</th>
                                        <th class="td-per_fecha_nac" > Per Fecha Nac</th>
                                        <th class="td-per_procedencia" > Per Procedencia</th>
                                        <th class="td-per_serie_libreta_militar" > Per Serie Libreta Militar</th>
                                        <th class="td-per_lugar_nac" > Per Lugar Nac</th>
                                        <th class="td-per_estado_civil" > Per Estado Civil</th>
                                        <th class="td-per_fecha_registro" > Per Fecha Registro</th>
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
                                        $rec_id = ($data['per_id'] ? urlencode($data['per_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['per_id'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <!--PageComponentStart-->
                                        <td class="td-per_id">
                                            <a href="<?php print_link("/tblpersona/view/$data[per_id]") ?>"><?php echo $data['per_id']; ?></a>
                                        </td>
                                        <td class="td-per_tipo_doc">
                                            <?php echo  $data['per_tipo_doc'] ; ?>
                                        </td>
                                        <td class="td-per_num_doc">
                                            <?php echo  $data['per_num_doc'] ; ?>
                                        </td>
                                        <td class="td-per_lugar_exp">
                                            <?php echo  $data['per_lugar_exp'] ; ?>
                                        </td>
                                        <td class="td-per_ap_paterno">
                                            <?php echo  $data['per_ap_paterno'] ; ?>
                                        </td>
                                        <td class="td-per_ap_materno">
                                            <?php echo  $data['per_ap_materno'] ; ?>
                                        </td>
                                        <td class="td-per_nombres">
                                            <?php echo  $data['per_nombres'] ; ?>
                                        </td>
                                        <td class="td-per_ap_casada">
                                            <?php echo  $data['per_ap_casada'] ; ?>
                                        </td>
                                        <td class="td-per_sexo">
                                            <?php echo  $data['per_sexo'] ; ?>
                                        </td>
                                        <td class="td-per_fecha_nac">
                                            <?php echo  $data['per_fecha_nac'] ; ?>
                                        </td>
                                        <td class="td-per_procedencia">
                                            <?php echo  $data['per_procedencia'] ; ?>
                                        </td>
                                        <td class="td-per_serie_libreta_militar">
                                            <?php echo  $data['per_serie_libreta_militar'] ; ?>
                                        </td>
                                        <td class="td-per_lugar_nac">
                                            <?php echo  $data['per_lugar_nac'] ; ?>
                                        </td>
                                        <td class="td-per_estado_civil">
                                            <?php echo  $data['per_estado_civil'] ; ?>
                                        </td>
                                        <td class="td-per_fecha_registro">
                                            <?php echo  $data['per_fecha_registro'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <div class="dropdown" >
                                                <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="material-icons">menu</i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item "   href="<?php print_link("tblpersona/view/$rec_id"); ?>" >
                                                    <i class="material-icons">visibility</i> View
                                                </a>
                                                <a class="dropdown-item "   href="<?php print_link("tblpersona/edit/$rec_id"); ?>" >
                                                <i class="material-icons">edit</i> Edit
                                            </a>
                                            <a class="dropdown-item record-delete-btn" data-prompt-msg="¿Seguro que quieres borrar este registro?" data-display-style="modal" href="<?php print_link("tblpersona/delete/$rec_id"); ?>" >
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
                        " data-display-style="modal" data-url="<?php print_link("tblpersona/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
