<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h3>Lista de Clientes <?= $this->Html->link(__('Crear Cliente'), ['controller' => 'Clientes', 'action' => 'add'], ['class' => 'btn btn-outline-primary float-right']) ?></h3>
      <div class="table-responsive">
        <table id="mytable" class="table table-bordered table-striped">
          <thead>
            <th><?= $this->Paginator->sort('Nombre') ?></th>
            <th><?= $this->Paginator->sort('Apellido') ?></th>
            <th><?= $this->Paginator->sort('Direccion') ?></th>
            <th><?= $this->Paginator->sort('Correo Electronico') ?></th>
            <th scope="col" class="actions"><?= __('Acciones') ?></th>
          </thead>
          <tbody>
          <?php foreach ($clientes as $cliente): ?>
            <tr>
              <td><?= h($cliente->nombre) ?></td>
              <td><?= h($cliente->apellido) ?></td>
              <td><?= h($cliente->direccion) ?></td>
              <td><?= h($cliente->correo) ?></td>
              <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $cliente->id], ['class' => 'btn btn-primary btn-sm']) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $cliente->id], ['confirm' => __('Estas seguro de eliminarlo'), 'class' => 'btn btn-danger btn-sm']) ?>
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