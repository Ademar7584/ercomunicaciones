<?= $this->Html->css('view')?>
<div class="container-flud">
    <div class="row">
        <div class="col-10">
            <h3>Detalles de la Actividad</h3>
            <div class="tab-content ml-1" id="myTabContent">
                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Nombre</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($actividade->nombre)?>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Descripcion</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($actividade->descripcion) ?>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Tipo</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($actividade->tipo) ?>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Estado</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?php echo $status[$actividade->estado] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <?php if($current_user['rol'] === 'admin'): ?>
            <?= $this->Html->link('Editar', ['action' => 'edit', $actividade->id], ['class' => 'btn btn-outline-success']) ?>
            <?php endif; ?>
        </div>
    </div>
</div>