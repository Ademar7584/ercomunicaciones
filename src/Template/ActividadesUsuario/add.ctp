<div class="container">
  <div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Nuevo Actividad del Usuario</h4>
      <?= $this->Form->create($actividadesUsuario, ['novalidate']) ?>
          <div class="mb-3">
            <label for="firstName">Nombre</label>
            <?php echo $this->Form->input('nombre', ['placeholder' => 'Coloque un nombre', 'label' => false, 'required']) ?>
          </div>
        <div class="mb-3">
        <label for="firstName">Usuario</label>
          <?php echo $this->Form->input('user_id', ['label' => false]) ?>
        </div>
        <div class="mb-3">
        <label for="firstName">Actividad</label>
          <?php echo $this->Form->input('actividade_id', ['label' => false]) ?>
        </div>
          <?= $this->Form->button(__('Crear'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
  </div>
</div>