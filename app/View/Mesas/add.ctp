<div class="mesas form">
	<?php echo $this->Form->create('Mesa'); ?>
	<fieldset>
		<legend><?php echo __('Add Mesa'); ?></legend>
		<?php
		echo $this->Form->input('serie', array('class' => 'form-control'));
		echo $this->Form->input('puestos', array('class' => 'form-control'));
		echo $this->Form->input('posicion', array('class' => 'form-control'));
		echo $this->Form->input('mesero_id', array('class' => 'form-control'));
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
		<li><?php echo $this->Html->link(__('List Mesas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Meseros'), array('controller' => 'meseros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesero'), array('controller' => 'meseros', 'action' => 'add')); ?> </li>
	</ul>
</div>
