<?= $this->Html->css('view')?>
<div class="container-fluid">
    <div class="row">
        <div class="col-7">
            <div class="profile-head">
                <h4>
                    <?= h($cliente->nombre)?>
                    <?= h($cliente->apellido)?>
                </h4>
                <h5>
                    <?= h($cliente->tipo) ?>
                </h5>
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
                            <p><?php echo $status[$cliente->estado] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="float-right">
                <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                    data-target="#exampleModalCenter">Enviar Correo</button>
                <?= $this->Html->link('Editar', ['action' => 'edit', $cliente->id], ['class' => 'btn btn-outline-success']) ?>
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Formulario de Envio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo Electronico</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="<?= $cliente->correo ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Mensaje</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary btn-sm">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>