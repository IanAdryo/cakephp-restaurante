<div class="platillos form">
	<?php echo $this->Form->create('Platillo', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
	<fieldset>
		<legend><?php echo __('Add Platillo'); ?></legend>
		<?php
		echo $this->Form->input('nombre', array('class' => 'form-control'));
		echo $this->Form->input('descripcion', array('class' => 'form-control'));
		echo $this->Form->input('precio', array('class' => 'form-control'));
		echo $this->Form->input('foto', array('type' => 'file', 'label' => 'foto', 'id' => 'foto', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true'));
		echo $this->Form->input('foto_dir', array('type' => 'hidden'));
		echo $this->Form->input('categoria_platillo_id', array('class' => 'form-control'));
		echo $this->Form->input('Cocinero', array('class' => 'form-control'));
		?>
	</fieldset>
	<br>
	<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-md btn-primary mb-3')); ?>
</div>
<br>
<br>
<div class="btn-group">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		<?php echo __('Actions'); ?> <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="list-group-item"><?php echo $this->Html->link(__('Regresar'), array('action' => 'index'), array('class' => 'btn btn-sm btn-default')); ?></li>
	</ul>
</div>

