<!-- <?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\VentasProducto $ventasProducto
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ventas Producto'), ['action' => 'edit', $ventasProducto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ventas Producto'), ['action' => 'delete', $ventasProducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ventasProducto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ventas Producto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ventas Producto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ventasProducto view large-9 medium-8 columns content">
    <h3><?= h($ventasProducto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($ventasProducto->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cliente') ?></th>
            <td><?= $ventasProducto->has('cliente') ? $this->Html->link($ventasProducto->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $ventasProducto->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $ventasProducto->has('producto') ? $this->Html->link($ventasProducto->producto->id, ['controller' => 'Productos', 'action' => 'view', $ventasProducto->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ventasProducto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ventasProducto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ventasProducto->modified) ?></td>
        </tr>
    </table>
</div> -->


<?= $this->Html->css('view')?>
<div class="container-flud">
    <div class="row">
        <div class="col-10">
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
        <div class="col-2">
            <?= $this->Html->link('Editar', ['action' => 'edit', $ventasProducto->id], ['class' => 'btn btn-outline-success']) ?>
        </div>
    </div>
</div>