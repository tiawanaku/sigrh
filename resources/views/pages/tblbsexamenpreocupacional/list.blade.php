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
    $pageTitle = "Tbl Bs Examen Preocupacional"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Bs Examen Preocupacional</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("tblbsexamenpreocupacional/add", true) ?>" >
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
                    <div id="tblbsexamenpreocupacional-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblbsexamenpreocupacional/", $field_name, $field_value); ?>
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
                                        <th class="td-exp_id" > Exp Id</th>
                                        <th class="td-exp_per_id" > Exp Per Id</th>
                                        <th class="td-exp_fecha_elab" > Exp Fecha Elab</th>
                                        <th class="td-exp_carts_puesto" > Exp Carts Puesto</th>
                                        <th class="td-exp_fecha_examen" > Exp Fecha Examen</th>
                                        <th class="td-exp_estado" > Exp Estado</th>
                                        <th class="td-exp_diagnostico" > Exp Diagnostico</th>
                                        <th class="td-exp_comentario" > Exp Comentario</th>
                                        <th class="td-exp_recomendaciones" > Exp Recomendaciones</th>
                                        <th class="td-exp_fecha_recep_funcionario" > Exp Fecha Recep Funcionario</th>
                                        <th class="td-exp_n_historia_clinica" > Exp N Historia Clinica</th>
                                        <th class="td-exp_medico" > Exp Medico</th>
                                        <th class="td-exp_n_autorizacion" > Exp N Autorizacion</th>
                                        <th class="td-exp_convenio" > Exp Convenio</th>
                                        <th class="td-exp_fecha_prog" > Exp Fecha Prog</th>
                                        <th class="td-exp_tel_of_fun" > Exp Tel Of Fun</th>
                                        <th class="td-exp_tel_dom_fun" > Exp Tel Dom Fun</th>
                                        <th class="td-exp_obsaut" > Exp Obsaut</th>
                                        <th class="td-exp_importe" > Exp Importe</th>
                                        <th class="td-exp_tipo_sangre" > Exp Tipo Sangre</th>
                                        <th class="td-exp_correlativo_gestion_n_autorizacion" > Exp Correlativo Gestion N Autorizacion</th>
                                        <th class="td-exp_correlativo_fecha_registro_n_autorizacion" > Exp Correlativo Fecha Registro N Autorizacion</th>
                                        <th class="td-exp_as_id" > Exp As Id</th>
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
                                        $rec_id = ($data['exp_id'] ? urlencode($data['exp_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['exp_id'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <!--PageComponentStart-->
                                        <td class="td-exp_id">
                                            <a href="<?php print_link("/tblbsexamenpreocupacional/view/$data[exp_id]") ?>"><?php echo $data['exp_id']; ?></a>
                                        </td>
                                        <td class="td-exp_per_id">
                                            <?php echo  $data['exp_per_id'] ; ?>
                                        </td>
                                        <td class="td-exp_fecha_elab">
                                            <?php echo  $data['exp_fecha_elab'] ; ?>
                                        </td>
                                        <td class="td-exp_carts_puesto">
                                            <?php echo  $data['exp_carts_puesto'] ; ?>
                                        </td>
                                        <td class="td-exp_fecha_examen">
                                            <?php echo  $data['exp_fecha_examen'] ; ?>
                                        </td>
                                        <td class="td-exp_estado">
                                            <?php echo  $data['exp_estado'] ; ?>
                                        </td>
                                        <td class="td-exp_diagnostico">
                                            <?php echo  $data['exp_diagnostico'] ; ?>
                                        </td>
                                        <td class="td-exp_comentario">
                                            <?php echo  $data['exp_comentario'] ; ?>
                                        </td>
                                        <td class="td-exp_recomendaciones">
                                            <?php echo  $data['exp_recomendaciones'] ; ?>
                                        </td>
                                        <td class="td-exp_fecha_recep_funcionario">
                                            <?php echo  $data['exp_fecha_recep_funcionario'] ; ?>
                                        </td>
                                        <td class="td-exp_n_historia_clinica">
                                            <?php echo  $data['exp_n_historia_clinica'] ; ?>
                                        </td>
                                        <td class="td-exp_medico">
                                            <?php echo  $data['exp_medico'] ; ?>
                                        </td>
                                        <td class="td-exp_n_autorizacion">
                                            <?php echo  $data['exp_n_autorizacion'] ; ?>
                                        </td>
                                        <td class="td-exp_convenio">
                                            <?php echo  $data['exp_convenio'] ; ?>
                                        </td>
                                        <td class="td-exp_fecha_prog">
                                            <?php echo  $data['exp_fecha_prog'] ; ?>
                                        </td>
                                        <td class="td-exp_tel_of_fun">
                                            <?php echo  $data['exp_tel_of_fun'] ; ?>
                                        </td>
                                        <td class="td-exp_tel_dom_fun">
                                            <?php echo  $data['exp_tel_dom_fun'] ; ?>
                                        </td>
                                        <td class="td-exp_obsaut">
                                            <?php echo  $data['exp_obsaut'] ; ?>
                                        </td>
                                        <td class="td-exp_importe">
                                            <?php echo  $data['exp_importe'] ; ?>
                                        </td>
                                        <td class="td-exp_tipo_sangre">
                                            <?php echo  $data['exp_tipo_sangre'] ; ?>
                                        </td>
                                        <td class="td-exp_correlativo_gestion_n_autorizacion">
                                            <?php echo  $data['exp_correlativo_gestion_n_autorizacion'] ; ?>
                                        </td>
                                        <td class="td-exp_correlativo_fecha_registro_n_autorizacion">
                                            <?php echo  $data['exp_correlativo_fecha_registro_n_autorizacion'] ; ?>
                                        </td>
                                        <td class="td-exp_as_id">
                                            <?php echo  $data['exp_as_id'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <div class="dropdown" >
                                                <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="material-icons">menu</i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item "   href="<?php print_link("tblbsexamenpreocupacional/view/$rec_id"); ?>" >
                                                    <i class="material-icons">visibility</i> View
                                                </a>
                                                <a class="dropdown-item "   href="<?php print_link("tblbsexamenpreocupacional/edit/$rec_id"); ?>" >
                                                <i class="material-icons">edit</i> Edit
                                            </a>
                                            <a class="dropdown-item record-delete-btn" data-prompt-msg="¿Seguro que quieres borrar este registro?" data-display-style="modal" href="<?php print_link("tblbsexamenpreocupacional/delete/$rec_id"); ?>" >
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
                        " data-display-style="modal" data-url="<?php print_link("tblbsexamenpreocupacional/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
