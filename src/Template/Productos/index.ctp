<?= $this->Html->css('indexproducto') ?>
<div class="container-fluid">
    <div class="row">
        <h2>Productos</h2>
        <div class="col-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-container">
                        <table class="table table-filter">
                            <tbody>
                                <?php foreach ($productos as $producto): ?>
                                <tr data-status="pagado">
                                    <td>
                                        <div class="media">
                                            <div>
                                                <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg"
                                                    class="media-photo">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="pull-right"><?= h($producto->marca) ?></h4>
                                                <h4 class="title"><?= h($producto->modelo) ?></h4>
                                                <h4 class="title text-danger"><?= h($producto->precio) ?> Bs
                                                </h4>
                                                <p><?= $this->Html->link(__('Detalles'), ['action' => 'view', $producto->id], ['class' => 'btn btn-primary btn-sm']) ?></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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
