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
    $pageTitle = "Tbl Persona Familiares"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Persona Familiares</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn " href="<?php print_link("tblpersonafamiliares/add") ?>" >
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
                    <div id="tblpersonafamiliares-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblpersonafamiliares/", $field_name, $field_value); ?>
                            <?php Html::display_page_errors($errors); ?>
                            <div class="filter-tags mb-2">
                                <?php Html::filter_tag('search', __('Search')); ?>
                            </div>
                            <table class="table table-hover table-striped table-sm text-left">
                                <thead class="table-header ">
                                    <tr>
                                        <th class="td-pf_id" > Pf Id</th>
                                        <th class="td-pf_per_id" > Pf Per Id</th>
                                        <th class="td-pf_tipo_parentesco" > Pf Tipo Parentesco</th>
                                        <th class="td-pf_paterno" > Pf Paterno</th>
                                        <th class="td-pf_materno" > Pf Materno</th>
                                        <th class="td-pf_nombres" > Pf Nombres</th>
                                        <th class="td-pf_ap_esposo" > Pf Ap Esposo</th>
                                        <th class="td-pf_fecha_nac" > Pf Fecha Nac</th>
                                        <th class="td-pf_estado" > Pf Estado</th>
                                        <th class="td-pf_estado_vivo" > Pf Estado Vivo</th>
                                        <th class="td-pf_fecha_defuncion" > Pf Fecha Defuncion</th>
                                        <th class="td-pf_sexo" > Pf Sexo</th>
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
                                        $rec_id = ($data['pf_per_id'] ? urlencode($data['pf_per_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <!--PageComponentStart-->
                                        <td class="td-pf_id">
                                            <?php echo  $data['pf_id'] ; ?>
                                        </td>
                                        <td class="td-pf_per_id">
                                            <?php echo  $data['pf_per_id'] ; ?>
                                        </td>
                                        <td class="td-pf_tipo_parentesco">
                                            <?php echo  $data['pf_tipo_parentesco'] ; ?>
                                        </td>
                                        <td class="td-pf_paterno">
                                            <?php echo  $data['pf_paterno'] ; ?>
                                        </td>
                                        <td class="td-pf_materno">
                                            <?php echo  $data['pf_materno'] ; ?>
                                        </td>
                                        <td class="td-pf_nombres">
                                            <?php echo  $data['pf_nombres'] ; ?>
                                        </td>
                                        <td class="td-pf_ap_esposo">
                                            <?php echo  $data['pf_ap_esposo'] ; ?>
                                        </td>
                                        <td class="td-pf_fecha_nac">
                                            <?php echo  $data['pf_fecha_nac'] ; ?>
                                        </td>
                                        <td class="td-pf_estado">
                                            <?php echo  $data['pf_estado'] ; ?>
                                        </td>
                                        <td class="td-pf_estado_vivo">
                                            <?php echo  $data['pf_estado_vivo'] ; ?>
                                        </td>
                                        <td class="td-pf_fecha_defuncion">
                                            <?php echo  $data['pf_fecha_defuncion'] ; ?>
                                        </td>
                                        <td class="td-pf_sexo">
                                            <?php echo  $data['pf_sexo'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
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
