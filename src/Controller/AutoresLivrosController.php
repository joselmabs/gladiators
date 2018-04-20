<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AutoresLivros Controller
 *
 * @property \App\Model\Table\AutoresLivrosTable $AutoresLivros
 *
 * @method \App\Model\Entity\AutoresLivro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AutoresLivrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Autores', 'Livros']
        ];
        $autoresLivros = $this->paginate($this->AutoresLivros);

        $this->set(compact('autoresLivros'));
    }

    /**
     * View method
     *
     * @param string|null $id Autores Livro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $autoresLivro = $this->AutoresLivros->get($id, [
            'contain' => ['Autores', 'Livros']
        ]);

        $this->set('autoresLivro', $autoresLivro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $autoresLivro = $this->AutoresLivros->newEntity();
        if ($this->request->is('post')) {
            $autoresLivro = $this->AutoresLivros->patchEntity($autoresLivro, $this->request->getData());
            if ($this->AutoresLivros->save($autoresLivro)) {
                $this->Flash->success(__('The autores livro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The autores livro could not be saved. Please, try again.'));
        }
        $autores = $this->AutoresLivros->Autores->find('list', ['limit' => 200]);
        $livros = $this->AutoresLivros->Livros->find('list', ['limit' => 200]);
        $this->set(compact('autoresLivro', 'autores', 'livros'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Autores Livro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $autoresLivro = $this->AutoresLivros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $autoresLivro = $this->AutoresLivros->patchEntity($autoresLivro, $this->request->getData());
            if ($this->AutoresLivros->save($autoresLivro)) {
                $this->Flash->success(__('The autores livro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The autores livro could not be saved. Please, try again.'));
        }
        $autores = $this->AutoresLivros->Autores->find('list', ['limit' => 200]);
        $livros = $this->AutoresLivros->Livros->find('list', ['limit' => 200]);
        $this->set(compact('autoresLivro', 'autores', 'livros'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Autores Livro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $autoresLivro = $this->AutoresLivros->get($id);
        if ($this->AutoresLivros->delete($autoresLivro)) {
            $this->Flash->success(__('The autores livro has been deleted.'));
        } else {
            $this->Flash->error(__('The autores livro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
