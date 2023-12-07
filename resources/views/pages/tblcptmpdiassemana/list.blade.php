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
    $pageTitle = "Tbl Cp Tmp Dias Semana"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Cp Tmp Dias Semana</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn " href="<?php print_link("tblcptmpdiassemana/add") ?>" >
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
                    <div id="tblcptmpdiassemana-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblcptmpdiassemana/", $field_name, $field_value); ?>
                            <?php Html::display_page_errors($errors); ?>
                            <div class="filter-tags mb-2">
                                <?php Html::filter_tag('search', __('Search')); ?>
                            </div>
                            <table class="table table-hover table-striped table-sm text-left">
                                <thead class="table-header ">
                                    <tr>
                                        <th class="td-tds_per_id" > Tds Per Id</th>
                                        <th class="td-tds_lunes" > Tds Lunes</th>
                                        <th class="td-tds_martes" > Tds Martes</th>
                                        <th class="td-tds_miercoles" > Tds Miercoles</th>
                                        <th class="td-tds_jueves" > Tds Jueves</th>
                                        <th class="td-tds_viernes" > Tds Viernes</th>
                                        <th class="td-tds_sabado" > Tds Sabado</th>
                                        <th class="td-tds_domingo" > Tds Domingo</th>
                                        <th class="td-tds_semana" > Tds Semana</th>
                                        <th class="td-tds_fecha_inicial" > Tds Fecha Inicial</th>
                                        <th class="td-tds_fecha_final" > Tds Fecha Final</th>
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
                                        $rec_id = ($data['tds_per_id'] ? urlencode($data['tds_per_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <!--PageComponentStart-->
                                        <td class="td-tds_per_id">
                                            <?php echo  $data['tds_per_id'] ; ?>
                                        </td>
                                        <td class="td-tds_lunes">
                                            <?php echo  $data['tds_lunes'] ; ?>
                                        </td>
                                        <td class="td-tds_martes">
                                            <?php echo  $data['tds_martes'] ; ?>
                                        </td>
                                        <td class="td-tds_miercoles">
                                            <?php echo  $data['tds_miercoles'] ; ?>
                                        </td>
                                        <td class="td-tds_jueves">
                                            <?php echo  $data['tds_jueves'] ; ?>
                                        </td>
                                        <td class="td-tds_viernes">
                                            <?php echo  $data['tds_viernes'] ; ?>
                                        </td>
                                        <td class="td-tds_sabado">
                                            <?php echo  $data['tds_sabado'] ; ?>
                                        </td>
                                        <td class="td-tds_domingo">
                                            <?php echo  $data['tds_domingo'] ; ?>
                                        </td>
                                        <td class="td-tds_semana">
                                            <?php echo  $data['tds_semana'] ; ?>
                                        </td>
                                        <td class="td-tds_fecha_inicial">
                                            <?php echo  $data['tds_fecha_inicial'] ; ?>
                                        </td>
                                        <td class="td-tds_fecha_final">
                                            <?php echo  $data['tds_fecha_final'] ; ?>
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
