<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

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
        $driverlist = TableRegistry::getTableLocator()->get('drivers')->find();
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
        $this->set(compact('driverlist'));
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
    public function offline()
    {
        $this->redirect('https://mascot.testingstar.top');
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

    public function api($word=null){
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
        $this->response->header('Access-Control-Allow-Origin','*');
        $this->response->header('Access-Control-Allow-Methods','*');
        $this->response->header('Access-Control-Max-Age','172800');
    }

    public function wechat(){
        $parcellist = $this->Parcellist->find()->orderAsc('street');
        $this->autoLayout = false;
        $this->render(false);
        $this->response->body(json_encode(['Status'=>'00','Data'=>($parcellist)]));
        $this->response->statusCode(200);
        $this->response->type("application/json");
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
        $driverlist = TableRegistry::getTableLocator()->get('drivers')->find();
        $suburbs = ['Clovelly','Coogee','Daceyville','Kingsford','Randwick','South Coogee','St Pauls'];
        if ($this->request->is('post')) {
            $receivedData = $this->request->getData();
            $driverzone = $driverlist->where(['id'=>$receivedData['driver']+1]);
            if($driverzone->count()>0){
                $receivedData['driver']=$driverzone->toArray()[0]['drivername'];
                $receivedData['zone']=$driverzone->toArray()[0]['zone'];
            }
            $receivedData['suburb'] = $suburbs[$this->request->getData()['suburb']];

            $parcellist = $this->Parcellist->patchEntity($parcellist, $receivedData);

            if ($this->Parcellist->save($parcellist)) {
                $this->Flash->success(__('New street has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('New street could not be saved. Please, try again.'));
        }

        $this->set(compact('suburbs'));
        $this->set(compact('driverlist'));
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
        $suburbs = ['Clovelly','Coogee','Daceyville','Kingsford','Randwick','South Coogee','St Pauls'];
        $driverlist = TableRegistry::getTableLocator()->get('drivers')->find();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $receivedData = $this->request->getData();
            $driverzone = $driverlist->where(['id'=>$receivedData['driver']+1]);
            if($driverzone->count()>0){
                $receivedData['driver']=$driverzone->toArray()[0]['drivername'];
                $receivedData['zone']=$driverzone->toArray()[0]['zone'];
            }
            $receivedData['suburb'] = $suburbs[$this->request->getData()['suburb']];

            $parcellist = $this->Parcellist->patchEntity($parcellist, $receivedData);
            if ($this->Parcellist->save($parcellist)) {
                $this->Flash->success(__('The changes has been saved.'));

                return $this->redirect(['action' => 'manage']);
            }
            $this->Flash->error(__('The change could not be saved. Please, try again.'));
        }
        $this->set(compact('suburbs'));
        $this->set(compact('parcellist'));
        $this->set(compact('driverlist'));
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
