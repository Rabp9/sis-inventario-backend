<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Claves Controller
 *
 * @property \App\Model\Table\ClavesTable $Claves
 */
class ClavesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $claves = $this->Claves->find();

        $this->set(compact('claves'));
        $this->set('_serialize', ['claves']);
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
        $clave = $this->Claves->get($id, [
            'contain' => []
        ]);

        $this->set('clave', $clave);
        $this->set('_serialize', ['clave']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $clave = $this->Claves->newEntity();
        $clave->estado_id = 1;
        if ($this->request->is('post')) {
            $clave = $this->Claves->patchEntity($clave, $this->request->getData());
            if ($this->Claves->save($clave)) {
                $message =  [
                    'text' => __('La clave fue guardada correctamente'),
                    'type' => 'success',
                ];
            } else {
                $message =  [
                    'text' => __('La clave no fue guardada correctamente'),
                    'type' => 'error',
                ];
            }
        }
        $this->set(compact('clave', 'message'));
        $this->set('_serialize', ['clave', 'message']);
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
        $clave = $this->Claves->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clave = $this->Claves->patchEntity($clave, $this->request->getData());
            if ($this->Claves->save($clave)) {
                $this->Flash->success(__('The clave has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clave could not be saved. Please, try again.'));
        }
        $this->set(compact('clave'));
        $this->set('_serialize', ['clave']);
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
        $clave = $this->Claves->get($id);
        if ($this->Claves->delete($clave)) {
            $this->Flash->success(__('The clave has been deleted.'));
        } else {
            $this->Flash->error(__('The clave could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
