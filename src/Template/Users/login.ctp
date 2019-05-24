<?= $this->Html->css('login') ?>
<div class="container">
    <header>
        <h1>Formulario de Inicio de Sesion</h1>
    </header>
           <section>				
               <div id="container_demo" >
                   <a class="hiddenanchor" id="toregister"></a>
                   <a class="hiddenanchor" id="tologin"></a>
                   <div id="wrapper">
                       <div id="login" class="animate form">
                       <?= $this->Flash->render('auth') ?>
                        <?= $this->Form->create() ?>
                               <h1>Iniciar Sesion</h1> 
                               <p> 
                                   <label for="username" class="uname" >Tu correo electrónico</label>
                                   <?= $this->Form->input('email', ['placeholder' => 'ejemplo@ejemplo.com', 'label' => false, 'required']) ?>
                               </p>
                               <p> 
                                   <label for="password" class="youpasswd">Tu Contraseña</label>
                                    <?= $this->Form->input('password', ['placeholder' => 'contraseña', 'label' => false, 'required']) ?>
                               </p>
                               <p class="login button"> 
                                   <?= $this->Form->button('acceder', ['class' => 'btn btn-secondary']) ?>
                               </p>
                               <p class="change_link">
                                   Aun no registrado ?
                                   <?= $this->Html->link('registrarse', ['controller' => 'Users', 'action' => 'add'], ['class' => 'to_register"']) ?>
                               </p>
                        <?= $this->Form->end() ?>       
                   </div>
               </div>  
           </section>
       </div>