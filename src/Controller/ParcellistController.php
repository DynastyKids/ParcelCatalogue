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
        $parcellistA = $this->Parcellist->find()->where(['street like'=>'A%']);
        $parcellistB = $this->Parcellist->find()->where(['street like'=>'B%']);
        $parcellistC = $this->Parcellist->find()->where(['street like'=>'C%']);
        $parcellistD = $this->Parcellist->find()->where(['street like'=>'D%']);
        $parcellistE = $this->Parcellist->find()->where(['street like'=>'E%']);
        $parcellistF = $this->Parcellist->find()->where(['street like'=>'F%']);
        $parcellistG = $this->Parcellist->find()->where(['street like'=>'G%']);
        $parcellistH = $this->Parcellist->find()->where(['street like'=>'H%']);
        $parcellistI = $this->Parcellist->find()->where(['street like'=>'I%']);
        $parcellistJ = $this->Parcellist->find()->where(['street like'=>'J%']);
        $parcellistK = $this->Parcellist->find()->where(['street like'=>'K%']);
        $parcellistL = $this->Parcellist->find()->where(['street like'=>'L%']);
        $parcellistM = $this->Parcellist->find()->where(['street like'=>'M%']);
        $parcellistN = $this->Parcellist->find()->where(['street like'=>'N%']);
        $parcellistO = $this->Parcellist->find()->where(['street like'=>'O%']);
        $parcellistP = $this->Parcellist->find()->where(['street like'=>'P%']);
        $parcellistQ = $this->Parcellist->find()->where(['street like'=>'Q%']);
        $parcellistR = $this->Parcellist->find()->where(['street like'=>'R%']);
        $parcellistS = $this->Parcellist->find()->where(['street like'=>'S%']);
        $parcellistT = $this->Parcellist->find()->where(['street like'=>'T%']);
        $parcellistU = $this->Parcellist->find()->where(['street like'=>'U%']);
        $parcellistV = $this->Parcellist->find()->where(['street like'=>'V%']);
        $parcellistW = $this->Parcellist->find()->where(['street like'=>'W%']);
        $parcellistX = $this->Parcellist->find()->where(['street like'=>'X%']);
        $parcellistY = $this->Parcellist->find()->where(['street like'=>'Y%']);
        $parcellistZ = $this->Parcellist->find()->where(['street like'=>'Z%']);

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
