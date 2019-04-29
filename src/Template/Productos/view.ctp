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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>