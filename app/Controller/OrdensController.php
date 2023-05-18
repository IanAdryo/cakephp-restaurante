<?php
    
    class OrdensController extends AppController {
        
        public $components = array('Session', 'RequestHandler');
        public $helpers = array('Html', 'Form', 'Js', 'Time');
        
        public function add(){
        
            $this->loadModel('Pedido', 'RequestHandler');
            $orden_item = $this->Pedido->find('all', array('order' => 'Pedido.id ASC'));
            // debug($orden_item);

            if (count($orden_item) > 0) {

                $total_pedidos = $this->Pedido->find('all', array('fields' => 'SUM(Pedido.subtotal) as subtotal'));
                $mostrar_total_pedidos = $total_pedidos[0][0]['subtotal'];

                //recuperando mesa del restaurante

                $mesas = $this->Orden->Mesa->find('list');
                
                $this->set(compact('orden_item', 'mostrar_total_pedidos', 'mesas'));


            }   else    {

                $this->Session->setFlash('Ninguna orden ha sido procesada', $element = 'default', $params = array('class' => 'alert alert-warning'));
                return $this->redirect(array('controller' => 'platillos', 'action' => 'index'));

            }
            
        }
    }
    
?>
