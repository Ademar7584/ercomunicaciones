<div class="container">
  <div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Editar Producto</h4>
      <?= $this->Form->create($producto, ['type' => 'file', 'novalidate']) ?>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Marca</label>
            <?php echo $this->Form->input('marca', ['placeholder' => 'Coloque una marca', 'label' => false, 'required']) ?>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Modelo</label>
            <?php echo $this->Form->input('modelo', ['placeholder' => 'Coloque un modelo', 'label' => false, 'required']) ?>
          </div>
        </div>
        <div class="mb-3">
          <?php echo $this->Form->input('precio', array('type' => 'number'), 'required') ?>
        </div>
        <div class="mb-3">
          <?php echo $this->Form->input('stock', array('type' => 'number'), 'required') ?>
        </div>
        <div class="mb-3">
          <?php echo $this->Form->input('estado', ['options' => ['0' => 'disponible', '1' => 'no disponible']]); ?>
        </div>
        <div class="mb-3">
          <?php echo $this->Form->input('image', ['type' => 'file', 'class' => 'filestyle', 'data-buttonName' => 'btn-primary', 'data-buttonText' => 'Examinar']); ?>
        </div>
          <?= $this->Form->button(__('Editar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
  </div>
</div>