<div class="categoriaPlatillos form">
<?php echo $this->Form->create('CategoriaPlatillo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Categoria Platillo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('categoria');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CategoriaPlatillo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CategoriaPlatillo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categoria Platillos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Platillos'), array('controller' => 'platillos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Platillo'), array('controller' => 'platillos', 'action' => 'add')); ?> </li>
	</ul>
</div>
