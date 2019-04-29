<!-- 
<div class="categorias index large-9 medium-8 columns content">
    <h3><?= __('Categorias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $categoria): ?>
            <tr>
                <td><?= $this->Number->format($categoria->id) ?></td>
                <td><?= h($categoria->nombre) ?></td>
                <td><?= h($categoria->tipo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categoria->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoria->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div> -->

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h4>Lista de Categorias</h4>
      <div class="table-responsive">
        <table id="mytable" class="table table-bordered table-striped">
          <thead>
            <th><?= $this->Paginator->sort('Nombre') ?></th>
            <th><?= $this->Paginator->sort('Tipo') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
          </thead>
          <tbody>
          <?php foreach ($categorias as $categoria): ?>
            <tr>
              <td><?= h($categoria->nombre) ?></td>
              <td><?= h($categoria->tipo) ?></td>
              <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $categoria->id], ['class' => 'btn btn-primary btn-sm']) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $categoria->id], ['confirm' => __('Estas seguro de eliminarlo'), 'class' => 'btn btn-danger btn-sm']) ?>
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
