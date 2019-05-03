<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h4>Lista de Promociones</h4>
      <div class="table-responsive">
        <table id="mytable" class="table table-bordered table-striped">
          <thead>
            <th><?= $this->Paginator->sort('Nombre') ?></th>
            <th><?= $this->Paginator->sort('Descripcion') ?></th>
            <th><?= $this->Paginator->sort('tipo') ?></th>
            <th scope="col" class="actions"><?= __('Acciones') ?></th>
          </thead>
          <tbody>
          <?php foreach ($promociones as $promocion): ?>
            <tr>
              <td><?= h($promocion->nombre) ?></td>
              <td><?= h($promocion->descripcion) ?></td>
              <td><?= h($promocion->tipo) ?></td>
              <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $promocion->id], ['class' => 'btn btn-primary btn-sm']) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $promocion->id], ['confirm' => __('Estas seguro de eliminarlo'), 'class' => 'btn btn-danger btn-sm']) ?>
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