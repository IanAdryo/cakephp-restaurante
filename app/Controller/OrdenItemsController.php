<?php 

class OrdenItemsController extends AppController {
    
    public $compnents = array('Session', 'RequestHandler');
    public $helpers = array('Html', 'Form', 'Js', 'Time');

    public $paginate = array(
        'limit' => 3,
        'order' => array(
            'OrdenItem.id' => 'asc'
        )
    );

    public function view($id = null) {

        $this->OrdenItem->recursive = 2;

        if (!$this->OrdenItem->exists($id)) {
            
            throw new NotFoundException('Pedido invalido');    
        }
        $this->paginate['OrdenItem']['limit'] = 3;
        $this->paginate['OrdenItem']['conditions'] = array('OrdenItem.orden_id' => $id);
        $this->paginate['OrdenItem']['order'] = array('OrdenItem.id' => 'asc');
        $this->set('ordenitems', $this->paginate());

    }
    
}
?>