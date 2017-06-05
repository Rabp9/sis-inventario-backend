<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Datos Controller
 *
 * @property \App\Model\Table\DatosTable $Datos
 */
class DatosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tipos', 'Estados']
        ];
        $datos = $this->paginate($this->Datos);

        $this->set(compact('datos'));
        $this->set('_serialize', ['datos']);
    }

    /**
     * View method
     *
     * @param string|null $id Dato id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $dato = $this->Datos->get($id, [
            'contain' => ['Alternativas']
        ]);

        $this->set(compact('dato'));
        $this->set('_serialize', ['dato']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dato = $this->Datos->newEntity();
        if ($this->request->is('post')) {
            $dato = $this->Datos->patchEntity($dato, $this->request->getData());
            if ($this->Datos->save($dato)) {
                $this->Flash->success(__('The dato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dato could not be saved. Please, try again.'));
        }
        $tipos = $this->Datos->Tipos->find('list', ['limit' => 200]);
        $estados = $this->Datos->Estados->find('list', ['limit' => 200]);
        $this->set(compact('dato', 'tipos', 'estados'));
        $this->set('_serialize', ['dato']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dato id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dato = $this->Datos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dato = $this->Datos->patchEntity($dato, $this->request->getData());
            if ($this->Datos->save($dato)) {
                $this->Flash->success(__('The dato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dato could not be saved. Please, try again.'));
        }
        $tipos = $this->Datos->Tipos->find('list', ['limit' => 200]);
        $estados = $this->Datos->Estados->find('list', ['limit' => 200]);
        $this->set(compact('dato', 'tipos', 'estados'));
        $this->set('_serialize', ['dato']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dato id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dato = $this->Datos->get($id);
        if ($this->Datos->delete($dato)) {
            $this->Flash->success(__('The dato has been deleted.'));
        } else {
            $this->Flash->error(__('The dato could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
