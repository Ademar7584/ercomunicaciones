<div class="container">
    <div class="row">
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Editar Notificacion del Cliente</h4>
        <?= $this->Form->create($notificacionesCliente, ['novalidate']) ?>
            <div class="mb-3">
              <label for="firstName">Nombre</label>
              <?php echo $this->Form->input('nombre', ['placeholder' => 'Coloque un nombre', 'label' => false, 'required']) ?>
            </div>
          <div class="mb-3">
          <label for="firstName">Usuario</label>
            <?php echo $this->Form->input('cliente_id', ['label' => false]) ?>
          </div>
          <div class="mb-3">
          <label for="firstName">Actividad</label>
            <?php echo $this->Form->input('promocione_id', ['label' => false]) ?>
          </div>
            <?= $this->Form->button(__('Crear'), ['class' => 'btn btn-primary']) ?>
          <?= $this->Form->end() ?>
      </div>
    </div>
</div>