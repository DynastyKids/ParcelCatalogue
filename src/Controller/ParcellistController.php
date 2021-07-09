<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Parcellist Controller
 *
 * @property \App\Model\Table\ParcellistTable $Parcellist
 *
 * @method \App\Model\Entity\Parcellist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ParcellistController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $parcellist = $this->Parcellist->find();

        $this->set(compact('parcellist'));
    }

    /**
     * Index method
     *
     * @param string|null $word keyword.
     * @return \Cake\Http\Response|null
     */
    public function search($word=null)
    {
        $parcellist = $this->Parcellist->find()->where(['street like'=>$word.'%']);

        $this->set(compact('parcellist'));
    }

    /**
     * Manage method
     *
     * @return \Cake\Http\Response|null
     */
    public function manage()
    {
        $parcellist = $this->paginate($this->Parcellist);

        $this->set(compact('parcellist'));
    }

    /**
     * View method
     *
     * @param string|null $id Parcellist id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $parcellist = $this->Parcellist->get($id, [
            'contain' => [],
        ]);

        $this->set('parcellist', $parcellist);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $parcellist = $this->Parcellist->newEntity();
        if ($this->request->is('post')) {
            $parcellist = $this->Parcellist->patchEntity($parcellist, $this->request->getData());
            if ($this->Parcellist->save($parcellist)) {
                $this->Flash->success(__('The parcellist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The parcellist could not be saved. Please, try again.'));
        }
        $this->set(compact('parcellist'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Parcellist id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $parcellist = $this->Parcellist->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parcellist = $this->Parcellist->patchEntity($parcellist, $this->request->getData());
            if ($this->Parcellist->save($parcellist)) {
                $this->Flash->success(__('The parcellist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The parcellist could not be saved. Please, try again.'));
        }
        $this->set(compact('parcellist'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Parcellist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $parcellist = $this->Parcellist->get($id);
        if ($this->Parcellist->delete($parcellist)) {
            $this->Flash->success(__('The parcellist has been deleted.'));
        } else {
            $this->Flash->error(__('The parcellist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
