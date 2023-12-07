    <?php
        $rec_id = $masterRecordId ?? null;
        $page_id = "tab-".random_str(6);
    ?>
    <div class="master-detail-page card">
        <div class="card-header text-bold h5 p-3 mb-3">Tbl Persona Records</div>
        <div class="p-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a data-bs-toggle="tab" href="#tblbsafp_<?php echo $page_id ?>" class="nav-link active">
                    Tbl Persona Tbl Bs Afp
                </a>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="tab" href="#tblsaldevolucionsanciones_<?php echo $page_id ?>" class="nav-link ">
                Tbl Persona Tbl Sal Devolucion Sanciones
            </a>
        </li>
    </ul>
</div>
<div class="tab-content">
    <div class="tab-pane fade show active" id="tblbsafp_<?php echo $page_id ?>" role="tabpanel">
    <div class=" ">
        <?php
            $params = ['afp_per_id' => $rec_id,'show_header' => false]; //new query param
            $query = array_merge(request()->query(), $params);
            $queryParams = http_build_query($query);
            $url = url("tblbsafp/index/afp_per_id/$rec_id?$queryParams");
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
<div class="tab-pane fade show " id="tblsaldevolucionsanciones_<?php echo $page_id ?>" role="tabpanel">
<div class=" ">
    <?php
        $params = ['dev_per_id' => $rec_id,'show_header' => false]; //new query param
        $query = array_merge(request()->query(), $params);
        $queryParams = http_build_query($query);
        $url = url("tblsaldevolucionsanciones/index/dev_per_id/$rec_id?$queryParams");
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
