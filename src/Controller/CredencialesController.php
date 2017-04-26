<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Credenciales Controller
 *
 * @property \App\Model\Table\CredencialesTable $Credenciales
 */
class CredencialesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $credenciales = $this->Credenciales->find();

        $this->set(compact('credenciales'));
        $this->set('_serialize', ['credenciales']);
    }

    /**
     * View method
     *
     * @param string|null $id Clave id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $credencial = $this->Credenciales->get($id, [
            'contain' => []
        ]);

        $this->set('credencial', $credencial);
        $this->set('_serialize', ['credencial']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $credencial = $this->Credenciales->newEntity();
        $credencial->estado_id = 1;
        if ($this->request->is('post')) {
            $credencial = $this->Credenciales->patchEntity($credencial, $this->request->getData());
            if ($this->Credenciales->save($credencial)) {
                $message =  [
                    'text' => __('La credencial fue guardada correctamente'),
                    'type' => 'success',
                ];
            } else {
                $message =  [
                    'text' => __('La credencial no fue guardada correctamente'),
                    'type' => 'error',
                ];
            }
        }
        $this->set(compact('credencial', 'message'));
        $this->set('_serialize', ['credencial', 'message']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Clave id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $credencial = $this->Credenciales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $credencial = $this->Credenciales->patchEntity($credencial, $this->request->getData());
            if ($this->Credenciales->save($credencial)) {
                $this->Flash->success(__('The credencial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The credencial could not be saved. Please, try again.'));
        }
        $this->set(compact('credencial'));
        $this->set('_serialize', ['credencial']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Clave id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $credencial = $this->Credenciales->get($id);
        if ($this->Credenciales->delete($credencial)) {
            $this->Flash->success(__('The credencial has been deleted.'));
        } else {
            $this->Flash->error(__('The credencial could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
