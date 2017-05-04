<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bienes Controller
 *
 * @property \App\Model\Table\BienesTable $Bienes
 */
class BienesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $maxSize = $this->request->getQuery('maxSize');

        $this->paginate = [
            'limit' => $maxSize
        ];
        $bienes = $this->Bienes->find()
            ->contain(['Tipos', 'Marcas']);

        $bienes = $this->paginate($bienes);
            
        $paginate = $this->request->getParam('paging')['Bienes'];
       
        $pagination = [
            'totalItems' => $paginate['count'],
            'itemsPerPage' =>  $paginate['perPage']
        ];
        
        $this->set(compact('bienes', 'pagination'));
        $this->set('_serialize', ['bienes', 'pagination']);
    }

    /**
     * View method
     *
     * @param string|null $id Bien id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $bien = $this->Bienes->get($id, [
            'contain' => ['Tipos.Datos', 'Marcas', 'Estados', 'BienDatos.Datos']
        ]);

        $this->set(compact('bien'));
        $this->set('_serialize', ['bien']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $bien = $this->Bienes->newEntity();
        $bien->estado_id = 1;
        if ($this->request->is('post')) {
            $bien = $this->Bienes->patchEntity($bien, $this->request->getData());
            
            if ($this->Bienes->save($bien)) {
                $bien = $this->Bienes->get($bien->id, ['contain' => ['Tipos', 'Marcas']]);
                $message =  [
                    'text' => __('El Bien fue guardado correctamente'),
                    'type' => 'success',
                ];
            } else {
                $message =  [
                    'text' => __('El Bien no fue guardado correctamente'),
                    'type' => 'error',
                ];
            }
        }
        $this->set(compact('bien', 'message'));
        $this->set('_serialize', ['bien', 'message']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Biene id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $biene = $this->Bienes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $biene = $this->Bienes->patchEntity($biene, $this->request->getData());
            if ($this->Bienes->save($biene)) {
                $this->Flash->success(__('The biene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The biene could not be saved. Please, try again.'));
        }
        $tipos = $this->Bienes->Tipos->find('list', ['limit' => 200]);
        $marcas = $this->Bienes->Marcas->find('list', ['limit' => 200]);
        $estados = $this->Bienes->Estados->find('list', ['limit' => 200]);
        $this->set(compact('biene', 'tipos', 'marcas', 'estados'));
        $this->set('_serialize', ['biene']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Biene id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $biene = $this->Bienes->get($id);
        if ($this->Bienes->delete($biene)) {
            $this->Flash->success(__('The biene has been deleted.'));
        } else {
            $this->Flash->error(__('The biene could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
