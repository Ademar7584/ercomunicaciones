<!--
<div class="clientes view large-9 medium-8 columns content">
    <h3><?= h($cliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($cliente->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($cliente->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ci') ?></th>
            <td><?= h($cliente->ci) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($cliente->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($cliente->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo') ?></th>
            <td><?= h($cliente->correo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($cliente->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Persona') ?></th>
            <td><?= $cliente->has('persona') ? $this->Html->link($cliente->persona->id, ['controller' => 'Personas', 'action' => 'view', $cliente->persona->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $this->Number->format($cliente->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cliente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cliente->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Notificacionescliente') ?></h4>
        <?php if (!empty($cliente->notificacionescliente)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Cliente Id') ?></th>
                <th scope="col"><?= __('Promocione Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->notificacionescliente as $notificacionescliente): ?>
            <tr>
                <td><?= h($notificacionescliente->id) ?></td>
                <td><?= h($notificacionescliente->nombre) ?></td>
                <td><?= h($notificacionescliente->cliente_id) ?></td>
                <td><?= h($notificacionescliente->promocione_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Notificacionescliente', 'action' => 'view', $notificacionescliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Notificacionescliente', 'action' => 'edit', $notificacionescliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notificacionescliente', 'action' => 'delete', $notificacionescliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notificacionescliente->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ventasproducto') ?></h4>
        <?php if (!empty($cliente->ventasproducto)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Cliente Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->ventasproducto as $ventasproducto): ?>
            <tr>
                <td><?= h($ventasproducto->id) ?></td>
                <td><?= h($ventasproducto->nombre) ?></td>
                <td><?= h($ventasproducto->cliente_id) ?></td>
                <td><?= h($ventasproducto->producto_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ventasproducto', 'action' => 'view', $ventasproducto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ventasproducto', 'action' => 'edit', $ventasproducto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ventasproducto', 'action' => 'delete', $ventasproducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ventasproducto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div> -->


<?= $this->Html->css('view')?>
<div class="container emp-profile">
    <form method="post">
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
    </form>
</div>