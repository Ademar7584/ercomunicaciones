<div class="container-flud">
    <div class="row">
        <div class="col-12 col-lg-9">
            <h2 class="text-center">Reporte de la Venta</h2>
            <div class="tab-content ml-1" id="myTabContent">
                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                    <h4>Datos del Cliente</h4>
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Nombre Completo</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($ventasProducto->cliente['nombre'])?> <?= h($ventasProducto->cliente['apellido'])?>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Correo</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($ventasProducto->cliente['correo']) ?>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Telefono</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($ventasProducto->cliente['telefono']) ?>
                        </div>
                    </div>
                    <hr />
                    <h4>Datos del Producto</h4>
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Marca</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($ventasProducto->producto['marca']) ?>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Stock</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($ventasProducto->producto['stock']) ?>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Precio</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($ventasProducto->producto['precio']) ?> Bs
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Fecha</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($ventasProducto->created)?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>