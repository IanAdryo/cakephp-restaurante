<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Nuevo Usuario'); ?></legend>
	<?php
		echo $this->Form->input('fullname', array('label' => 'Nombre completo', 'class' => 'form-control'));
		echo $this->Form->input('username', array('label' => 'Nombre de usuario', 'class' => 'form-control'));
		echo $this->Form->input('password', array('label' => 'Contraseña', 'class' => 'form-control'));
		// echo $this->Form->input('role', array('class' => 'form-control', 'label' => 'Rol', 'type' => 'select', 'options' => array('admin' => 'Administrador', 'user' => 'Usuario'), array('class' => 'form-control')));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array('class' => 'btn btn-success', 'label' => 'Agregar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
