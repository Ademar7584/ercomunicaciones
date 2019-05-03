<?= $this->Html->css('view')?>
<div class="container-fluid">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <?= $this->Html->image('../files/users/image/' . $user->image_dir . '/' . $user->image, ['class' => 'img-responsive img-thumbnail center-block']) ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        <?= h($user->names)?>
                    </h5>
                    <h6>
                        <?= h($user->rol) ?>
                    </h6>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <span class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Datos del Usuario</span>
                        </li>
                    </ul>
                </div>
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nombres</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= h($user->names)?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Correo Electronico</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= h($user->email)?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Estado</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $status[$user->estado] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <?= $this->Html->link('Editar Perfil', ['action' => 'edit', $user->id], ['class' => 'btn btn-outline-success']) ?>
            </div>
        </div>
    </form>
</div>