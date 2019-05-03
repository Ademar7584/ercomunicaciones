<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h4>Lista de Productos</h4>
      <div class="table-responsive">
        <table id="mytable" class="table table-bordered table-striped">
          <thead>
            <th><?= $this->Paginator->sort('Modelo') ?></th>
            <th><?= $this->Paginator->sort('Categoria') ?></th>
            <th><?= $this->Paginator->sort('Stock') ?></th>
            <th scope="col" class="actions"><?= __('Acciones') ?></th>
          </thead>
          <tbody>
          <?php foreach ($productos as $producto): ?>
            <tr>
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
<nav aria-label="Page navigation">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <?= $this->Paginator->prev(__('< Anterior')) ?>
    </li>
    <li class="page-item"><?= $this->Paginator->numbers() ?></li>
    <li class="page-item">
    <?= $this->Paginator->next(__('Siguiente >')) ?>
    </li>
  </ul>
</nav>
