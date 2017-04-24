<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AreaActivas Controller
 *
 * @property \App\Model\Table\AreaActivasTable $AreaActivas
 */
class AreaActivasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Areas', 'Estados']
        ];
        $areaActivas = $this->paginate($this->AreaActivas);

        $this->set(compact('areaActivas'));
        $this->set('_serialize', ['areaActivas']);
    }

    /**
     * View method
     *
     * @param string|null $id Area Activa id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $areaActiva = $this->AreaActivas->get($id, [
            'contain' => ['Areas', 'Estados']
        ]);

        $this->set('areaActiva', $areaActiva);
        $this->set('_serialize', ['areaActiva']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $areaActiva = $this->AreaActivas->newEntity();
        if ($this->request->is('post')) {
            $areaActiva = $this->AreaActivas->patchEntity($areaActiva, $this->request->getData());
            if ($this->AreaActivas->save($areaActiva)) {
                $this->Flash->success(__('The area activa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The area activa could not be saved. Please, try again.'));
        }
        $areas = $this->AreaActivas->Areas->find('list', ['limit' => 200]);
        $estados = $this->AreaActivas->Estados->find('list', ['limit' => 200]);
        $this->set(compact('areaActiva', 'areas', 'estados'));
        $this->set('_serialize', ['areaActiva']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Area Activa id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $areaActiva = $this->AreaActivas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $areaActiva = $this->AreaActivas->patchEntity($areaActiva, $this->request->getData());
            if ($this->AreaActivas->save($areaActiva)) {
                $this->Flash->success(__('The area activa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The area activa could not be saved. Please, try again.'));
        }
        $areas = $this->AreaActivas->Areas->find('list', ['limit' => 200]);
        $estados = $this->AreaActivas->Estados->find('list', ['limit' => 200]);
        $this->set(compact('areaActiva', 'areas', 'estados'));
        $this->set('_serialize', ['areaActiva']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Area Activa id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $areaActiva = $this->AreaActivas->get($id);
        if ($this->AreaActivas->delete($areaActiva)) {
            $this->Flash->success(__('The area activa has been deleted.'));
        } else {
            $this->Flash->error(__('The area activa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
