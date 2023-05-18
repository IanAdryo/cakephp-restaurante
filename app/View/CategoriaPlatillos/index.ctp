<div class="categoriaPlatillos index">
	<div class="page-header">
		<h2><?php echo __('Categoria Platillos'); ?></h2>
	</div>
	<div class="col-md-12">
		<table class="table table-striped">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('categoria'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($categoriaPlatillos as $categoriaPlatillo) : ?>
					<tr>
						<td><?php echo h($categoriaPlatillo['CategoriaPlatillo']['id']); ?>&nbsp;</td>
						<td><?php echo h($categoriaPlatillo['CategoriaPlatillo']['categoria']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('action' => 'view', $categoriaPlatillo['CategoriaPlatillo']['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoriaPlatillo['CategoriaPlatillo']['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $categoriaPlatillo['CategoriaPlatillo']['id']), array(), __('Are you sure you want to delete # %s?', $categoriaPlatillo['CategoriaPlatillo']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<p>
			<?php
			echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			?> </p>
		<ul class="pagination">

			<li><?php echo $this->Paginator->prev('< ' . __('previous'), array('tag' => false), null, array('class' => 'prev disabled ')); ?></li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li><?php echo $this->Paginator->next(__('next') . ' >', array('tag' => false), null, array('class' => 'next disabled ')); ?></li>
		</ul>
	</div>
	<!-- <div class="actions">
	<h3><?php //echo __('Actions'); 
		?></h3>
	<ul>
		<li><?php //echo $this->Html->link(__('New Categoria Platillo'), array('action' => 'add')); 
			?></li>
		<li><?php //echo $this->Html->link(__('List Platillos'), array('controller' => 'platillos', 'action' => 'index')); 
			?> </li>
		<li><?php //echo $this->Html->link(__('New Platillo'), array('controller' => 'platillos', 'action' => 'add')); 
			?> </li>
	</ul>
	</div> -->
</div>