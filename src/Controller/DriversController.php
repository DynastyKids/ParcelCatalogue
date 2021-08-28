<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Drivers Controller
 *
 * @property \App\Model\Table\DriversTable $Drivers
 *
 * @method \App\Model\Entity\Driver[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DriversController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $drivers = $this->paginate($this->Drivers);

        $this->set(compact('drivers'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $driver = $this->Drivers->newEntity();
        if ($this->request->is('post')) {
            $driver = $this->Drivers->patchEntity($driver, $this->request->getData());
            if ($this->Drivers->save($driver)) {
                $this->Flash->success(__('The driver has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The driver could not be saved. Please, try again.'));
        }
        $this->set(compact('driver'));
    }

    /**
     * Active method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function active($id = null)
    {
        $driver = $this->Drivers->get($id,[
            'contain'=>[],
        ]);
        if ($driver->active ==1 ){
            $driver->active=0;
        } else {
            $driver->active=1;
        }
        if ($this->Drivers->save($driver)) {
            $this->Flash->success(__('Driver status has been changed.'));
        }

        $this->set(compact('driver'));
    }
}
