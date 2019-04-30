<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h4>Lista de Clientes</h4>
      <div class="table-responsive">
        <table id="mytable" class="table table-bordered table-striped">
          <thead>
            <th><?= $this->Paginator->sort('Nombre') ?></th>
            <th><?= $this->Paginator->sort('Apellido') ?></th>
            <th><?= $this->Paginator->sort('Direccion') ?></th>
            <th><?= $this->Paginator->sort('Correo Electronico') ?></th>
            <th><?= $this->Paginator->sort('Tipo') ?></th>
            <th scope="col" class="actions"><?= __('Acciones') ?></th>
          </thead>
          <tbody>
          <?php foreach ($clientes as $cliente): ?>
            <tr>
              <td><?= h($cliente->nombre) ?></td>
              <td><?= h($cliente->apellido) ?></td>
              <td><?= h($cliente->direccion) ?></td>
              <td><?= h($cliente->correo) ?></td>
              <td><?= h($cliente->tipo) ?></td>
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
<nav aria-label="Page navigation">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <?= $this->Paginator->prev(__('Anterior ')) ?>
    </li>
    <li class="page-item"><?= $this->Paginator->numbers() ?></li>
    <li class="page-item">
    <?= $this->Paginator->next(__(' Siguiente')) ?>
    </li>
  </ul>
</nav>
