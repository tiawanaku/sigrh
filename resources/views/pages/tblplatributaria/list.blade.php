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
    $pageTitle = "Tbl Pla Tributaria"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Pla Tributaria</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn " href="<?php print_link("tblplatributaria/add") ?>" >
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
                    <div id="tblplatributaria-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblplatributaria/", $field_name, $field_value); ?>
                            <?php Html::display_page_errors($errors); ?>
                            <div class="filter-tags mb-2">
                                <?php Html::filter_tag('search', __('Search')); ?>
                            </div>
                            <table class="table table-hover table-striped table-sm text-left">
                                <thead class="table-header ">
                                    <tr>
                                        <th class="td-trb_per_id" > Trb Per Id</th>
                                        <th class="td-trb_pc_id" > Trb Pc Id</th>
                                        <th class="td-trb_prefijo" > Trb Prefijo</th>
                                        <th class="td-trb_monto_neto_j" > Trb Monto Neto J</th>
                                        <th class="td-trb_2min_no_imponible_k" > Trb 2Min No Imponible K</th>
                                        <th class="td-trb_base_imponible_l" > Trb Base Imponible L</th>
                                        <th class="td-trb_impuesto_rciva_m" > Trb Impuesto Rciva M</th>
                                        <th class="td-trb_2min_13porciento_n" > Trb 2Min 13Porciento N</th>
                                        <th class="td-trb_impuesto_neto_o" > Trb Impuesto Neto O</th>
                                        <th class="td-trb_form110_presentado_p" > Trb Form110 Presentado P</th>
                                        <th class="td-trb_saldo_favor_fisco_q" > Trb Saldo Favor Fisco Q</th>
                                        <th class="td-trb_saldo_favor_dependiente_r" > Trb Saldo Favor Dependiente R</th>
                                        <th class="td-trb_saldo_favor_dependiente_ant_s" > Trb Saldo Favor Dependiente Ant S</th>
                                        <th class="td-trb_mantenimiento_de_valor_t" > Trb Mantenimiento De Valor T</th>
                                        <th class="td-trb_saldo_favor_dependiente_ant_actualizado_u" > Trb Saldo Favor Dependiente Ant Actualizado U</th>
                                        <th class="td-trb_saldo_utilizado_v" > Trb Saldo Utilizado V</th>
                                        <th class="td-trb_impuesto_retenido_w" > Trb Impuesto Retenido W</th>
                                        <th class="td-trb_saldo_favor_dependiente_nuevo_x" > Trb Saldo Favor Dependiente Nuevo X</th>
                                        <th class="td-trb_tr_id_p" > Trb Tr Id P</th>
                                        <th class="td-trb_tr_id_s" > Trb Tr Id S</th>
                                        <th class="td-trb_estado" > Trb Estado</th>
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
                                        $rec_id = ($data['trb_per_id'] ? urlencode($data['trb_per_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <!--PageComponentStart-->
                                        <td class="td-trb_per_id">
                                            <?php echo  $data['trb_per_id'] ; ?>
                                        </td>
                                        <td class="td-trb_pc_id">
                                            <?php echo  $data['trb_pc_id'] ; ?>
                                        </td>
                                        <td class="td-trb_prefijo">
                                            <?php echo  $data['trb_prefijo'] ; ?>
                                        </td>
                                        <td class="td-trb_monto_neto_j">
                                            <?php echo  $data['trb_monto_neto_j'] ; ?>
                                        </td>
                                        <td class="td-trb_2min_no_imponible_k">
                                            <?php echo  $data['trb_2min_no_imponible_k'] ; ?>
                                        </td>
                                        <td class="td-trb_base_imponible_l">
                                            <?php echo  $data['trb_base_imponible_l'] ; ?>
                                        </td>
                                        <td class="td-trb_impuesto_rciva_m">
                                            <?php echo  $data['trb_impuesto_rciva_m'] ; ?>
                                        </td>
                                        <td class="td-trb_2min_13porciento_n">
                                            <?php echo  $data['trb_2min_13porciento_n'] ; ?>
                                        </td>
                                        <td class="td-trb_impuesto_neto_o">
                                            <?php echo  $data['trb_impuesto_neto_o'] ; ?>
                                        </td>
                                        <td class="td-trb_form110_presentado_p">
                                            <?php echo  $data['trb_form110_presentado_p'] ; ?>
                                        </td>
                                        <td class="td-trb_saldo_favor_fisco_q">
                                            <?php echo  $data['trb_saldo_favor_fisco_q'] ; ?>
                                        </td>
                                        <td class="td-trb_saldo_favor_dependiente_r">
                                            <?php echo  $data['trb_saldo_favor_dependiente_r'] ; ?>
                                        </td>
                                        <td class="td-trb_saldo_favor_dependiente_ant_s">
                                            <?php echo  $data['trb_saldo_favor_dependiente_ant_s'] ; ?>
                                        </td>
                                        <td class="td-trb_mantenimiento_de_valor_t">
                                            <?php echo  $data['trb_mantenimiento_de_valor_t'] ; ?>
                                        </td>
                                        <td class="td-trb_saldo_favor_dependiente_ant_actualizado_u">
                                            <?php echo  $data['trb_saldo_favor_dependiente_ant_actualizado_u'] ; ?>
                                        </td>
                                        <td class="td-trb_saldo_utilizado_v">
                                            <?php echo  $data['trb_saldo_utilizado_v'] ; ?>
                                        </td>
                                        <td class="td-trb_impuesto_retenido_w">
                                            <?php echo  $data['trb_impuesto_retenido_w'] ; ?>
                                        </td>
                                        <td class="td-trb_saldo_favor_dependiente_nuevo_x">
                                            <?php echo  $data['trb_saldo_favor_dependiente_nuevo_x'] ; ?>
                                        </td>
                                        <td class="td-trb_tr_id_p">
                                            <?php echo  $data['trb_tr_id_p'] ; ?>
                                        </td>
                                        <td class="td-trb_tr_id_s">
                                            <?php echo  $data['trb_tr_id_s'] ; ?>
                                        </td>
                                        <td class="td-trb_estado">
                                            <?php echo  $data['trb_estado'] ; ?>
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
