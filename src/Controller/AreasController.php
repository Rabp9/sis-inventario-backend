<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Hash;
/**
 * Areas Controller
 *
 * @property \App\Model\Table\AreasTable $Areas
 */
class AreasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $areas = $this->Areas->find()
            ->where(['Areas.Idestado' => 1, 'Areas.id_depend' => 1])
            ->contain(['Dependencias']);

        $this->set(compact('areas'));
        $this->set('_serialize', ['areas']);
    }
    
    public function getAll() {
        $areas = $this->Areas->find()
            ->where(['Areas.Idestado' => 1])
            ->contain(['Dependencias']);

        $this->set(compact('areas'));
        $this->set('_serialize', ['areas']);
    }

    public function getByUser() {
        $user_id = $this->request->param('user_id');
        
        $detalle_trabajadores = $this->Areas->DetalleTrabajadores->find()
            ->select(['DetalleTrabajadores.cod_Parea'])
            ->distinct(['DetalleTrabajadores.cod_Parea'])
            ->where([
                'DetalleTrabajadores.PerCod' => $user_id,
                'DetalleTrabajadores.Idestado' => 1
            ])->toArray();
        
        $cod_Pareas = Hash::extract($detalle_trabajadores, '{n}.cod_Parea');
        
        $areas = $this->Areas->find()
            ->where([
                'Areas.Idestado' => 1, 
                'Areas.id_depend' => 1,
                'Areas.cod_Parea IN' => $cod_Pareas
            ])
            ->contain(['Dependencias']);
        
        $this->set(compact('areas'));
        $this->set('_serialize', ['areas']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Area id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $area = $this->Areas->get($id, [
            'contain' => []
        ]);

        $this->set('area', $area);
        $this->set('_serialize', ['area']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $area = $this->Area->newEntity();
        if ($this->request->is('post')) {
            $area = $this->Area->patchEntity($area, $this->request->getData());
            if ($this->Area->save($area)) {
                $this->Flash->success(__('The persona area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The persona area could not be saved. Please, try again.'));
        }
        $this->set(compact('area'));
        $this->set('_serialize', ['area']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Area id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $area = $this->Area->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $area = $this->Area->patchEntity($area, $this->request->getData());
            if ($this->Area->save($area)) {
                $this->Flash->success(__('The persona area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The persona area could not be saved. Please, try again.'));
        }
        $this->set(compact('area'));
        $this->set('_serialize', ['area']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Area id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $area = $this->Area->get($id);
        if ($this->Area->delete($area)) {
            $this->Flash->success(__('The persona area has been deleted.'));
        } else {
            $this->Flash->error(__('The persona area could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function search($area = null) {
        $area = $this->request->getParam('search');
        $areas = $this->Areas->find()
            ->where([
                'Areas.per_Area LIKE' => '%' . $area . '%',
                'Areas.id_depend' => 1
            ]);
        
        $this->set(compact('areas'));
        $this->set('_serialize', ['areas']);
    }
}
