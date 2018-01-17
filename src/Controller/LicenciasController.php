<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Licencias Controller
 *
 * @property \App\Model\Table\LicenciasTable $Licencias
 */
class LicenciasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $licencias = $this->Licencias->find();

        $this->set(compact('licencias'));
        $this->set('_serialize', ['licencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Licencia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $licencia = $this->Licencias->get($id, [
            'contain' => ['Estados']
        ]);

        $this->set('licencia', $licencia);
        $this->set('_serialize', ['licencia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $licencia = $this->Licencias->newEntity();
        $licencia->estado_id = 1;
        if ($this->request->is('post')) {
            $licencia = $this->Licencias->patchEntity($licencia, $this->request->getData());
            if ($this->Licencias->save($licencia)) {
                $code = 200;
                $message = 'La licencia fue guardada correctamente';
            } else {
                $code = 500;
                $message = 'La licencia no fue guardada correctamente';
            }
        }
        $this->set(compact('licencia', 'code', 'message'));
        $this->set('_serialize', ['licencia', 'code', 'message']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Licencia id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $licencia = $this->Licencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $licencia = $this->Licencias->patchEntity($licencia, $this->request->getData());
            if ($this->Licencias->save($licencia)) {
                $this->Flash->success(__('The licencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The licencia could not be saved. Please, try again.'));
        }
        $estados = $this->Licencias->Estados->find('list', ['limit' => 200]);
        $this->set(compact('licencia', 'estados'));
        $this->set('_serialize', ['licencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Licencia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $licencia = $this->Licencias->get($id);
        if ($this->Licencias->delete($licencia)) {
            $this->Flash->success(__('The licencia has been deleted.'));
        } else {
            $this->Flash->error(__('The licencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
