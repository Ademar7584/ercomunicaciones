<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h3>Lista de Pedidos</h3>
      <div class="table-responsive">
        <table id="mytable" class="table table-bordered table-striped">
          <thead>
            <th><?= $this->Paginator->sort('Nombre') ?></th>
            <th><?= $this->Paginator->sort('Cliente') ?></th>
            <th><?= $this->Paginator->sort('Correo del Cliente') ?></th>
            <th><?= $this->Paginator->sort('Producto') ?></th>
            <th><?= $this->Paginator->sort('Precio') ?></th>
          </thead>
          <tbody>
          <?php foreach ($ventasProducto as $ventaProducto): ?>
            <tr>
              <td><?= h($ventaProducto->nombre) ?></td>
              <td><?= h($ventaProducto->cliente['nombre']) ?></td>
              <td><?= h($ventaProducto->cliente['correo']) ?></td>
              <td><?= h($ventaProducto->producto['marca']) ?></td>
              <td><?= h($ventaProducto->producto['precio']) ?> Bs</td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
