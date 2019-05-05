<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h3>Lista de notificaciones del cliente
                <?= $this->Html->link(__('Crear notificacion del cliente'), ['action' => 'add'], ['class' => 'btn btn-outline-primary float-right']) ?>
            </h3>
            <table id="mytable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('cliente_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('promocione_id') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($notificacionesCliente as $notificacionesCliente): ?>
                    <tr>
                        <td><?= h($notificacionesCliente->nombre) ?></td>
                        <td><?= $notificacionesCliente->cliente['nombre'] ?></td>
                        <td><?= $notificacionesCliente->promocione['nombre'] ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $notificacionesCliente->id], ['class' => 'btn btn-primary btn-sm']) ?>
                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $notificacionesCliente->id], ['confirm' => __('Estas seguro de eliminarlo'), 'class' => 'btn btn-danger btn-sm']) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>