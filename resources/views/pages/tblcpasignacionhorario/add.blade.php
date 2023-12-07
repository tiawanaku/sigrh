<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = "Agregar nuevo"; //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="add" data-page-url="{{ url()->full() }}">
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
                        <div class="h5 font-weight-bold text-primary">Agregar nuevo</div>
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
                <div class="col-md-9 comp-grid " >
                    <div  class="card card-1 border rounded page-content" >
                        <!--[form-start]-->
                        <form id="tblcpasignacionhorario-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('tblcpasignacionhorario.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_per_id">Ah Per Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_per_id-holder" class=" ">
                                                <input id="ctrl-ah_per_id" data-field="ah_per_id"  value="<?php echo get_value('ah_per_id') ?>" type="number" placeholder="Escribir Ah Per Id" step="any"  required="" name="ah_per_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_tipo_horario">Ah Tipo Horario <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_tipo_horario-holder" class=" ">
                                                <input id="ctrl-ah_tipo_horario" data-field="ah_tipo_horario"  value="<?php echo get_value('ah_tipo_horario') ?>" type="number" placeholder="Escribir Ah Tipo Horario" step="any"  required="" name="ah_tipo_horario"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_fecha_inicial">Ah Fecha Inicial <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_fecha_inicial-holder" class="input-group ">
                                                <input id="ctrl-ah_fecha_inicial" data-field="ah_fecha_inicial" class="form-control datepicker  datepicker"  required="" value="<?php echo get_value('ah_fecha_inicial') ?>" type="datetime" name="ah_fecha_inicial" placeholder="Escribir Ah Fecha Inicial" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_fecha_final">Ah Fecha Final <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_fecha_final-holder" class="input-group ">
                                                <input id="ctrl-ah_fecha_final" data-field="ah_fecha_final" class="form-control datepicker  datepicker"  required="" value="<?php echo get_value('ah_fecha_final') ?>" type="datetime" name="ah_fecha_final" placeholder="Escribir Ah Fecha Final" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_lun_ing1">Ah Lun Ing1 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_lun_ing1-holder" class=" ">
                                                <input id="ctrl-ah_lun_ing1" data-field="ah_lun_ing1"  value="<?php echo get_value('ah_lun_ing1') ?>" type="text" placeholder="Escribir Ah Lun Ing1"  required="" name="ah_lun_ing1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_lun_sal1">Ah Lun Sal1 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_lun_sal1-holder" class=" ">
                                                <input id="ctrl-ah_lun_sal1" data-field="ah_lun_sal1"  value="<?php echo get_value('ah_lun_sal1') ?>" type="text" placeholder="Escribir Ah Lun Sal1"  required="" name="ah_lun_sal1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_lun_ing2">Ah Lun Ing2 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_lun_ing2-holder" class=" ">
                                                <input id="ctrl-ah_lun_ing2" data-field="ah_lun_ing2"  value="<?php echo get_value('ah_lun_ing2') ?>" type="text" placeholder="Escribir Ah Lun Ing2"  required="" name="ah_lun_ing2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_lun_sal2">Ah Lun Sal2 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_lun_sal2-holder" class=" ">
                                                <input id="ctrl-ah_lun_sal2" data-field="ah_lun_sal2"  value="<?php echo get_value('ah_lun_sal2') ?>" type="text" placeholder="Escribir Ah Lun Sal2"  required="" name="ah_lun_sal2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_mar_ing1">Ah Mar Ing1 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_mar_ing1-holder" class=" ">
                                                <input id="ctrl-ah_mar_ing1" data-field="ah_mar_ing1"  value="<?php echo get_value('ah_mar_ing1') ?>" type="text" placeholder="Escribir Ah Mar Ing1"  required="" name="ah_mar_ing1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_mar_sal1">Ah Mar Sal1 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_mar_sal1-holder" class=" ">
                                                <input id="ctrl-ah_mar_sal1" data-field="ah_mar_sal1"  value="<?php echo get_value('ah_mar_sal1') ?>" type="text" placeholder="Escribir Ah Mar Sal1"  required="" name="ah_mar_sal1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_mar_ing2">Ah Mar Ing2 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_mar_ing2-holder" class=" ">
                                                <input id="ctrl-ah_mar_ing2" data-field="ah_mar_ing2"  value="<?php echo get_value('ah_mar_ing2') ?>" type="text" placeholder="Escribir Ah Mar Ing2"  required="" name="ah_mar_ing2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_mar_sal2">Ah Mar Sal2 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_mar_sal2-holder" class=" ">
                                                <input id="ctrl-ah_mar_sal2" data-field="ah_mar_sal2"  value="<?php echo get_value('ah_mar_sal2') ?>" type="text" placeholder="Escribir Ah Mar Sal2"  required="" name="ah_mar_sal2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_mie_ing1">Ah Mie Ing1 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_mie_ing1-holder" class=" ">
                                                <input id="ctrl-ah_mie_ing1" data-field="ah_mie_ing1"  value="<?php echo get_value('ah_mie_ing1') ?>" type="text" placeholder="Escribir Ah Mie Ing1"  required="" name="ah_mie_ing1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_mie_sal1">Ah Mie Sal1 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_mie_sal1-holder" class=" ">
                                                <input id="ctrl-ah_mie_sal1" data-field="ah_mie_sal1"  value="<?php echo get_value('ah_mie_sal1') ?>" type="text" placeholder="Escribir Ah Mie Sal1"  required="" name="ah_mie_sal1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_mie_ing2">Ah Mie Ing2 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_mie_ing2-holder" class=" ">
                                                <input id="ctrl-ah_mie_ing2" data-field="ah_mie_ing2"  value="<?php echo get_value('ah_mie_ing2') ?>" type="text" placeholder="Escribir Ah Mie Ing2"  required="" name="ah_mie_ing2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_mie_sal2">Ah Mie Sal2 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_mie_sal2-holder" class=" ">
                                                <input id="ctrl-ah_mie_sal2" data-field="ah_mie_sal2"  value="<?php echo get_value('ah_mie_sal2') ?>" type="text" placeholder="Escribir Ah Mie Sal2"  required="" name="ah_mie_sal2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_jue_ing1">Ah Jue Ing1 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_jue_ing1-holder" class=" ">
                                                <input id="ctrl-ah_jue_ing1" data-field="ah_jue_ing1"  value="<?php echo get_value('ah_jue_ing1') ?>" type="text" placeholder="Escribir Ah Jue Ing1"  required="" name="ah_jue_ing1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_jue_sal1">Ah Jue Sal1 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_jue_sal1-holder" class=" ">
                                                <input id="ctrl-ah_jue_sal1" data-field="ah_jue_sal1"  value="<?php echo get_value('ah_jue_sal1') ?>" type="text" placeholder="Escribir Ah Jue Sal1"  required="" name="ah_jue_sal1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_jue_ing2">Ah Jue Ing2 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_jue_ing2-holder" class=" ">
                                                <input id="ctrl-ah_jue_ing2" data-field="ah_jue_ing2"  value="<?php echo get_value('ah_jue_ing2') ?>" type="text" placeholder="Escribir Ah Jue Ing2"  required="" name="ah_jue_ing2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_jue_sal2">Ah Jue Sal2 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_jue_sal2-holder" class=" ">
                                                <input id="ctrl-ah_jue_sal2" data-field="ah_jue_sal2"  value="<?php echo get_value('ah_jue_sal2') ?>" type="text" placeholder="Escribir Ah Jue Sal2"  required="" name="ah_jue_sal2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_vie_ing1">Ah Vie Ing1 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_vie_ing1-holder" class=" ">
                                                <input id="ctrl-ah_vie_ing1" data-field="ah_vie_ing1"  value="<?php echo get_value('ah_vie_ing1') ?>" type="text" placeholder="Escribir Ah Vie Ing1"  required="" name="ah_vie_ing1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_vie_sal1">Ah Vie Sal1 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_vie_sal1-holder" class=" ">
                                                <input id="ctrl-ah_vie_sal1" data-field="ah_vie_sal1"  value="<?php echo get_value('ah_vie_sal1') ?>" type="text" placeholder="Escribir Ah Vie Sal1"  required="" name="ah_vie_sal1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_vie_ing2">Ah Vie Ing2 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_vie_ing2-holder" class=" ">
                                                <input id="ctrl-ah_vie_ing2" data-field="ah_vie_ing2"  value="<?php echo get_value('ah_vie_ing2') ?>" type="text" placeholder="Escribir Ah Vie Ing2"  required="" name="ah_vie_ing2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_vie_sal2">Ah Vie Sal2 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_vie_sal2-holder" class=" ">
                                                <input id="ctrl-ah_vie_sal2" data-field="ah_vie_sal2"  value="<?php echo get_value('ah_vie_sal2') ?>" type="text" placeholder="Escribir Ah Vie Sal2"  required="" name="ah_vie_sal2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_sab_ing1">Ah Sab Ing1 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_sab_ing1-holder" class=" ">
                                                <input id="ctrl-ah_sab_ing1" data-field="ah_sab_ing1"  value="<?php echo get_value('ah_sab_ing1') ?>" type="text" placeholder="Escribir Ah Sab Ing1"  required="" name="ah_sab_ing1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_sab_sal1">Ah Sab Sal1 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_sab_sal1-holder" class=" ">
                                                <input id="ctrl-ah_sab_sal1" data-field="ah_sab_sal1"  value="<?php echo get_value('ah_sab_sal1') ?>" type="text" placeholder="Escribir Ah Sab Sal1"  required="" name="ah_sab_sal1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_sab_ing2">Ah Sab Ing2 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_sab_ing2-holder" class=" ">
                                                <input id="ctrl-ah_sab_ing2" data-field="ah_sab_ing2"  value="<?php echo get_value('ah_sab_ing2') ?>" type="text" placeholder="Escribir Ah Sab Ing2"  required="" name="ah_sab_ing2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_sab_sal2">Ah Sab Sal2 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_sab_sal2-holder" class=" ">
                                                <input id="ctrl-ah_sab_sal2" data-field="ah_sab_sal2"  value="<?php echo get_value('ah_sab_sal2') ?>" type="text" placeholder="Escribir Ah Sab Sal2"  required="" name="ah_sab_sal2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_dom_ing1">Ah Dom Ing1 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_dom_ing1-holder" class=" ">
                                                <input id="ctrl-ah_dom_ing1" data-field="ah_dom_ing1"  value="<?php echo get_value('ah_dom_ing1') ?>" type="text" placeholder="Escribir Ah Dom Ing1"  required="" name="ah_dom_ing1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_dom_sal1">Ah Dom Sal1 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_dom_sal1-holder" class=" ">
                                                <input id="ctrl-ah_dom_sal1" data-field="ah_dom_sal1"  value="<?php echo get_value('ah_dom_sal1') ?>" type="text" placeholder="Escribir Ah Dom Sal1"  required="" name="ah_dom_sal1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_dom_ing2">Ah Dom Ing2 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_dom_ing2-holder" class=" ">
                                                <input id="ctrl-ah_dom_ing2" data-field="ah_dom_ing2"  value="<?php echo get_value('ah_dom_ing2') ?>" type="text" placeholder="Escribir Ah Dom Ing2"  required="" name="ah_dom_ing2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_dom_sal2">Ah Dom Sal2 <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_dom_sal2-holder" class=" ">
                                                <input id="ctrl-ah_dom_sal2" data-field="ah_dom_sal2"  value="<?php echo get_value('ah_dom_sal2') ?>" type="text" placeholder="Escribir Ah Dom Sal2"  required="" name="ah_dom_sal2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_autorizado">Ah Autorizado </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_autorizado-holder" class=" ">
                                                <input id="ctrl-ah_autorizado" data-field="ah_autorizado"  value="<?php echo get_value('ah_autorizado') ?>" type="text" placeholder="Escribir Ah Autorizado"  name="ah_autorizado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_json">Ah Json </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_json-holder" class=" ">
                                                <textarea placeholder="Escribir Ah Json" id="ctrl-ah_json" data-field="ah_json"  rows="5" name="ah_json" class=" form-control"><?php echo get_value('ah_json') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Por favor ingrese el texto</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ah_estado">Ah Estado <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ah_estado-holder" class=" ">
                                                <input id="ctrl-ah_estado" data-field="ah_estado"  value="<?php echo get_value('ah_estado') ?>" type="text" placeholder="Escribir Ah Estado"  required="" name="ah_estado"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-ajax-status"></div>
                            <!--[form-button-start]-->
                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                <button class="btn btn-primary" type="submit">
                                Entregar
                                <i class="material-icons">send</i>
                                </button>
                            </div>
                            <!--[form-button-end]-->
                        </form>
                        <!--[form-end]-->
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
    
$(document).ready(function(){
	// custom javascript | jquery codes
});

</script>
@endsection
