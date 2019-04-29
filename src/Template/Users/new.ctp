<div class="container">
  <div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Nuevo Usuario</h4>
      <?= $this->Form->create($user, ['type' => 'file', 'novalidate']) ?>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nombres</label>
            <?php echo $this->Form->input('names', ['placeholder' => 'Coloque el nombre completo', 'label' => false, 'required']) ?>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Correo Electronico</label>
            <?php echo $this->Form->input('email', ['placeholder' => 'Coloque el correo Electronico', 'label' => false, 'required']) ?>
          </div>
        </div>
        <div class="mb-3">
        <label for="password">Contraseña</label>
        <?php echo $this->Form->input('password', ['placeholder' => 'Contraseña', 'label' => 'Contraseña', 'label' => false, 'required']); ?>
        </div>
        <div class="mb-3">
        <label for="password">Rol</label>
        <?php echo $this->Form->input('rol', ['options' => ['admin' => 'administrador', 'user' => 'usuario', 'cliente' => 'cliente'], 'label' => false, 'required']); ?>
        </div>
        <div class="mb-3">
        <label for="estado">Estado</label>
          <?php echo $this->Form->input('estado', ['label' => false]); ?>
        </div>
        <div class="mb-3">
          <?php echo $this->Form->input('image', ['type' => 'file', 'class' => 'filestyle', 'data-buttonName' => 'btn-primary', 'data-buttonText' => 'Examinar']); ?>
        </div>
          <?= $this->Form->button(__('crear'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
  </div>
</div>