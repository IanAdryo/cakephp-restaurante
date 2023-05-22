<div class="meseros form">
	<?php echo $this->Form->create('Mesero'); ?>
	<fieldset>
		<legend><?php echo __('Add Mesero'); ?></legend>
		<?php
		echo $this->Form->input('dni', array('class' => 'form-control'));
		echo $this->Form->input('nombre', array('class' => 'form-control'));
		echo $this->Form->input('apellido', array('class' => 'form-control'));
		echo $this->Form->input('telefono', array('class' => 'form-control'));
		?>
	</fieldset>
	<br>
	<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-md btn-primary mb-3')); ?>
</div>
<br>
<div class="btn-group">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		<?php echo __('Actions'); ?> <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li><?php echo $this->Html->link(__('List Meseros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesa'), array('controller' => 'mesas', 'action' => 'add')); ?> </li>
	</ul>
</div>
