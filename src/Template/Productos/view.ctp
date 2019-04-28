<!-- <?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Producto $producto
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Producto'), ['action' => 'edit', $producto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Producto'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Productos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Promocionesproducto'), ['controller' => 'Promocionesproducto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Promocionesproducto'), ['controller' => 'Promocionesproducto', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ventasproducto'), ['controller' => 'Ventasproducto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ventasproducto'), ['controller' => 'Ventasproducto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productos view large-9 medium-8 columns content">
    <h3><?= h($producto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Marca') ?></th>
            <td><?= h($producto->marca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modelo') ?></th>
            <td><?= h($producto->modelo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $producto->has('categoria') ? $this->Html->link($producto->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $producto->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($producto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio') ?></th>
            <td><?= $this->Number->format($producto->precio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stock') ?></th>
            <td><?= $this->Number->format($producto->stock) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $this->Number->format($producto->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($producto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($producto->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Promocionesproducto') ?></h4>
        <?php if (!empty($producto->promocionesproducto)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Promocione Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($producto->promocionesproducto as $promocionesproducto): ?>
            <tr>
                <td><?= h($promocionesproducto->id) ?></td>
                <td><?= h($promocionesproducto->nombre) ?></td>
                <td><?= h($promocionesproducto->producto_id) ?></td>
                <td><?= h($promocionesproducto->promocione_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Promocionesproducto', 'action' => 'view', $promocionesproducto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Promocionesproducto', 'action' => 'edit', $promocionesproducto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Promocionesproducto', 'action' => 'delete', $promocionesproducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $promocionesproducto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ventasproducto') ?></h4>
        <?php if (!empty($producto->ventasproducto)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Cliente Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($producto->ventasproducto as $ventasproducto): ?>
            <tr>
                <td><?= h($ventasproducto->id) ?></td>
                <td><?= h($ventasproducto->nombre) ?></td>
                <td><?= h($ventasproducto->cliente_id) ?></td>
                <td><?= h($ventasproducto->producto_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ventasproducto', 'action' => 'view', $ventasproducto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ventasproducto', 'action' => 'edit', $ventasproducto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ventasproducto', 'action' => 'delete', $ventasproducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ventasproducto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div> -->




<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">Modelo : <?= h($producto->modelo) ?></h2>
                                    <h6 class="d-block"> Marca : <?= h($producto->marca) ?></h6>
                                    <h6 class="d-block text-success">Precio : <?= h($producto->precio)?> Bs</h6>
                                </div>
                                <div class="ml-auto">
                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Productos', 'action' => 'edit', $producto->id], ['class' => 'btn btn-secondary btn-sm']) ?>
                                    <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Productos', 'action' => 'delete', $producto->id], ['confirm' => __('Estas seguro de eliminar'), 'class' => 'btn btn-danger btn-sm']) ?>  
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                            <h3>Detalles de Producto</h3>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Stock</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?= h($producto->stock)?>
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Categoria</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                tipo de categoria
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Estado</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?= h($producto->estado) ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Creado</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?= h($producto->created) ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Something</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Something
                                            </div>
                                        </div>
                                        <hr />

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>