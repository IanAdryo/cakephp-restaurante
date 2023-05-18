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
                'conditions' => '',
                'fields' => '',
                'order' => ''
            )

        );

        public $hasMany = array(
            'OrdenItem' => array(
                'className' => 'OrdenItem',
                'foreignKey' => 'orden_id',
                'dependent' => true,
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'exclusive' => '',
                'finderQuery' => '',
                'counterQuery' => ''
            )
        );
    }
?>
