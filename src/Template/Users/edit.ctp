<div class="container">
  <div class="row">
      <div class="col-12 order-md-3">
        <h4 class="mb-3">Editar Usuario</h4>
        <?= $this->Form->create($user, ['type' => 'file', 'novalidate'], ['class' => 'needs-validation']) ?>
            <div class="mb-3">
              <?php echo $this->Form->input('names', ['label' => 'Nombres', 'class' => 'form-control', 'required']) ?>
              </div>
          <div class="mb-3">
          <?php echo $this->Form->input('email', ['label' => 'Correo Electronico', 'class' => 'form-control', 'required']); ?>
          </div>
          <div class="mb-3">
          <?php echo $this->Form->input('password', ['label' => 'Contraseña', 'class' => 'form-control', 'required', 'value' => '']); ?>
          </div>
          <div class="mb-3">
            <?php echo $this->Form->input('image', ['type' => 'file', 'class' => 'filestyle', 'data-buttonName' => 'btn-primary', 'data-buttonText' => 'Examinar']); ?>
          </div>
        <?= $this->Form->button(__('Editar'), ['class' => 'btn btn-primary']) ?>
      <?= $this->Form->end() ?>
      </div>
    </div>
</div>
