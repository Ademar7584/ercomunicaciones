<?php if(isset($current_user)): ?>
<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-dark">
  <?= $this->Html->link('Inicio', ['controller' => 'Users', 'action' => 'home'], ['class' => 'navbar-brand']) ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03"
    aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarsExample03">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Clientes</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <?= $this->html->link('Lista de Clientes', ['controller' => 'Clientes', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->html->link('Crear Cliente', ['controller' => 'Clientes', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Categorias</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <?= $this->html->link('Lista de Categorias', ['controller' => 'Categorias', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->html->link('Crear Categoria', ['controller' => 'Categorias', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Promociones</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <?= $this->html->link('Lista de Promociones', ['controller' => 'Promociones', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->html->link('Crear Promocion', ['controller' => 'Promociones', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Productos</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <?= $this->html->link('Lista de Productos', ['controller' => 'Productos', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->html->link('Crear Productos', ['controller' => 'Productos', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Actividades</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <?= $this->html->link('Lista de Actividades', ['controller' => 'Actividades', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->html->link('Crear Actividad', ['controller' => 'Actividades', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
        </div>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false"><span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
              <?= $this->Html->image('../files/users/image/' . $current_user['image_dir'] . '/portrait_' . $current_user['image'], ['class' => 'img-responsive img-circle', 'width' => '30px', 'height' => '30px']) ?>
          </span>
          <span class="user-name">
            <?= $current_user['names'] ?>
          </span>
          <b class="caret"></b></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown03">
          <?= $this->Html->link('Perfil', ['controller' => 'Users', 'action' => 'view', $current_user['id']], ['class' => 'dropdown-item']) ?>
          <?php if($current_user['rol'] === 'admin'): ?>
          <?= $this->Html->link('Listar usuarios', ['controller' => 'Users', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
          <?= $this->Html->link('Crear usuario', ['controller' => 'Users', 'action' => 'new'], ['class' => 'dropdown-item']) ?>
          <?php endif; ?>
          <?= $this->Html->link('salir', ['controller' => 'Users', 'action' => 'logout'], ['class' => 'dropdown-item'])?>
        </div>
      </li>
    </ul>
  </div>
</nav>
<?php endif; ?>