<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipos Controller
 *
 * @property \App\Model\Table\TiposTable $Tipos
 */
class TiposController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $tipos = $this->Tipos->find();

        $this->set(compact('tipos'));
        $this->set('_serialize', ['tipos']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $tipo = $this->Tipos->get($id, [
            'contain' => ['Datos']
        ]);

        $this->set(compact('tipo'));
        $this->set('_serialize', ['tipo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $tipo = $this->Tipos->newEntity();
        $tipo->estado_id = 1;
        if ($this->request->is('post')) {
            $tipo = $this->Tipos->patchEntity($tipo, $this->request->getData());
            if ($this->Tipos->save($tipo)) {
                $code = 200;
                $message = 'El Tipo de Equipo fue guardado correctamente';
            } else {
                $code = 500;
                $message = 'El Tipo de Equipo no fue guardado correctamente';
            }
        }
        $this->set(compact('tipo', 'code', 'message'));
        $this->set('_serialize', ['tipo', 'code', 'message']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipo = $this->Tipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipo = $this->Tipos->patchEntity($tipo, $this->request->getData());
            if ($this->Tipos->save($tipo)) {
                $this->Flash->success(__('The tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo could not be saved. Please, try again.'));
        }
        $estados = $this->Tipos->Estados->find('list', ['limit' => 200]);
        $this->set(compact('tipo', 'estados'));
        $this->set('_serialize', ['tipo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipo = $this->Tipos->get($id);
        if ($this->Tipos->delete($tipo)) {
            $this->Flash->success(__('The tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
