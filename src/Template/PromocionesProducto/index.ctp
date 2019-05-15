<div class="container-fluid">
<div class="row">
<div class="col-12">
    <h3>Lista de promociones de productos 
          <?= $this->Html->link(__('Crear promocion de producto'), ['action' => 'add'], ['class' => 'btn btn-outline-primary float-right']) ?>
    </h3>
    <table id="mytable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('promocione_id') ?></th>
                <th scope="col" class="actions"><?= __('Acctiones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($promocionesProducto as $promocionesProducto): ?>
            <tr>
                <td><?= $this->Number->format($promocionesProducto->id) ?></td>
                <td><?= h($promocionesProducto->nombre) ?></td>
                <td><?= $promocionesProducto->producto['marca'] ?></td>
                <td><?= $promocionesProducto->promocione['nombre'] ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $promocionesProducto->id], ['class' => 'btn btn-primary btn-sm']) ?>
                    <?php if($current_user['rol'] === 'admin'): ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $promocionesProducto->id], ['confirm' => __('Estas seguro de eliminarlo'), 'class' => 'btn btn-danger btn-sm']) ?>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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