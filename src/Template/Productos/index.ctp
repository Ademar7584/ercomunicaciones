<div class="container-fluid">
    <h2>Lista de Productos</h2>
    <div class="row">
        <?php foreach ($productos as $producto): ?>
        <div class="col-md-4">
            <div class="card" style="width: 18rem; margin-bottom: 1.5rem;">
                <?= $this->Html->image('../files/productos/image/' . $producto->image_dir . '/square_' . $producto->image, ['alt' => $producto->marca, 'class' => 'img-responsive center-block']) ?>
                <div class="card-body">
                    <p class="card-text">Modelo : <span class="text-secondary"><?= h($producto->modelo) ?></span></p>
                    <p class="card-text">Precio : <span class="text-success"><?= h($producto->precio) ?> Bs</span></p>
                    <?= $this->Html->link('Ver', ['action' => 'view', $producto->id], ['class' => 'btn btn-sm btn-info']) ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>