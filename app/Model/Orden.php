<?php
    class Orden extends AppModel{

        public $validate = array(
            'cliente' => array(
                'rule' => 'notEmpty'
            ),
            'dni' => array(
                'notEmpty' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Solo números'
                ),
                'numeric' => array(
                    'rule' => 'numeric',
                    'message' => 'Solo números'
                )
            )
        );

        public $belongsTo = array(
            'Mesa' => array(
                'className' => 'Mesa',
                'foreignKey' => 'mesa_id',
                'conditions'=> '',
                'fields' => '',
                'order' => ''
            )

        );

        public $HasMany = array(
            'OrdenItem' => array(
                'className' => 'OrdenItem',
                'foreignKey' => 'Orden_id',
                'dependent' => true,
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'exclusive' => '',
                'fnderQuery' => '',
                'counterQuery' => ''
            )
        );

}
?>
