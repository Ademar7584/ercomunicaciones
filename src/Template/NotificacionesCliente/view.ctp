<?= $this->Html->css('view')?>
<div class="container-flud">
    <div class="row">
        <div class="col-10">
            <h3>Detalles de la notificacion del cliente</h3>
            <div class="tab-content ml-1" id="myTabContent">
                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Nombre</label>
                        </div>
                        <div class="col-md-8 col-6">
                        <?= h($notificacionesCliente->nombre) ?>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Cliente</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($notificacionesCliente->cliente['nombre']) ?>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Promocion</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($notificacionesCliente->promocione['nombre']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <?= $this->Html->link('Editar', ['action' => 'edit', $notificacionesCliente->id], ['class' => 'btn btn-outline-success']) ?>
        </div>
    </div>
</div>