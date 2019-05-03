<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h3>Lista de Productos <?= $this->Html->link(__('Crear Producto'), ['controller' => 'Productos', 'action' => 'add'], ['class' => 'btn btn-outline-primary float-right']) ?></h3>
      <div class="table-responsive">
        <table id="mytable" class="table table-bordered table-striped">
          <thead>
          <th><?= $this->Paginator->sort('Imagen')?></th>
            <th><?= $this->Paginator->sort('Modelo') ?></th>
            <th><?= $this->Paginator->sort('Categoria') ?></th>
            <th><?= $this->Paginator->sort('Stock') ?></th>
            <th scope="col" class="actions"><?= __('Acciones') ?></th>
          </thead>
          <tbody>
          <?php foreach ($productos as $producto): ?>
            <tr>
            <td>
                 <?= $this->Html->image('../files/productos/image/' . $producto->image_dir . '/portrait_' . $producto->image, ['alt' => $producto->marca, 'class' => 'img-responsive', 'style' => 'width: 4rem;']) ?>
                              </td>
              <td><?= h($producto->modelo) ?></td>
              <td><?= h($producto->categoria['nombre']) ?></td>
              <td><?= h($producto->stock) ?></td>
              <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $producto->id], ['class' => 'btn btn-primary btn-sm']) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $producto->id], ['confirm' => __('Estas seguro de eliminarlo'), 'class' => 'btn btn-danger btn-sm']) ?>
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
