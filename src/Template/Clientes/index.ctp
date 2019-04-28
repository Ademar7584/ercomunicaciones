<!-- <div class="clientes index large-9 medium-8 columns content">
    <h3><?= __('Clientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ci') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('persona_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $this->Number->format($cliente->id) ?></td>
                <td><?= h($cliente->nombre) ?></td>
                <td><?= h($cliente->apellido) ?></td>
                <td><?= h($cliente->ci) ?></td>
                <td><?= h($cliente->direccion) ?></td>
                <td><?= h($cliente->telefono) ?></td>
                <td><?= h($cliente->correo) ?></td>
                <td><?= h($cliente->tipo) ?></td>
                <td><?= $this->Number->format($cliente->estado) ?></td>
                <td><?= $cliente->has('persona') ? $this->Html->link($cliente->persona->id, ['controller' => 'Personas', 'action' => 'view', $cliente->persona->id]) : '' ?></td>
                <td><?= h($cliente->created) ?></td>
                <td><?= h($cliente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div> -->


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
            <th scope="col" class="actions"><?= __('Actions') ?></th>
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