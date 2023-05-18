<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<style>
    .img-pedidos {
        height: 60px;
    }

    .remove {
        color: #000000;
        font-size: 1.3em;
    }

    .remove:hover {
        color: #000000;
    }

    .tr {
        text-align: right
    }

    .total {
        font-size: 20px;
        font-weight: bold;
    }
</style>
<?php
//debug($total_pedidos); 
?>

<?php $this->Html->script(array('cart.js'), array('inline' => false)) ?>

<?php echo $this->Form->create(null, array('url' => array('controller' => 'Pedidos', 'action' => 'recalcular'))); ?>

<h1>Pedidos</h1>

<hr>
<div class="row">
    <div class="col col-sm-1">IMAGEN</div>
    <div class="col col-sm-7">PLATILLO</div>
    <div class="col col-sm-1">PRECIO</div>
    <div class="col col-sm-1">CANTIDAD</div>
    <div class="col col-sm-1">SUBTOTAL</div>
    <div class="col col-sm-1">ELIMINAR</div>
</div>

<?php $tabindex = 1; ?>
<?php foreach ($pedidos as $pedido) : ?>


    <div class="row" id="row-<?php echo $pedido['Pedido']['id']; ?>">

        <div class="col col-sm-1">
            <figure>
                <?php echo $this->Html->image('../files/platillo/foto/' . $pedido['Platillo']['foto_dir'] . '/' . 'thumb_' . $pedido['Platillo']['foto'], array('class' => 'img-pedidos')); ?>
            </figure>
        </div>

        <div class="col col-sm-7">
            <strong>
                <?php echo $this->Html->link($pedido['Platillo']['nombre'], array('controller' => 'paltillos', 'action' => 'view', $pedido['Pedido']['platillo_id'])); ?>
            </strong>
        </div>

        <div class="col col-sm-1 id=<?php echo $pedido['Pedido']['id']; ?>">
            $ <?php echo $pedido['Platillo']['precio'] ?>
        </div>

        <div class="col col-sm-1">
            <?php echo $this->Form->input($pedido['Pedido']['id'], array('dvi' => false/*, 'type' => 'number'*/, 'class' => 'numeric form-control input-sm', 'label' => false, 'size' => 2, 'maxlenght' => 2, 'tabindex' => $tabindex++, 'data-id' => $pedido['Pedido']['id'], 'id' => 'cantidad_' . $pedido['Pedido']['id'], 'value' => $pedido['Pedido']['cantidad'])) ?>
        </div>

        <div class="col col-sm-1" style="background-color: none;" id="subtotal_<?php echo $pedido['Pedido']['id']; ?>">
            <?php echo $pedido['Pedido']['subtotal']; ?>
        </div>

        <div class="col col-sm-1">
            <?php
            echo $this->Html->link('<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', '#', array('escapeTitle' => false, 'title' => 'Eliminar item', 'id' => $pedido['Pedido']['id'], 'class' => 'remove'));
            ?>
        </div>

    </div>
    <br />
<?php endforeach; ?>
<hr>
<div class="row">
    <div class="col col-sm-12">
        <div class="pull-right tr">

            <?php echo $this->Html->link('Quitar pedido', array('controller' => 'pedidos', 'action' => 'quitar'), array('class' => 'btn btn-danger', 'confirm' => 'Esta seguro de quitar los pedidos ?')); ?>

            &nbsp;&nbsp;

            <?php echo $this->Form->button('Recalcular', array('class' => 'btn btn-default', 'escape' => false, 'name' => 'recalcular', 'value' => 'recalcular')); ?>
            <br><br><br><br>

            <span class="total">Total Orden:</span>
            <span id="total" class="total">
                $ <?php echo $total_pedidos; ?>
            </span>

            <br><br>

            <?php echo $this->Form->button('<i class="glyphicon glyphicon-arrow-right"></i> Procesar Orden', array('class' => 'btn btn-primary', 'escape' => false, 'name' => 'procesar', 'value' => 'procesar')); ?>

            <?php echo $this->Form->end(); ?>

        </div>
    </div>
</div>