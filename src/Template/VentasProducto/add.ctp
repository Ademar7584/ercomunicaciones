<div class="container">
  <div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Nuevo Pedido</h4>
      <?= $this->Form->create($ventasProducto, ['novalidate']) ?>
        <div class="mb-3">
          <?php echo $this->Form->input('nombre', ['placeholder' => 'Coloque un nombre', 'label' => false, 'required']) ?>
        </div>
        <div class="mb-3">
          <?php echo $this->Form->input('cliente_id') ?>
        </div>
        <div class="mb-3">
          <?php echo $this->Form->input('producto_id') ?>
        </div>
          <?= $this->Form->button(__('Crear'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
  </div>
</div>