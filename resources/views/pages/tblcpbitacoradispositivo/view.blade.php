<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = "Ver"; //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="view" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3" >
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto  back-btn-col" >
                    <a class="back-btn btn " href="{{ url()->previous() }}" >
                        <i class="material-icons">arrow_back</i>                                
                    </a>
                </div>
                <div class="col  " >
                    <div class="">
                        <div class="h5 font-weight-bold text-primary">Ver</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div  class="" >
        <div class="container">
            <div class="row ">
                <div class="col comp-grid " >
                    <div  class=" page-content" >
                        <?php
                            if($data){
                            $rec_id = ($data['bd_id'] ? urlencode($data['bd_id']) : null);
                        ?>
                        <div id="page-main-content" class=" px-3 mb-3">
                            <div class="page-data">
                                <!--PageComponentStart-->
                                <div class="mb-3 row row justify-content-start g-0">
                                    <div class="col-12">
                                        <div class="bg-light mb-1 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">Bd Id</small>
                                                    <div class="fw-bold">
                                                        <?php echo  $data['bd_id'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="bg-light mb-1 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">Bd Di Id</small>
                                                    <div class="fw-bold">
                                                        <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("tblcpdispositivo/view/$data[bd_di_id]?subpage=1") ?>">
                                                        <i class="material-icons">visibility</i> <?php echo "Tbl Cp Dispositivo Detail" ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="bg-light mb-1 card-1 p-2 border rounded">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <small class="text-muted">Bd Fecha</small>
                                                <div class="fw-bold">
                                                    <?php echo  $data['bd_fecha'] ; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="bg-light mb-1 card-1 p-2 border rounded">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <small class="text-muted">Bd Estado Com Abrir</small>
                                                <div class="fw-bold">
                                                    <?php echo  $data['bd_estado_com_abrir'] ; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="bg-light mb-1 card-1 p-2 border rounded">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <small class="text-muted">Bd Estado Exp Archivo</small>
                                                <div class="fw-bold">
                                                    <?php echo  $data['bd_estado_exp_archivo'] ; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="bg-light mb-1 card-1 p-2 border rounded">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <small class="text-muted">Bd Marcas Leidas</small>
                                                <div class="fw-bold">
                                                    <?php echo  $data['bd_marcas_leidas'] ; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="bg-light mb-1 card-1 p-2 border rounded">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <small class="text-muted">Bd Marcas Descargadas</small>
                                                <div class="fw-bold">
                                                    <?php echo  $data['bd_marcas_descargadas'] ; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="bg-light mb-1 card-1 p-2 border rounded">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <small class="text-muted">Bd Estado Com Cerrar</small>
                                                <div class="fw-bold">
                                                    <?php echo  $data['bd_estado_com_cerrar'] ; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="bg-light mb-1 card-1 p-2 border rounded">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <small class="text-muted">Bd Estado Exito</small>
                                                <div class="fw-bold">
                                                    <?php echo  $data['bd_estado_exito'] ; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="bg-light mb-1 card-1 p-2 border rounded">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <small class="text-muted">Bd Observaciones</small>
                                                <div class="fw-bold">
                                                    <?php echo  $data['bd_observaciones'] ; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--PageComponentEnd-->
                            <div class="d-flex align-items-center gap-2">
                                <a class="btn btn-sm btn-success has-tooltip "   title="Editar" href="<?php print_link("tblcpbitacoradispositivo/edit/$rec_id"); ?>" >
                                <i class="material-icons">edit</i> Edit
                            </a>
                            <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" data-prompt-msg="¿Seguro que quieres borrar este registro?" data-display-style="modal" title="Borrar" href="<?php print_link("tblcpbitacoradispositivo/delete/$rec_id?redirect=tblcpbitacoradispositivo"); ?>" >
                            <i class="material-icons">delete_sweep</i> Delete
                        </a>
                    </div>
                </div>
            </div>
            <?php
                }
                else{
            ?>
            <!-- Empty Record Message -->
            <div class="text-muted p-3">
                <i class="material-icons">block</i> ningún record fue encontrado
            </div>
            <?php
                }
            ?>
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
