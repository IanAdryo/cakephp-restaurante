<?php
    class Orden extends AppModel{

        public $validate = array(

        );

        public $belogsTo = array(
            'Mesa' => array(
                'className' => 'Mesa',
                'foreignKey' => 'mesa_id',
                'conditions'=> '',
                'fields' => '',
                'order' => ''
            )

        );

}
?>
