<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h3>Lista de Pedidos <?= $this->Html->link(__('Imprimir Reporte'), ['action' => 'index', '_ext' => 'pdf'], ['class' => 'btn btn-outline-info']); ?> <?= $this->Html->link(__('Crear Pedido'), ['controller' => 'VentasProducto', 'action' => 'add'], ['class' => 'btn btn-outline-primary float-right']) ?></h3>
      <div class="table-responsive">
        <table id="mytable" class="table table-bordered table-striped">
          <thead>
            <th><?= $this->Paginator->sort('Nombre') ?></th>
            <th><?= $this->Paginator->sort('Cliente') ?></th>
            <th><?= $this->Paginator->sort('Producto') ?></th>
            <th scope="col" class="actions"><?= __('Acciones') ?></th>
          </thead>
          <tbody>
          <?php foreach ($ventasProducto as $ventaProducto): ?>
            <tr>
              <td><?= h($ventaProducto->nombre) ?></td>
              <td><?= h($ventaProducto->cliente['nombre']) ?></td>
              <td><?= h($ventaProducto->producto['marca']) ?></td>
              <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $ventaProducto->id], ['class' => 'btn btn-primary btn-sm']) ?>
                    <?php if($current_user['rol'] === 'admin'): ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $ventaProducto->id], ['confirm' => __('Estas seguro de eliminarlo'), 'class' => 'btn btn-danger btn-sm']) ?>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
        </ul>
</div>
