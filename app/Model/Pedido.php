<?php

class Pedido extends AppModel{

    public $belongsTo = array( //Muchos a uno
        'Platillo' => array(
            'className' => 'Platillo',
            'foreignkey' => 'paltillo_id'
        )
    );
}

?>