<nav class="navbar navbar-expand-sm">
  <span class="navbar-brand" href="#">Bienvenido <?= $current_user['names'] ?></span>
  <div class="collapse navbar-collapse" id="navbarsExample02">
    <ul class="navbar-nav mr-auto">
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li>Pagina de Inicio del Usuario</li>
    </ul>
  </div>
</nav>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <?php if($current_user['rol'] === 'admin'): ?>
      <div class="my-3 p-3 bg-white rounded shadow-sm border">
        <h6 class="border-bottom border-gray pb-2 mb-0">Clientes
          <?= $this->Html->link('Ver Clientes', ['controller' => 'Clientes', 'action' => 'index'], ['class' => 'float-right'])?>
        </h6>
        <?php foreach($clientes as $cliente): ?>
        <div class="media text-muted pt-3">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark"><?= h($cliente->nombre)?></strong>
            <?= h($cliente->correo) ?>
          </p>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
      <div class="my-3 p-3 bg-white rounded shadow-sm border">
        <h6 class="border-bottom border-gray pb-2 mb-0">Promociones
          <?= $this->Html->link('Ver Promociones', ['controller' => 'Promociones', 'action' => 'index'], ['class' => 'float-right'])?>
        </h6>
        <?php foreach($promociones as $promocion): ?>
        <div class="media text-muted pt-3">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark"><?= h($promocion->nombre)?></strong>
            <?= h($promocion->descripcion) ?>
          </p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="col-md-8 order-md-1">
      <?php if($current_user['rol'] === 'admin'): ?>
      <div class="my-3 p-3 bg-white rounded shadow-sm border">
        <h4>Categorias</h4>
        <table class="table table-bordered">
          <thead class="thead-light">
            <th><?= $this->Paginator->sort('Nombres')?></th>
            <th><?= $this->Paginator->sort('Descripcion')?></th>
            <th scope="col" class="actions"><?= __('Acciones') ?></th>
          </thead>
          <tbody>
            <?php foreach ($categorias as $categoria):?>
            <tr>
              <td><?= h($categoria->nombre) ?></td>
              <td><?= h($categoria->descripcion)?></td>
              <td>
                <?= $this->Html->link(__('Ver'), ['controller' => 'Categorias', 'action' => 'view', $categoria->id], ['class' => 'btn btn-primary btn-sm']) ?>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <?php endif; ?>
      <div class="my-3 p-3 bg-white rounded shadow-sm border">
        <h4>Productos</h4>
        <table class="table table-bordered">
          <thead class="thead-light">
            <tr>
              <th scope="col"><?= $this->Paginator->sort('Modelo') ?></th>
              <th scope="col"><?= $this->Paginator->sort('Stock') ?></th>
              <th class="actions"><?= __('Accion') ?></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($productos as $producto) :?>
            <tr>
              <td><?= h($producto->modelo) ?></td>
              <td><?= h($producto->stock)?></td>
              <td class="actions">
                <?= $this->Html->link(__('Ver'), ['controller' => 'Productos', 'action' => 'view', $producto->id], ['class' => 'btn btn-primary btn-sm']) ?>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>