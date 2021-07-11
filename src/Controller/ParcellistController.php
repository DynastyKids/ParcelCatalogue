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
        $parcellist = $this->Parcellist->find()->orderAsc('street');
        $parcellistA = $this->Parcellist->find()->where(['street like'=>'A%'])->orderAsc('street');
        $parcellistB = $this->Parcellist->find()->where(['street like'=>'B%'])->orderAsc('street');
        $parcellistC = $this->Parcellist->find()->where(['street like'=>'C%'])->orderAsc('street');
        $parcellistD = $this->Parcellist->find()->where(['street like'=>'D%'])->orderAsc('street');
        $parcellistE = $this->Parcellist->find()->where(['street like'=>'E%'])->orderAsc('street');
        $parcellistF = $this->Parcellist->find()->where(['street like'=>'F%'])->orderAsc('street');
        $parcellistG = $this->Parcellist->find()->where(['street like'=>'G%'])->orderAsc('street');
        $parcellistH = $this->Parcellist->find()->where(['street like'=>'H%'])->orderAsc('street');
        $parcellistI = $this->Parcellist->find()->where(['street like'=>'I%'])->orderAsc('street');
        $parcellistJ = $this->Parcellist->find()->where(['street like'=>'J%'])->orderAsc('street');
        $parcellistK = $this->Parcellist->find()->where(['street like'=>'K%'])->orderAsc('street');
        $parcellistL = $this->Parcellist->find()->where(['street like'=>'L%'])->orderAsc('street');
        $parcellistM = $this->Parcellist->find()->where(['street like'=>'M%'])->orderAsc('street');
        $parcellistN = $this->Parcellist->find()->where(['street like'=>'N%'])->orderAsc('street');
        $parcellistO = $this->Parcellist->find()->where(['street like'=>'O%'])->orderAsc('street');
        $parcellistP = $this->Parcellist->find()->where(['street like'=>'P%'])->orderAsc('street');
        $parcellistQ = $this->Parcellist->find()->where(['street like'=>'Q%'])->orderAsc('street');
        $parcellistR = $this->Parcellist->find()->where(['street like'=>'R%'])->orderAsc('street');
        $parcellistS = $this->Parcellist->find()->where(['street like'=>'S%'])->orderAsc('street');
        $parcellistT = $this->Parcellist->find()->where(['street like'=>'T%'])->orderAsc('street');
        $parcellistU = $this->Parcellist->find()->where(['street like'=>'U%'])->orderAsc('street');
        $parcellistV = $this->Parcellist->find()->where(['street like'=>'V%'])->orderAsc('street');
        $parcellistW = $this->Parcellist->find()->where(['street like'=>'W%'])->orderAsc('street');
        $parcellistX = $this->Parcellist->find()->where(['street like'=>'X%'])->orderAsc('street');
        $parcellistY = $this->Parcellist->find()->where(['street like'=>'Y%'])->orderAsc('street');
        $parcellistZ = $this->Parcellist->find()->where(['street like'=>'Z%'])->orderAsc('street');

        $this->set(compact('parcellist','parcellistA','parcellistB','parcellistC','parcellistD',
            'parcellistE','parcellistF','parcellistG','parcellistH','parcellistI','parcellistJ','parcellistK',
            'parcellistL','parcellistM','parcellistN','parcellistO','parcellistP','parcellistQ','parcellistR',
            'parcellistS','parcellistT','parcellistU','parcellistV','parcellistW','parcellistX','parcellistY','parcellistZ'));
    }

    /**
     * Index method
     *
     * @param string|null $word keyword.
     * @return \Cake\Http\Response|null
     */
    public function search($word=null)
    {
        $parcellist = $this->Parcellist->find()->where(['street like'=>$word.'%'])->limit(15)->orderAsc('street');

        $this->set(compact('parcellist'));
    }

    /**
     * Manage method
     *
     * @return \Cake\Http\Response|null
     */
    public function manage()
    {
        $parcellist = $this->Parcellist->find();

        $this->set(compact('parcellist'));
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
