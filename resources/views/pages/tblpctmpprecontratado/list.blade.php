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
    $pageTitle = "Tbl Pc Tmp Precontratado"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Pc Tmp Precontratado</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn " href="<?php print_link("tblpctmpprecontratado/add") ?>" >
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
                    <div id="tblpctmpprecontratado-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblpctmpprecontratado/", $field_name, $field_value); ?>
                            <?php Html::display_page_errors($errors); ?>
                            <div class="filter-tags mb-2">
                                <?php Html::filter_tag('search', __('Search')); ?>
                            </div>
                            <table class="table table-hover table-striped table-sm text-left">
                                <thead class="table-header ">
                                    <tr>
                                        <th class="td-tmp_id" > Tmp Id</th>
                                        <th class="td-tmp_pre_id" > Tmp Pre Id</th>
                                        <th class="td-tmp_ci" > Tmp Ci</th>
                                        <th class="td-tmp_paterno" > Tmp Paterno</th>
                                        <th class="td-tmp_materno" > Tmp Materno</th>
                                        <th class="td-tmp_nombres" > Tmp Nombres</th>
                                        <th class="td-tmp_ap_casada" > Tmp Ap Casada</th>
                                        <th class="td-tmp_sexo" > Tmp Sexo</th>
                                        <th class="td-tmp_mostrar_materno" > Tmp Mostrar Materno</th>
                                        <th class="td-tmp_estado" > Tmp Estado</th>
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
                                        $rec_id = ($data['tmp_pre_id'] ? urlencode($data['tmp_pre_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <!--PageComponentStart-->
                                        <td class="td-tmp_id">
                                            <?php echo  $data['tmp_id'] ; ?>
                                        </td>
                                        <td class="td-tmp_pre_id">
                                            <?php echo  $data['tmp_pre_id'] ; ?>
                                        </td>
                                        <td class="td-tmp_ci">
                                            <?php echo  $data['tmp_ci'] ; ?>
                                        </td>
                                        <td class="td-tmp_paterno">
                                            <?php echo  $data['tmp_paterno'] ; ?>
                                        </td>
                                        <td class="td-tmp_materno">
                                            <?php echo  $data['tmp_materno'] ; ?>
                                        </td>
                                        <td class="td-tmp_nombres">
                                            <?php echo  $data['tmp_nombres'] ; ?>
                                        </td>
                                        <td class="td-tmp_ap_casada">
                                            <?php echo  $data['tmp_ap_casada'] ; ?>
                                        </td>
                                        <td class="td-tmp_sexo">
                                            <?php echo  $data['tmp_sexo'] ; ?>
                                        </td>
                                        <td class="td-tmp_mostrar_materno">
                                            <?php echo  $data['tmp_mostrar_materno'] ; ?>
                                        </td>
                                        <td class="td-tmp_estado">
                                            <?php echo  $data['tmp_estado'] ; ?>
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
