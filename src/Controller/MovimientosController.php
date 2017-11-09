<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Movimientos Controller
 *
 * @property \App\Model\Table\MovimientosTable $Movimientos
 */
class MovimientosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bienes', 'AreaActivas', 'UsuarioActivos', 'Estados']
        ];
        $movimientos = $this->paginate($this->Movimientos);

        $this->set(compact('movimientos'));
        $this->set('_serialize', ['movimientos']);
    }

    /**
     * View method
     *
     * @param string|null $id Movimiento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movimiento = $this->Movimientos->get($id, [
            'contain' => ['Bienes', 'AreaActivas', 'UsuarioActivos', 'Estados']
        ]);

        $this->set('movimiento', $movimiento);
        $this->set('_serialize', ['movimiento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $movimiento = $this->Movimientos->newEntity();
        if ($this->request->is('post')) {
            $movimiento = $this->Movimientos->patchEntity($movimiento, $this->request->getData());
            if ($this->Movimientos->save($movimiento)) {
                $this->Flash->success(__('The movimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movimiento could not be saved. Please, try again.'));
        }
        $bienes = $this->Movimientos->Bienes->find('list', ['limit' => 200]);
        $areaActivas = $this->Movimientos->AreaActivas->find('list', ['limit' => 200]);
        $usuarioActivos = $this->Movimientos->UsuarioActivos->find('list', ['limit' => 200]);
        $estados = $this->Movimientos->Estados->find('list', ['limit' => 200]);
        $this->set(compact('movimiento', 'bienes', 'areaActivas', 'usuarioActivos', 'estados'));
        $this->set('_serialize', ['movimiento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Movimiento id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movimiento = $this->Movimientos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movimiento = $this->Movimientos->patchEntity($movimiento, $this->request->getData());
            if ($this->Movimientos->save($movimiento)) {
                $this->Flash->success(__('The movimiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movimiento could not be saved. Please, try again.'));
        }
        $bienes = $this->Movimientos->Bienes->find('list', ['limit' => 200]);
        $areaActivas = $this->Movimientos->AreaActivas->find('list', ['limit' => 200]);
        $usuarioActivos = $this->Movimientos->UsuarioActivos->find('list', ['limit' => 200]);
        $estados = $this->Movimientos->Estados->find('list', ['limit' => 200]);
        $this->set(compact('movimiento', 'bienes', 'areaActivas', 'usuarioActivos', 'estados'));
        $this->set('_serialize', ['movimiento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Movimiento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movimiento = $this->Movimientos->get($id);
        if ($this->Movimientos->delete($movimiento)) {
            $this->Flash->success(__('The movimiento has been deleted.'));
        } else {
            $this->Flash->error(__('The movimiento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function getByBien() {
        $bien_id = $this->request->getParam('bien_id');
        
        $movimientos = $this->Movimientos->findByBienId($bien_id)
            ->contain(['Areas', 'Responsable']);
        
        $this->set(compact('movimientos'));
        $this->set('_serialize', ['movimientos']);
    }
}
