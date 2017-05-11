<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Marcas Controller
 *
 * @property \App\Model\Table\MarcasTable $Marcas
 */
class MarcasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $marcas = $this->Marcas->find();

        $this->set(compact('marcas'));
        $this->set('_serialize', ['marcas']);
    }

    /**
     * View method
     *
     * @param string|null $id Marca id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $marca = $this->Marcas->get($id);

        $this->set(compact('marca'));
        $this->set('_serialize', ['marca']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $marca = $this->Marcas->newEntity();
        $marca->estado_id = 1;
        if ($this->request->is('post')) {
            $marca = $this->Marcas->patchEntity($marca, $this->request->getData());
            if ($this->Marcas->save($marca)) {
                $code = 200;
                $message = 'La marca fue guardada correctamente';
            } else {
                $code = 500;
                $message = 'La marca no fue guardada correctamente';
            }
        }
        $this->set(compact('marca', 'code', 'message'));
        $this->set('_serialize', ['marca', 'code', 'message']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Marca id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $marca = $this->Marcas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $marca = $this->Marcas->patchEntity($marca, $this->request->getData());
            if ($this->Marcas->save($marca)) {
                $this->Flash->success(__('The marca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The marca could not be saved. Please, try again.'));
        }
        $estados = $this->Marcas->Estados->find('list', ['limit' => 200]);
        $this->set(compact('marca', 'estados'));
        $this->set('_serialize', ['marca']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Marca id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $marca = $this->Marcas->get($id);
        if ($this->Marcas->delete($marca)) {
            $this->Flash->success(__('The marca has been deleted.'));
        } else {
            $this->Flash->error(__('The marca could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
