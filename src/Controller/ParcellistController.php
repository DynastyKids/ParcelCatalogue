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
        $parcellist = $this->Parcellist->find()->orderAsc('street');
        $str="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $parcellistArr=[];
        for($i=0;$i<strlen($str);$i++){
            $parcellist1=$this->Parcellist->find()->where(['street like'=>$str[$i].'%'])->orderAsc('street');
            array_push($parcellistArr,$parcellist1);
        }
        $this->set(compact('parcellist'));
        $this->set(compact('parcellistArr'));

        $drivers = $this->Parcellist->find()->distinct('driver')->orderAsc('driver')->select('driver')->toArray();
        $this->set(compact('drivers'));
    }

    /**
     * Driver method
     *
     *@param string|null $id sequence of driver.
     * @return \Cake\Http\Response|null
     */
    public function drivers($id = null)
    {
        $drivers = $this->Parcellist->find()->distinct('driver')->orderAsc('driver')->select('driver')->toArray();
        $this->set(compact('drivers'));

        $parcellist = $this->Parcellist->find()->orderAsc('street');
        if($id != null && is_numeric($id)){
            $parcellist = $this->Parcellist->find()->where(['driver'=>$drivers[$id]['driver']])->orderAsc('street');
        }
        $this->set(compact('parcellist'));
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
        $parcellist = $this->Parcellist->find()->select(['id','street','driver'])->where(['street like' =>'%'.$word.'%'])->order(['streetname','displayorder'],true);
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

    public function detectChange(){
        $parcellist = $this->Parcellist->get(1);
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
        $driverlist = TableRegistry::getTableLocator()->get('drivers')->find()->where(['active'=>1]);
        $suburbs = ['Clovelly','Clovelly West','Coogee','Daceyville','Kingsford','Randwick','South Coogee','St Pauls','Maroubra(MiscSort)','Kensington(MiscSort)','Other MiscSort'];
        if ($this->request->is('post')) {
            $receivedData = $this->request->getData();
            $driverzone = $driverlist->where(['id'=>$receivedData['driver']+1]);
            if($driverzone->count()>0){
                $receivedData['driver']=$driverzone->toArray()[0]['drivername'];
                $receivedData['zone']=$driverzone->toArray()[0]['zone'];
            }

            if ($receivedData['oddblimit']==1 && $receivedData['oddulimit'] == 999 && $receivedData['evenblimit']==2 && $receivedData['evenulimit']==998 ){
                // Full Street
                $receivedData['street'] = $receivedData['streetname'];
            } else if($receivedData['oddblimit'] >1 && $receivedData['oddulimit'] == 999 && $receivedData['evenblimit']>2 && $receivedData['oddulimit']==998){
                $receivedData['street'] = $receivedData['streetname']." (from ".$receivedData['oddblimit'].", ".$receivedData['evenblimit'].")";
            } else if($receivedData['oddblimit'] == 0 && $receivedData['oddulimit'] == 0 && $receivedData['evenblimit']>=2){
                $receivedData['street'] = $receivedData['streetname']." (Even Only:".$receivedData['evenblimit']."-".$receivedData['evenulimit'].")";
            } else if($receivedData['evenblimit'] == 0 && $receivedData['evenulimit'] == 0  && $receivedData['oddblimit']>=1){
                $receivedData['street'] = $receivedData['streetname']." (Odd Only:".$receivedData['oddblimit']."-".$receivedData['oddulimit'].")";
            } else if($receivedData['oddulimit']==$receivedData['oddblimit'] && $receivedData['evenulimit']==$receivedData['evenblimit']){
                // Skipped Fixed Address
                $receivedData['street'] = $receivedData['streetname'];
            } else{
                $receivedData['street'] = $receivedData['streetname']." (".$receivedData['oddblimit']."-".$receivedData['oddulimit'].", ".$receivedData['evenblimit']."-".$receivedData['evenulimit'].")";
            }
            $parcellist = $this->Parcellist->patchEntity($parcellist, $receivedData);
            if ($this->Parcellist->save($parcellist)) {
                $this->Flash->success(__($receivedData['street'].' assign to '.$receivedData['driver'].'. has been saved.'));
                return $this->redirect(['action' => 'updated']);
            }
            $this->Flash->error(__('There are some error happens on server.'));
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
        $suburbs = ['Clovelly','Clovelly West','Coogee','Daceyville','Kingsford','Randwick','South Coogee','St Pauls','Maroubra(MiscSort)','Kensington(MiscSort)','Other MiscSort'];
        $driverlist = TableRegistry::getTableLocator()->get('drivers')->find()->where(['active'=>1]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $receivedData = $this->request->getData();
            if($receivedData['ndriver']>0) {
                $driverzone = $driverlist->where(['id' => $receivedData['ndriver']]);
                if ($driverzone->count() > 0) {
                    $receivedData['driver'] = $driverzone->toArray()[0]['drivername'];
                    $receivedData['zone'] = $driverzone->toArray()[0]['zone'];
                }
            }
            debug($receivedData);
            if ($receivedData['oddblimit']==1 && $receivedData['oddulimit'] == 999 && $receivedData['evenblimit']==2 && $receivedData['evenulimit']==998 ){
                // Full Street
                $receivedData['street'] = $receivedData['streetname'];
            } else if($receivedData['oddblimit'] >1 && $receivedData['oddulimit'] == 999 && $receivedData['evenblimit']>2 && $receivedData['oddulimit']==998){
                $receivedData['street'] = $receivedData['streetname']." (from ".$receivedData['oddblimit'].", ".$receivedData['evenblimit'].")";
            } else if($receivedData['oddblimit'] == 0 && $receivedData['oddulimit'] == 0 && $receivedData['evenblimit']>=2){
                $receivedData['street'] = $receivedData['streetname']." (Even Only:".$receivedData['evenblimit']."-".$receivedData['evenulimit'].")";
            } else if($receivedData['evenblimit'] == 0 && $receivedData['evenulimit'] == 0  && $receivedData['oddblimit']>=1){
                $receivedData['street'] = $receivedData['streetname']." (Odd Only:".$receivedData['oddblimit']."-".$receivedData['oddulimit'].")";
            } else if($receivedData['oddulimit']==$receivedData['oddblimit'] && $receivedData['evenulimit']==$receivedData['evenblimit']){
                // Skipped Fixed Address
                $receivedData['street'] = $receivedData['streetname'];
            } else{
                $receivedData['street'] = $receivedData['streetname']." (".$receivedData['oddblimit']."-".$receivedData['oddulimit'].", ".$receivedData['evenblimit']."-".$receivedData['evenulimit'].")";
            }
            $parcellist = $this->Parcellist->patchEntity($parcellist, $receivedData);
            if ($this->Parcellist->save($parcellist)) {
                $this->Flash->success(__('The change for '.$receivedData['streetname'].' has been saved.'));
                return $this->redirect(['action' => 'updated']);
            }
            $this->Flash->error(__('The change for '.$receivedData['streetname'].' could not be saved. Please try again.'));
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
            $this->Flash->success(__('('.$parcellist->street.') has been deleted.'));
        } else {
            $this->Flash->error(__('('.$parcellist->street.') could not be deleted. Please try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function updated(){
        $parcellist = $this->Parcellist->get(1, ['contain' => [],]);
        date_default_timezone_set("Australia/Sydney");
        debug(date("d/m/Y H:i"));
        $parcellist->street = "00 Data Updated On: ".date("d/m/Y H:i");
        $parcellist->streetname = $parcellist->street;
        if ($this->Parcellist->save($parcellist)){
            // Data updated & time updated
        }
        return $this->redirect(['action' => 'index']);
    }
}
