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

        $this->set(compact('parcellist'));
        $this->set(compact('parcellistA','parcellistB','parcellistC','parcellistD',
            'parcellistE','parcellistF','parcellistG','parcellistH','parcellistI','parcellistJ','parcellistK',
            'parcellistL','parcellistM','parcellistN','parcellistO','parcellistP','parcellistQ','parcellistR',
            'parcellistS','parcellistT','parcellistU','parcellistV','parcellistW','parcellistX','parcellistY','parcellistZ'));
    }

    /**
     * Offline method
     *
     * @return \Cake\Http\Response|null
     */
    public function Offline()
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

        $this->set(compact('parcellist'));
        $this->set(compact('parcellistA','parcellistB','parcellistC','parcellistD',
            'parcellistE','parcellistF','parcellistG','parcellistH','parcellistI','parcellistJ','parcellistK',
            'parcellistL','parcellistM','parcellistN','parcellistO','parcellistP','parcellistQ','parcellistR',
            'parcellistS','parcellistT','parcellistU','parcellistV','parcellistW','parcellistX','parcellistY','parcellistZ'));
    }

    /**
     * Zone method
     *
     * @param string|null $word keyword.
     * @return \Cake\Http\Response|null
     */
    public function zone($zone=null)
    {
        $parcellist = $this->Parcellist->find();
        debug($zone);
        if($zone==1){
            $parcellist = $this->Parcellist->find()->where(['zone like'=>'%1'])->orderAsc('street');
            $parcellistA = $this->Parcellist->find()->where(['street like'=>'A%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistB = $this->Parcellist->find()->where(['street like'=>'B%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistC = $this->Parcellist->find()->where(['street like'=>'C%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistD = $this->Parcellist->find()->where(['street like'=>'D%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistE = $this->Parcellist->find()->where(['street like'=>'E%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistF = $this->Parcellist->find()->where(['street like'=>'F%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistG = $this->Parcellist->find()->where(['street like'=>'G%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistH = $this->Parcellist->find()->where(['street like'=>'H%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistI = $this->Parcellist->find()->where(['street like'=>'I%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistJ = $this->Parcellist->find()->where(['street like'=>'J%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistK = $this->Parcellist->find()->where(['street like'=>'K%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistL = $this->Parcellist->find()->where(['street like'=>'L%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistM = $this->Parcellist->find()->where(['street like'=>'M%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistN = $this->Parcellist->find()->where(['street like'=>'N%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistO = $this->Parcellist->find()->where(['street like'=>'O%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistP = $this->Parcellist->find()->where(['street like'=>'P%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistQ = $this->Parcellist->find()->where(['street like'=>'Q%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistR = $this->Parcellist->find()->where(['street like'=>'R%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistS = $this->Parcellist->find()->where(['street like'=>'S%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistT = $this->Parcellist->find()->where(['street like'=>'T%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistU = $this->Parcellist->find()->where(['street like'=>'U%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistV = $this->Parcellist->find()->where(['street like'=>'V%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistW = $this->Parcellist->find()->where(['street like'=>'W%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistX = $this->Parcellist->find()->where(['street like'=>'X%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistY = $this->Parcellist->find()->where(['street like'=>'Y%', 'zone like'=>'%1'])->orderAsc('street');
            $parcellistZ = $this->Parcellist->find()->where(['street like'=>'Z%', 'zone like'=>'%1'])->orderAsc('street');
            $this->set(compact('parcellistA','parcellistB','parcellistC','parcellistD',
            'parcellistE','parcellistF','parcellistG','parcellistH','parcellistI','parcellistJ','parcellistK',
            'parcellistL','parcellistM','parcellistN','parcellistO','parcellistP','parcellistQ','parcellistR',
            'parcellistS','parcellistT','parcellistU','parcellistV','parcellistW','parcellistX','parcellistY','parcellistZ'));
        }else if($zone==2){
            $parcellist = $this->Parcellist->find()->where(['zone'=>'Randwick 2'])->orderAsc('street');
            $parcellist = $this->Parcellist->find()->where(['zone like'=>'%2'])->orderAsc('street');
            $parcellistA = $this->Parcellist->find()->where(['street like'=>'A%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistB = $this->Parcellist->find()->where(['street like'=>'B%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistC = $this->Parcellist->find()->where(['street like'=>'C%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistD = $this->Parcellist->find()->where(['street like'=>'D%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistE = $this->Parcellist->find()->where(['street like'=>'E%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistF = $this->Parcellist->find()->where(['street like'=>'F%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistG = $this->Parcellist->find()->where(['street like'=>'G%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistH = $this->Parcellist->find()->where(['street like'=>'H%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistI = $this->Parcellist->find()->where(['street like'=>'I%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistJ = $this->Parcellist->find()->where(['street like'=>'J%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistK = $this->Parcellist->find()->where(['street like'=>'K%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistL = $this->Parcellist->find()->where(['street like'=>'L%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistM = $this->Parcellist->find()->where(['street like'=>'M%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistN = $this->Parcellist->find()->where(['street like'=>'N%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistO = $this->Parcellist->find()->where(['street like'=>'O%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistP = $this->Parcellist->find()->where(['street like'=>'P%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistQ = $this->Parcellist->find()->where(['street like'=>'Q%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistR = $this->Parcellist->find()->where(['street like'=>'R%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistS = $this->Parcellist->find()->where(['street like'=>'S%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistT = $this->Parcellist->find()->where(['street like'=>'T%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistU = $this->Parcellist->find()->where(['street like'=>'U%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistV = $this->Parcellist->find()->where(['street like'=>'V%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistW = $this->Parcellist->find()->where(['street like'=>'W%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistX = $this->Parcellist->find()->where(['street like'=>'X%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistY = $this->Parcellist->find()->where(['street like'=>'Y%', 'zone like'=>'%2'])->orderAsc('street');
            $parcellistZ = $this->Parcellist->find()->where(['street like'=>'Z%', 'zone like'=>'%2'])->orderAsc('street');
            $this->set(compact('parcellistA','parcellistB','parcellistC','parcellistD',
                'parcellistE','parcellistF','parcellistG','parcellistH','parcellistI','parcellistJ','parcellistK',
                'parcellistL','parcellistM','parcellistN','parcellistO','parcellistP','parcellistQ','parcellistR',
                'parcellistS','parcellistT','parcellistU','parcellistV','parcellistW','parcellistX','parcellistY','parcellistZ'));
        } else if ($zone==0){
            $parcellist = $this->Parcellist->find()->whereNull('driver')->orderAsc('street');
        } else {
            $this->redirect('/');
        }
        $this->set(compact('parcellist'));
        $this->set(compact('zone'));
    }

    /**
     * Search method
     *
     * @param string|null $word keyword.
     * @return \Cake\Http\Response|null
     */
    public function search($word=null)
    {
        $parcellist = $this->Parcellist->find()->where(['street like' =>'%'.$word.'%'])->limit(15)->orderAsc('street');
        if (is_numeric(substr($word,0,1))){
            $strnum = (int) filter_var($word, FILTER_SANITIZE_NUMBER_INT);
            preg_match("/^[\w ]+$/i",$word,$result1);
            preg_match("/^[\w]+$/i",$word,$result2);
            if ($result1!=null){
                $strname= substr($word,strlen($strnum)+1);
            }
            if ($result2!=null){
                $strname = substr($word,strlen($strnum));
            }
            if($strnum%2==0){ //even
                $parcellist = $this->Parcellist->find()->where(['street like' =>'%'.$strname.'%'])->
                andWhere(['evenblimit<='.$strnum,'evenulimit>='.$strnum])->limit(15)->orderAsc('street');
            }else{//odd
                $parcellist = $this->Parcellist->find()->where(['street like' =>'%'.$strname.'%'])->
                andWhere(['oddblimit<='.$strnum,'oddulimit>='.$strnum])->limit(15)->orderAsc('street');
            }
        }

        $this->set(compact('parcellist'));
    }

    public function searchjs($word=null){
        $parcellist = $this->Parcellist->find()->select(['id','street','driver','zone','suburb'])->where(['street like' =>'%'.$word.'%'])->orderAsc('street');
        if (is_numeric(substr($word,0,1))){
            $strnum = (int) filter_var($word, FILTER_SANITIZE_NUMBER_INT);
            preg_match("/^[\w ]+$/i",$word,$result1);
            preg_match("/^[\w]+$/i",$word,$result2);
            if ($result1!=null){
                $strname= substr($word,strlen($strnum)+1);
            }
            if ($result2!=null){
                $strname = substr($word,strlen($strnum));
            }
            if($strnum%2==0){ //even
                $parcellist = $this->Parcellist->find()->where(['street like' =>'%'.$strname.'%'])->
                andWhere(['evenblimit<='.$strnum,'evenulimit>='.$strnum])->orderAsc('street');
            }else{//odd
                $parcellist = $this->Parcellist->find()->where(['street like' =>'%'.$strname.'%'])->
                andWhere(['oddblimit<='.$strnum,'oddulimit>='.$strnum])->orderAsc('street');
            }
        }

        $this->autoLayout = false;
        $this->render(false);
        $this->response->body(json_encode(['Status'=>'00','Data'=>($parcellist)]));
        $this->response->statusCode(200);
        $this->response->type("application/json");
    }

    public function api2(){
        $parcellist = $this->Parcellist->find()->orderAsc('street');
        $parcelcount = $parcellist->count();
        $parcelarray= $parcellist->toArray();
        $this->set(compact('parcellist','parcelcount','parcelarray'));
    }

    /**
     * Manage method
     *
     * @return \Cake\Http\Response|null
     */
    public function manage($word=null)
    {
        $parcellist = $this->Parcellist->find();
        if ($word!=null){
            $parcellist = $this->Parcellist->find()->where(['driver'=>""]);
        }

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
            $receivedData = $this->request->getData();
            if($receivedData['driver']=='Cesar' || $receivedData['driver']=='Ivan' || $receivedData['driver']=='Leo' ||
                $receivedData['driver']=='Danny' || $receivedData['driver']=='Chirs' || $receivedData['driver']=='Peter'
            || $receivedData['driver']=='Mark'){$receivedData['zone']= "Randwick 1";}
            else{$receivedData['zone']= "Randwick 2";}

            $parcellist = $this->Parcellist->patchEntity($parcellist, $receivedData);

            if ($this->Parcellist->save($parcellist)) {
                $this->Flash->success(__('New street has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('New street could not be saved. Please, try again.'));
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
            $receivedData = $this->request->getData();
            if($receivedData['driver']=='Cesar' || $receivedData['driver']=='Ivan' || $receivedData['driver']=='Leo' ||
                $receivedData['driver']=='Danny' || $receivedData['driver']=='Chirs' || $receivedData['driver']=='Peter'
                || $receivedData['driver']=='Mark'){$receivedData['zone']= "Randwick 1";}
            else{$receivedData['zone']= "Randwick 2";}

            $parcellist = $this->Parcellist->patchEntity($parcellist, $receivedData);
            if ($this->Parcellist->save($parcellist)) {
                $this->Flash->success(__('The changes has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The change could not be saved. Please, try again.'));
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
            $this->Flash->success(__('The item has been deleted.'));
        } else {
            $this->Flash->error(__('The item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
