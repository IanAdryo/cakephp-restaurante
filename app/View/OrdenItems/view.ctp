<?php
$this->Paginator->options(array(
    'update' => '#contenedor-ordens',
    'beafore' => $this->Js->get('#processasndo')->effect('fadeIn', array('buffer' => false)),
    'complete' => $this->Js->get('#procesando')->effect('fadeOut', array('buffer' => false))
));
?>

<?php //debug($ordenitems); 
?>

<div id="contenedor-ordens">
    <div class="page-header">
        <h2>Pedidos de la mesa <?php echo $ordenitems[0]['Orden']['Mesa']['serie']; ?></h2>
    </div>
    <div class="col-md-12">
        <div class="progress oculto" id="procesando">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                <span class="sr-only">100% complete</span>
            </div>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('Platillo.nombre', 'Platillo'); ?></th>
                <th><?php echo $this->Paginator->sort('cantidad', 'Cantidad'); ?></th>
                <th><?php echo $this->Paginator->sort('subtotal', 'Subtotal'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordenitems as $ordenitem) : ?>
                <tr>
                    <td><?php echo $ordenitem['Platillo']['nombre'] ?></td>
                    <td><?php echo $ordenitem['OrdenItem']['cantidad'] ?></td>
                    <td><?php echo $ordenitem['OrdenItem']['subtotal'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <ul class="pagination">
        <li> <?php echo $this->Paginator->prev('< ' . __('previous'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
        <?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
        <li> <?php echo $this->Paginator->next(__('next') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
    </ul>
    <?php
		echo $this->Paginator->counter(array(
			'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} en total')
		));
        ?>
    <?php echo $this->Js->writeBuffer(); ?>
</div>