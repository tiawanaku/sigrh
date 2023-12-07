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
    $pageTitle = "Tbl Persona Domicilio"; //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">Tbl Persona Domicilio</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn " href="<?php print_link("tblpersonadomicilio/add") ?>" >
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
                    <div id="tblpersonadomicilio-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/tblpersonadomicilio/", $field_name, $field_value); ?>
                            <?php Html::display_page_errors($errors); ?>
                            <div class="filter-tags mb-2">
                                <?php Html::filter_tag('search', __('Search')); ?>
                            </div>
                            <table class="table table-hover table-striped table-sm text-left">
                                <thead class="table-header ">
                                    <tr>
                                        <th class="td-perd_id" > Perd Id</th>
                                        <th class="td-perd_per_id" > Perd Per Id</th>
                                        <th class="td-perd_ciudad_residencia" > Perd Ciudad Residencia</th>
                                        <th class="td-perd_zona" > Perd Zona</th>
                                        <th class="td-perd_tipo_via" > Perd Tipo Via</th>
                                        <th class="td-perd_descripcion_via" > Perd Descripcion Via</th>
                                        <th class="td-perd_numero" > Perd Numero</th>
                                        <th class="td-perd_edificio" > Perd Edificio</th>
                                        <th class="td-perd_bloque" > Perd Bloque</th>
                                        <th class="td-perd_piso" > Perd Piso</th>
                                        <th class="td-perd_dpto" > Perd Dpto</th>
                                        <th class="td-perd_telefono" > Perd Telefono</th>
                                        <th class="td-perd_celular" > Perd Celular</th>
                                        <th class="td-perd_email_trabajo" > Perd Email Trabajo</th>
                                        <th class="td-perd_email_personal" > Perd Email Personal</th>
                                        <th class="td-perd_fam_emergencia" > Perd Fam Emergencia</th>
                                        <th class="td-perd_dir_emergencia" > Perd Dir Emergencia</th>
                                        <th class="td-perd_tel_emergencia" > Perd Tel Emergencia</th>
                                        <th class="td-perd_coordenadas" > Perd Coordenadas</th>
                                        <th class="td-perd_estado" > Perd Estado</th>
                                        <th class="td-perd_usuario_creacion" > Perd Usuario Creacion</th>
                                        <th class="td-perd_fecha_creacion" > Perd Fecha Creacion</th>
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
                                        $rec_id = ($data['perd_per_id'] ? urlencode($data['perd_per_id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <!--PageComponentStart-->
                                        <td class="td-perd_id">
                                            <?php echo  $data['perd_id'] ; ?>
                                        </td>
                                        <td class="td-perd_per_id">
                                            <?php echo  $data['perd_per_id'] ; ?>
                                        </td>
                                        <td class="td-perd_ciudad_residencia">
                                            <?php echo  $data['perd_ciudad_residencia'] ; ?>
                                        </td>
                                        <td class="td-perd_zona">
                                            <?php echo  $data['perd_zona'] ; ?>
                                        </td>
                                        <td class="td-perd_tipo_via">
                                            <?php echo  $data['perd_tipo_via'] ; ?>
                                        </td>
                                        <td class="td-perd_descripcion_via">
                                            <?php echo  $data['perd_descripcion_via'] ; ?>
                                        </td>
                                        <td class="td-perd_numero">
                                            <?php echo  $data['perd_numero'] ; ?>
                                        </td>
                                        <td class="td-perd_edificio">
                                            <?php echo  $data['perd_edificio'] ; ?>
                                        </td>
                                        <td class="td-perd_bloque">
                                            <?php echo  $data['perd_bloque'] ; ?>
                                        </td>
                                        <td class="td-perd_piso">
                                            <?php echo  $data['perd_piso'] ; ?>
                                        </td>
                                        <td class="td-perd_dpto">
                                            <?php echo  $data['perd_dpto'] ; ?>
                                        </td>
                                        <td class="td-perd_telefono">
                                            <?php echo  $data['perd_telefono'] ; ?>
                                        </td>
                                        <td class="td-perd_celular">
                                            <?php echo  $data['perd_celular'] ; ?>
                                        </td>
                                        <td class="td-perd_email_trabajo">
                                            <a href="<?php print_link("mailto:$data[perd_email_trabajo]") ?>"><?php echo $data['perd_email_trabajo']; ?></a>
                                        </td>
                                        <td class="td-perd_email_personal">
                                            <a href="<?php print_link("mailto:$data[perd_email_personal]") ?>"><?php echo $data['perd_email_personal']; ?></a>
                                        </td>
                                        <td class="td-perd_fam_emergencia">
                                            <?php echo  $data['perd_fam_emergencia'] ; ?>
                                        </td>
                                        <td class="td-perd_dir_emergencia">
                                            <?php echo  $data['perd_dir_emergencia'] ; ?>
                                        </td>
                                        <td class="td-perd_tel_emergencia">
                                            <?php echo  $data['perd_tel_emergencia'] ; ?>
                                        </td>
                                        <td class="td-perd_coordenadas">
                                            <?php echo  $data['perd_coordenadas'] ; ?>
                                        </td>
                                        <td class="td-perd_estado">
                                            <?php echo  $data['perd_estado'] ; ?>
                                        </td>
                                        <td class="td-perd_usuario_creacion">
                                            <?php echo  $data['perd_usuario_creacion'] ; ?>
                                        </td>
                                        <td class="td-perd_fecha_creacion">
                                            <?php echo  $data['perd_fecha_creacion'] ; ?>
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
