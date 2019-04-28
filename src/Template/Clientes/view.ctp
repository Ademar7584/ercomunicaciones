<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Cliente $cliente
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notificacionescliente'), ['controller' => 'Notificacionescliente', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notificacionescliente'), ['controller' => 'Notificacionescliente', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ventasproducto'), ['controller' => 'Ventasproducto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ventasproducto'), ['controller' => 'Ventasproducto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
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
</div>
