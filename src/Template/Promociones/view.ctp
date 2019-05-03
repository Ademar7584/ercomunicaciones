<?= $this->Html->css('view')?>
<div class="container-fluid">
    <div class="row">
        <div class="col-10">
            <h3>Detalles de la Promocion</h3>
            <div class="tab-content ml-1" id="myTabContent">
                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Nombre</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($promocione->nombre)?>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Descripcion</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($promocione->descripcion) ?>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Tipo</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?= h($promocione->tipo) ?>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Estado</label>
                        </div>
                        <div class="col-md-8 col-6">
                            <?php echo $status[$promocione->estado] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <?= $this->Html->link('Editar', ['action' => 'edit', $promocione->id], ['class' => 'btn btn-outline-success']) ?>
        </div>
    </div>
</div>