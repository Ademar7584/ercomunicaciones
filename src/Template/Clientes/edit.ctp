<div class="container">
  <div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Editar Cliente</h4>
      <?= $this->Form->create($cliente, ['novalidate']) ?>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="firstName">Nombres</label>
          <?php echo $this->Form->input('nombre', ['placeholder' => 'Coloque el nombre', 'label' => false, 'required']) ?>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName">Apellido</label>
          <?php echo $this->Form->input('apellido', ['placeholder' => 'Coloque el apellido', 'label' => false, 'required']) ?>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName">C.I.</label>
          <?php echo $this->Form->input('ci', ['placeholder' => 'Coloque el C.I.', 'label' => false, 'required']) ?>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName">Direccion</label>
          <?php echo $this->Form->input('direccion', ['placeholder' => 'Coloque la direccion', 'label' => false, 'required']) ?>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName">Telefono</label>
          <?php echo $this->Form->input('telefono', ['placeholder' => 'Coloque el numero telefonico', 'label' => false, 'required']) ?>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName">Correo electronico</label>
          <?php echo $this->Form->input('correo', ['placeholder' => 'Coloque el numero telefonico', 'label' => false, 'required']) ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="lastName">tipo</label>
        <?php echo $this->Form->input('tipo', ['placeholder' => 'Coloque el tipo de cliente', 'label' => false, 'required']) ?>
      </div>
      <?= $this->Form->button(__('Editar'), ['class' => 'btn btn-primary']) ?>
      <?= $this->Form->end() ?>
    </div>
  </div>
</div>