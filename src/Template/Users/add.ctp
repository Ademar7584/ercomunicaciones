<?= $this->Html->css('login')?>
<div class="container">
           <header>
               <h1>Formulario de Registro</h1>
           </header>
           <section>				
               <div id="container_demo" >
                   <a class="hiddenanchor" id="toregister"></a>
                   <a class="hiddenanchor" id="tologin"></a>
                   <div id="wrapper">
                       <div id="login" class="animate form">
                       <?= $this->Form->create($user, ['novalidate']) ?>
                               <h1>Registrarse</h1> 
                               <p>
                                   <label for="username" class="uname" >Nombres</label>
                                   <?php echo $this->Form->input('names', ['placeholder' => 'Nombre Completo', 'label' => false, 'required']) ?>
                               </p>
                               <p>
                                   <label for="username" class="uname" >correo electrónico</label>
                                  <?php echo $this->Form->input('email', ['placeholder' => 'Correo', 'label' => 'Correo Electronico', 'label' => false, 'required']) ?>
                                </p>
                                <p>
                                    <label for="username" class="uname" >Contraseña</label>
                                    <?php echo $this->Form->input('password', ['placeholder' => 'Contraseña', 'label' => 'Contraseña', 'value' => '', 'label' => false, 'required']); ?>
                                </p>
                               <p class="login button">
                                  <?= $this->Form->button('Registrarse', ['class' => 'btn btn-primary']) ?>
                               </p>
                               <p class="change_link">
                                   Ya estas registrado ?
                                   <?= $this->Html->link('inicia sesion', ['controller' => 'Users', 'action' => 'login'], ['class' => 'to_register"']) ?>
                               </p>
                               <?= $this->Form->end() ?>
                       </div>
                   </div>
               </div>  
           </section>
       </div>