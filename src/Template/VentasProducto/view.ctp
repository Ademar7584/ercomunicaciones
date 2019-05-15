<?= $this->Html->css('view')?>
<div class="container-flud">
    <div class="row">
        <div class="col-12 col-lg-9">
            <h3>Detalles del Pedido</h3>
            <div class="tab-content ml-1" id="myTabContent">
                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Nombre</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($ventasProducto->nombre)?>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Cliente</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($ventasProducto->cliente['nombre']) ?>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Producto</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($ventasProducto->producto['marca']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <?= $this->Html->link(__('Imprimir Reporte'), ['action' => 'view', $ventasProducto->id, '_ext' => 'pdf'], ['class' => 'btn btn-outline-primary']); ?>
            <?php if($current_user['rol'] === 'admin'): ?>
            <?= $this->Html->link('Editar', ['action' => 'edit', $ventasProducto->id], ['class' => 'btn btn-outline-success']) ?>
            <?php endif; ?>
        </div>
    </div>
</div>