<div class="mesas view">
	<h2><?php echo __('Mesa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mesa['Mesa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serie'); ?></dt>
		<dd>
			<?php echo h($mesa['Mesa']['serie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Puestos'); ?></dt>
		<dd>
			<?php echo h($mesa['Mesa']['puestos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Posicion'); ?></dt>
		<dd>
			<?php echo h($mesa['Mesa']['posicion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mesa['Mesa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($mesa['Mesa']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mesero'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mesa['Mesero']['nombre'], array('controller' => 'meseros', 'action' => 'view', $mesa['Mesero']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('List Mesas'), array('action' => 'index')); ?> </li>
	</ul>
</div>
