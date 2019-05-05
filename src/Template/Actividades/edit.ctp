<div class="container">
  <div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Editar Actividad</h4>
      <?= $this->Form->create($actividade, ['novalidate']) ?>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nombre</label>
            <?php echo $this->Form->input('nombre', ['placeholder' => 'Coloque el nombre', 'label' => false, 'required']) ?>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Tipo</label>
            <?php echo $this->Form->input('tipo', ['placeholder' => 'Coloque el tipo', 'label' => false, 'required']) ?>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Estado</label>
            <?php echo $this->Form->input('estado', ['options' => ['1' => 'Activo', '0' => 'Inactivo'], 'label' => false, 'required']) ?>
          </div>
        </div>
        <div class="mb-3">
        <label for="lastName">Descripcion</label>
          <?php echo $this->Form->input('descripcion', ['type' => 'textarea', 'placeholder' => 'Coloque la descripcion', 'label' => false, 'required']); ?>
        </div>
          <?= $this->Form->button(__('Editar'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
  </div>
</div>