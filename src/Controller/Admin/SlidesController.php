<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use cake\Event\EventInterface;

// use App\Controller\AppController;
use App\Controller\Admin\AppController;


/**
 * Slides Controller
 *
 * @property \App\Model\Table\SlidesTable $Slides
 * @method \App\Model\Entity\Slide[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SlidesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $slides = $this->paginate($this->Slides);

        $this->set(compact('slides'));
    }

    /**
     * View method
     *
     * @param string|null $id Slide id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $slide = $this->Slides->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('slide'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $slide = $this->Slides->newEmptyEntity();
        if ($this->request->is('post')) {
            $slide = $this->Slides->patchEntity($slide, $this->request->getData());

            if (!$slide->getErrors) {
                $image = $this->request->getData('image');

                $name = $image->getClientFilename();

                if (!is_dir(WWW_ROOT.'img'.DS.'slide-img'))
                mkdir(WWW_ROOT.'img'.DS.'slide-img',0775);

                $targetPath = WWW_ROOT.'img'.DS.'slide-img'.DS.$name;

                if ($name)
                $image->moveTo($targetPath);

                $slide->image = 'slide-img/'.$name;
            }

            if ($this->Slides->save($slide)) {
                $this->Flash->success(__('The slide has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The slide could not be saved. Please, try again.'));
        }
        $this->set(compact('slide'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Slide id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $slide = $this->Slides->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $slide = $this->Slides->patchEntity($slide, $this->request->getData());

            // if (!$slide->getErrors) {
            //     $image = $this->request->getData('change_slideimage');

            //     $name = $image->getClientFilename();

            //     if (!is_dir(WWW_ROOT.'img'.DS.'slide-img'))
            //     mkdir(WWW_ROOT.'img'.DS.'slide-img',0775);

            //     $targetPath = WWW_ROOT.'img'.DS.'slide-img'.DS.$name;

            //     if ($name)
            //     $image->moveTo($targetPath);

            //     $slide->image = 'slide-img/'.$name;
            // }

            if ($this->Slides->save($slide)) {
                $this->Flash->success(__('The slide has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The slide could not be saved. Please, try again.'));
        }
        $this->set(compact('slide'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Slide id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $slide = $this->Slides->get($id);
        if ($this->Slides->delete($slide)) {
            $this->Flash->success(__('The slide has been deleted.'));
        } else {
            $this->Flash->error(__('The slide could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
