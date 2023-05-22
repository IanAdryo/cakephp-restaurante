<div class="categoriaPlatillos form">

	<?php echo $this->Form->create('CategoriaPlatillo'); ?>
	<fieldset>
		<legend><?php echo __('Add Categoria Platillo'); ?></legend>
		<?php echo $this->Form->input('categoria', array('class', 'form-control')); ?>
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
			<li><?php echo $this->Html->link(__('List Categoria Platillos'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Platillos'), array('controller' => 'platillos', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Platillo'), array('controller' => 'platillos', 'action' => 'add')); ?> </li>
		</ul>
	</div>