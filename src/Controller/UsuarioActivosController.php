<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsuarioActivos Controller
 *
 * @property \App\Model\Table\UsuarioActivosTable $UsuarioActivos
 */
class UsuarioActivosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios', 'Estados']
        ];
        $usuarioActivos = $this->paginate($this->UsuarioActivos);

        $this->set(compact('usuarioActivos'));
        $this->set('_serialize', ['usuarioActivos']);
    }

    /**
     * View method
     *
     * @param string|null $id Usuario Activo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuarioActivo = $this->UsuarioActivos->get($id, [
            'contain' => ['Usuarios', 'Estados']
        ]);

        $this->set('usuarioActivo', $usuarioActivo);
        $this->set('_serialize', ['usuarioActivo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuarioActivo = $this->UsuarioActivos->newEntity();
        if ($this->request->is('post')) {
            $usuarioActivo = $this->UsuarioActivos->patchEntity($usuarioActivo, $this->request->getData());
            if ($this->UsuarioActivos->save($usuarioActivo)) {
                $this->Flash->success(__('The usuario activo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario activo could not be saved. Please, try again.'));
        }
        $usuarios = $this->UsuarioActivos->Usuarios->find('list', ['limit' => 200]);
        $estados = $this->UsuarioActivos->Estados->find('list', ['limit' => 200]);
        $this->set(compact('usuarioActivo', 'usuarios', 'estados'));
        $this->set('_serialize', ['usuarioActivo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario Activo id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuarioActivo = $this->UsuarioActivos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuarioActivo = $this->UsuarioActivos->patchEntity($usuarioActivo, $this->request->getData());
            if ($this->UsuarioActivos->save($usuarioActivo)) {
                $this->Flash->success(__('The usuario activo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario activo could not be saved. Please, try again.'));
        }
        $usuarios = $this->UsuarioActivos->Usuarios->find('list', ['limit' => 200]);
        $estados = $this->UsuarioActivos->Estados->find('list', ['limit' => 200]);
        $this->set(compact('usuarioActivo', 'usuarios', 'estados'));
        $this->set('_serialize', ['usuarioActivo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario Activo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuarioActivo = $this->UsuarioActivos->get($id);
        if ($this->UsuarioActivos->delete($usuarioActivo)) {
            $this->Flash->success(__('The usuario activo has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario activo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
