<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h3>Lista de Actividades del Usuario
                <?= $this->Html->link(__('Crear Actividad del Usuario'), ['action' => 'add'], ['class' => 'btn btn-outline-primary float-right']) ?>
            </h3>
            <div class="table-responsive">
                <table id="mytable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('actividade_id') ?></th>
                            <th scope="col" class="actions"><?= __('Aciones') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($actividadesUsuario as $actividadesUsuario): ?>
                        <tr>
                            <td><?= h($actividadesUsuario->nombre) ?></td>
                            <td><?= $actividadesUsuario->user['names'] ?></td>
                            <td><?= $actividadesUsuario->actividade['nombre'] ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['action' => 'view', $actividadesUsuario->id], ['class' => 'btn btn-primary btn-sm']) ?>
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $actividadesUsuario->id], ['confirm' => __('Estas seguro de eliminarlo'), 'class' => 'btn btn-danger btn-sm']) ?>
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