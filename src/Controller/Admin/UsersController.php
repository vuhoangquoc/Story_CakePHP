<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use cake\Event\EventInterface;
use App\Controller\Admin\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            
            if($user) {

                $this->Auth->setUser($user);
                
                if($user['permission'] == 'user')
                {
                    $this->Flash->error("Bạn không có quyền đăng nhập!");
                    return $this->redirect(['controller'=>'Users', 'action'=>'logout']);
                }
                return $this->redirect(['controller'=>'Admin', 'action'=>'index']);
            } else {
                $this->Flash->error("Incorrect username or password!");
            }
        }
    }
 
    // public function beforeFilter(EventInterface $event)
    // {        
    //     $this->viewBuilder()->setLayout('admin');
    // }


    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            
            // ảnh
            if(!$user->getErrors){
                $image = $this->request->getData('image_file');
    
                $name = $image->getClientFilename();
    
                // tạo thư mục chứa ảnh
                if(!is_dir(WWW_ROOT.'img'.DS.'user-img'))
                mkdir(WWW_ROOT.'img'.DS.'user-img', 0775);

                $targetPath = WWW_ROOT.'img'.DS.'user-img'.DS.$name;
                if($name)
                $image->moveTo($targetPath);
                $user->image = 'user-img/'.$name;
            }

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function userPermission($id = null, $permission)
    {
        $this->request->allowMethod(['post']);
        $user = $this->Users->get($id);

        if($permission == 'admin')
            $user->permission = 'user';
        else
            $user->permission = 'admin';

        if($this->Users->save($user))
        {
            $this->Flash->success(__('The user permission has changed.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
