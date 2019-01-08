<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\Router;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 */
class OrdersController extends AppController
{


    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add', 'ticketBookSuccess', 'ticketBookFailed']);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events'],
        ];
        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders'));
        $this->set('_serialize', ['orders']);
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['Events'],
        ]);

        $this->set('order', $order);
        $this->set('_serialize', ['order']);
    }

    /*
     */

    public function ticketBookSuccess($id = null)
    {
        $this->autoRender = false;
        if ($this->request->is(['patch', 'post', 'put'])) {

            $order = $this->Orders->get($id, [
                'contain' => ['Events'],
            ]);

            $status = $this->Orders->updateAll([
                'status' => $this->request->data['status'],
                'txnid' => $this->request->data['txnid'],
                'unmappedstatus' => $this->request->data['unmappedstatus'],
                'hash' => $this->request->data['hash'],
                'field9' => $this->request->data['field9'],
                'bank_ref_num' => $this->request->data['bank_ref_num'],
                'productinfo' => $order['event']['title'] . "_" . $order['event']['id']
            ], ['id' => $id]);

            $this->loadModel('Tickets');
            $status = $this->Tickets->updateAll([
                'status' => $this->request->data['status'],
                'txnid' => $this->request->data['txnid'],
                'unmappedstatus' => $this->request->data['unmappedstatus'],
                'hash' => $this->request->data['hash'],
                'field9' => $this->request->data['field9'],
                'bank_ref_num' => $this->request->data['bank_ref_num'],
                'productinfo' => $order['event']['title'] . "_" . $order['event']['id']
            ], ['orders_id' => $id]);
        }

        return $this->redirect(['controller' => 'Events', 'action' => 'chennai', $order['event']['id']]);
    }

    public function ticketBookFailed($id)
    {

        $this->autoRender = false;
        if ($this->request->is(['patch', 'post', 'put'])) {

            $order = $this->Orders->get($id, [
                'contain' => ['Events'],
            ]);

            $status = $this->Orders->updateAll([
                'status' => $this->request->data['status'],
                'txnid' => $this->request->data['txnid'],
                'unmappedstatus' => $this->request->data['unmappedstatus'],
                'hash' => $this->request->data['hash'],
                'field9' => $this->request->data['field9'],
                'bank_ref_num' => $this->request->data['bank_ref_num'],
                'productinfo' => $order['event']['title'] . "_" . $order['event']['id']
            ], ['id' => $id]);


            $this->loadModel('Tickets');
            $status = $this->Tickets->updateAll([
                'status' => $this->request->data['status'],
                'txnid' => $this->request->data['txnid'],
                'unmappedstatus' => $this->request->data['unmappedstatus'],
                'hash' => $this->request->data['hash'],
                'field9' => $this->request->data['field9'],
                'bank_ref_num' => $this->request->data['bank_ref_num'],
                'productinfo' => $order['event']['title'] . "_" . $order['event']['id']
            ], ['orders_id' => $id]);
        }
        return $this->redirect(['controller' => 'Events', 'action' => 'chennai', $order['event']['id']]);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $order = $this->Orders->newEntity();
        if ($this->request->is('post')) {

            $data = array();
            $id = $this->request->data['events_id'];
            $data['events_id'] = $this->request->data['events_id'];
            $data['firstname'] = $this->request->data['ticketFirstName'];
            $data['lastname'] = $this->request->data['ticketLastName'];
            $data['fullname'] = $this->request->data['ticketFirstName'] . " " . $this->request->data['ticketLastName'];
            $data['email'] = $this->request->data['ticketEmailAddress'];
            $data['phone'] = $this->request->data['ticketMobileNumber'];
            $data['ticketsCnt'] = $this->request->data['totalAllTicketCnt'];
            $data['amountTot'] = $this->request->data['ticketAllTotalAmount'];

            $order = $this->Orders->patchEntity($order, $data);
            if ($this->Orders->save($order)) {

                $order_id = $order->ID;

                //Payment GateWay Integration
                $marathon = new MarathonController();

                $payu['key'] = 'wBZpGV5E';
                $payu['salt'] = 'b8Hg0nhutX';
                $payu['txnid'] = $marathon->randomTxnId();
                $payu['amount'] = $this->request->data['ticketAllTotalAmount'];
                $payu['curl'] = '';
                $payu['productinfo'] = "Registration";
                $payu['service_provider'] = "ChennaiSmile";
                $payu['firstname'] = $this->request->data['ticketFirstName'];
                $payu['email'] = $this->request->data['ticketEmailAddress'];
                $payu['phone'] = $this->request->data['ticketMobileNumber'];
                $payu['surl'] = Router::url(['controller' => 'Orders', 'action' => 'ticketBookSuccess/' . $order_id, '_full' => true]);
                $payu['furl'] = Router::url(['controller' => 'Orders', 'action' => 'ticketBookFailed/' . $order_id, '_full' => true]);


                //Add the values to the Tickets Table
                $this->loadModel('Tickets');
                //debug($this->request->data['ticketIds']); exit(0);

                for ($i = 0; $i < count($this->request->data['ticketIds']); $i++) {
                    $ticket = array();

                    $conID = $this->request->data['ticketIds'][$i];

                    $ticket['orders_id'] = $order_id;
                    $ticket['events_id'] = $this->request->data['events_id'];
                    $ticket['firstname'] = $this->request->data['ticketFirstName'];
                    $ticket['lastname'] = $this->request->data['ticketLastName'];
                    $ticket['name'] = $this->request->data['ticketFirstName'] . " " . $this->request->data['ticketLastName'];
                    $ticket['email'] = $this->request->data['ticketEmailAddress'];
                    $ticket['phone'] = $this->request->data['ticketMobileNumber'];

                    $ticket['ticketName'] = $this->request->data['ticketName' . "_" . $conID];
                    $ticket['ticketType'] = $this->request->data['ticketType' . "_" . $conID];
                    $ticket['tickets'] = $this->request->data['totalTicketCnt' . "_" . $conID];
                    $ticket['eachPrice'] = $this->request->data['ticketPrice' . "_" . $conID];
                    $ticket['commissionPer'] = $this->request->data['ticketCommissionPerce' . "_" . $conID];
                    $ticket['commissionAmt'] = $this->request->data['ticketCommissionPrice' . "_" . $conID];

                    $commTot = (($this->request->data['ticketCommissionPrice' . "_" . $conID]) * ($this->request->data['totalTicketCnt' . "_" . $conID]));
                    $ticket['commissionTotal'] = $commTot;
                    $ticket['amount'] = $this->request->data['totalTicketPrice' . "_" . $conID];

                    $tickets = $this->Tickets->newEntity();
                    $tickets = $this->Tickets->patchEntity($tickets, $ticket);



                    if ($this->Tickets->save($tickets)) {
                        //debug($tickets);
                    }
                    //debug($tickets); exit(0);
                }

                $marathon->send($payu);
                $this->Flash->success(__('The order has been saved.'));
                return $this->redirect(['controller' => 'Events', 'action' => 'chennai', $id]);
                //return $this->redirect(['controller' => 'events','action' => 'chennai', $this->request->data['events_id']]);
            } else {
                $this->Flash->error(__('The order could not be saved. Please, try again.'));
                return $this->redirect(['controller' => 'Events', 'action' => 'chennai', $id]);
            }
        }
        $events = $this->Orders->Events->find('list', ['limit' => 200]);
        $this->set(compact('order', 'events'));
        $this->set('_serialize', ['order']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->data);
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The order could not be saved. Please, try again.'));
            }
        }
        $events = $this->Orders->Events->find('list', ['limit' => 200]);
        $this->set(compact('order', 'events'));
        $this->set('_serialize', ['order']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
