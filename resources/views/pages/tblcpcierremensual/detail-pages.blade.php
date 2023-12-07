    <?php
        $rec_id = $masterRecordId ?? null;
        $page_id = "tab-".random_str(6);
    ?>
    <div class="master-detail-page card">
        <div class="card-header text-bold h5 p-3 mb-3">Tbl Cp Cierre Mensual Records</div>
        <div class="p-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a data-bs-toggle="tab" href="#tblcpplanillasanciones_<?php echo $page_id ?>" class="nav-link active">
                    Tbl Cp Cierre Mensual Tbl Cp Planilla Sanciones
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tblcpplanillasanciones_<?php echo $page_id ?>" role="tabpanel">
        <div class=" ">
            <?php
                $params = ['ps_cm_id' => $rec_id,'show_header' => false]; //new query param
                $query = array_merge(request()->query(), $params);
                $queryParams = http_build_query($query);
                $url = url("tblcpplanillasanciones/index/ps_cm_id/$rec_id?$queryParams");
            ?>
            <div class="ajax-inline-page" data-url="{{ $url }}" >
                <div class="ajax-page-load-indicator">
                    <div class="text-center d-flex justify-content-center load-indicator">
                        <span class="loader mr-3"></span>
                        <span class="fw-bold">Cargando...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
