<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use cake\Event\EventInterface;
// use App\Controller\AppController;
use App\Controller\Admin\AppController;



use Cake\View\Helper\FormHelper;


/**
 * Chapters Controller
 *
 * @property \App\Model\Table\ChaptersTable $Chapters
 * @method \App\Model\Entity\Chapter[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChaptersController extends AppController
{
    // public function beforeFilter(EventInterface $event)
    // {
    //     $this->viewBuilder()->setLayout('admin');
    // }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articles'],
        ];
        $chapters = $this->paginate($this->Chapters);

        $this->set(compact('chapters'));
    }

    /**
     * View method
     *
     * @param string|null $id Chapter id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chapter = $this->Chapters->get($id, [
            'contain' => ['Articles'],
        ]);

        $this->set(compact('chapter'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chapter = $this->Chapters->newEmptyEntity();




        // if(isset($this->request->data['image'])){
        //     $file_name_all="";
        //     for($i=0; $i<count($this->request->data['image']); $i++){
        //         if(!empty($this->request->data['image'][$i]['name'])){
        //             $file = $this->request->data['image'][$i];
        //             $file['name'] =  time() . '-' . str_replace(' ', '_', $file['name']); 
        //             $uploadPath = WWW_ROOT . 'img'.DS.'chapter-img';
        //             $fileName =  $file['name'];
        //             $uploadFile = $uploadPath.$fileName;
        //             $file_name_all = $file['name'].",";
        //             if($file['name']){
        //                 move_uploaded_file($file['tmp_name'], $uploadFile);
        //             }  
        //         }
        //     }
        // }



        if ($this->request->is('post')) {
            $chapter = $this->Chapters->patchEntity($chapter, $this->request->getData());


            if (!$chapter->getErrors) {
                $image = $this->request->getData('image');

                $name = $image->getClientFilename();

                if (!is_dir(WWW_ROOT.'img'.DS.'chapter-img'))
                mkdir(WWW_ROOT.'img'.DS.'chapter-img',0775);

                $targetPath = WWW_ROOT.'img'.DS.'chapter-img'.DS.$name;

                if ($name)
                $image->moveTo($targetPath);

                $chapter->image = 'chapter-img/'.$name;
            }
            
            // // Check user đã submit chưa
            // if($this->request->is('post')) {

            //     $this->Image->create();
            //     // nếu lưu thành công sẽ quay về list
            //     if($this->Image->saveMany($this->request->data['Image'])) {
            //         $this->Session->setFlash(__('Đã upload thành công.'));
            //         return $this->redirect(array('action' => 'index'));
            //     }
            // }

            if ($this->Chapters->save($chapter)) {
                $this->Flash->success(__('The chapter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter could not be saved. Please, try again.'));
        }
        $articles = $this->Chapters->Articles->find('list', ['limit' => 200])->all();
        $this->set(compact('chapter', 'articles'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Chapter id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chapter = $this->Chapters->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chapter = $this->Chapters->patchEntity($chapter, $this->request->getData());

            if (!$chapter->getErrors) {
                $image = $this->request->getData('change_image');

                $name = $image->getClientFilename();

                if (!is_dir(WWW_ROOT.'img'.DS.'chapter-img'))
                mkdir(WWW_ROOT.'img'.DS.'chapter-img',0775);

                $targetPath = WWW_ROOT.'img'.DS.'chapter-img'.DS.$name;

                if ($name)
                $image->moveTo($targetPath);

                $chapter->image = 'chapter-img/'.$name;
            }

            if ($this->Chapters->save($chapter)) {
                $this->Flash->success(__('The chapter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chapter could not be saved. Please, try again.'));
        }
        $articles = $this->Chapters->Articles->find('list', ['limit' => 200])->all();
        $this->set(compact('chapter', 'articles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chapter id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chapter = $this->Chapters->get($id);
        if ($this->Chapters->delete($chapter)) {
            $this->Flash->success(__('The chapter has been deleted.'));
        } else {
            $this->Flash->error(__('The chapter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
