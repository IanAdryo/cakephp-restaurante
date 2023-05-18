<?php 

class OrdenItems extends AppController {
    
    public $compnents = array('Session', 'RequestHandler');
    public $helpers = array('Html', 'Form', 'Js', 'Time');

    public $paginate = array(
        'limit' => 2,
        'order' => array(
            'OrdenItem.id' => 'asc'
        )
    );

    public function view($id = null) {

        $this->OrdenItem->recursive = 2;
        

    }
    
}
?>