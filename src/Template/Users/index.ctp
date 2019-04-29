<?= $this->Html->css('index')?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h4>Lista de Usuarios</h4>
      <div class="table-responsive">
        <table id="mytable" class="table table-bordered table-striped">
          <thead>
            <th><?= $this->Paginator->sort('names') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('rol') ?></th>
            <th><?= $this->Paginator->sort('estado') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
          </thead>
          <tbody>
          <?php foreach ($users as $user): ?>
            <tr>
              <td><?= h($user->names) ?></td>
              <td><?= h($user->email) ?></td>
              <td><?= h($user->rol) ?></td>
              <td><?= h($user->estado) ?></td>
              <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id], ['class' => 'btn btn-primary btn-sm']) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], ['confirm' => __('Estas seguro de eliminarlo'), 'class' => 'btn btn-danger btn-sm']) ?>
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
