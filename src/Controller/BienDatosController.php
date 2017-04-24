<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BienDatos Controller
 *
 * @property \App\Model\Table\BienDatosTable $BienDatos
 */
class BienDatosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bienes', 'Datos']
        ];
        $bienDatos = $this->paginate($this->BienDatos);

        $this->set(compact('bienDatos'));
        $this->set('_serialize', ['bienDatos']);
    }

    /**
     * View method
     *
     * @param string|null $id Bien Dato id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bienDato = $this->BienDatos->get($id, [
            'contain' => ['Bienes', 'Datos']
        ]);

        $this->set('bienDato', $bienDato);
        $this->set('_serialize', ['bienDato']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bienDato = $this->BienDatos->newEntity();
        if ($this->request->is('post')) {
            $bienDato = $this->BienDatos->patchEntity($bienDato, $this->request->getData());
            if ($this->BienDatos->save($bienDato)) {
                $this->Flash->success(__('The bien dato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bien dato could not be saved. Please, try again.'));
        }
        $bienes = $this->BienDatos->Bienes->find('list', ['limit' => 200]);
        $datos = $this->BienDatos->Datos->find('list', ['limit' => 200]);
        $this->set(compact('bienDato', 'bienes', 'datos'));
        $this->set('_serialize', ['bienDato']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bien Dato id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bienDato = $this->BienDatos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bienDato = $this->BienDatos->patchEntity($bienDato, $this->request->getData());
            if ($this->BienDatos->save($bienDato)) {
                $this->Flash->success(__('The bien dato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bien dato could not be saved. Please, try again.'));
        }
        $bienes = $this->BienDatos->Bienes->find('list', ['limit' => 200]);
        $datos = $this->BienDatos->Datos->find('list', ['limit' => 200]);
        $this->set(compact('bienDato', 'bienes', 'datos'));
        $this->set('_serialize', ['bienDato']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bien Dato id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bienDato = $this->BienDatos->get($id);
        if ($this->BienDatos->delete($bienDato)) {
            $this->Flash->success(__('The bien dato has been deleted.'));
        } else {
            $this->Flash->error(__('The bien dato could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
