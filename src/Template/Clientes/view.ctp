<?= $this->Html->css('view')?>
<div class="container emp-profile">
        <div class="row">
            <div class="col-10">
                <div class="profile-head">
                    <h5>
                        <?= h($cliente->nombre)?>
                        <?= h($cliente->apellido)?>
                    </h5>
                    <h6>
                        <?= h($cliente->tipo) ?>
                    </h6>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <span class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Detalles del Cliente</span>
                        </li>
                    </ul>
                </div>
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nombre del Cliente</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= h($cliente->nombre)?> <?= h($cliente->apellido)?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Correo Electronico</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $cliente->correo ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Direccion</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $cliente->direccion ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Telefono</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $cliente->telefono ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Tipo</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $cliente->tipo ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Estado</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $cliente->estado ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <?= $this->Html->link('Editar Cliente', ['action' => 'edit', $cliente->id], ['class' => 'profile-edit-btn']) ?>
            </div>
        </div>
</div>