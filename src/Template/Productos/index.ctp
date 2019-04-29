<div class="container-fluid">
    <h2>Productos</h2>
    <div class="row">
        <?php foreach ($productos as $producto): ?>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <h3><?= h($producto->marca) ?></h3>
                <?= $this->Html->image('../files/productos/image/' . $producto->image_dir . '/square_' . $producto->image, ['alt' => $producto->marca, 'class' => 'img-responsive center-block']) ?>
                <div class="card-body">
                    <p class="card-text">Modelo : <?= h($producto->modelo) ?></p>
                    <p class="card-text">Precio : <?= h($producto->precio) ?></p>
                    <?= $this->Html->link('Ver', ['action' => 'view', $producto->id], ['class' => 'btn btn-sm btn-info']) ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>