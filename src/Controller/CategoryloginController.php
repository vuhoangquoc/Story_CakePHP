<?php

namespace App\Controller;

use App\Controller\AppController;
use cake\Event\EventInterface;
use Cake\Utility\Text;
use Cake\Http\Client;

class CategoryloginController extends AppController
{

    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('categorylogin');
    }
    public function index($id = null)
    {
      $this->loadModel('Categories');
        $category = $this->Categories->get($id, [
            'contain' => ['Articles'],
        ]);


      
      // $this->set('categories', $this->paginate($category, ['limit'=>'8']));
      

      $this->set('category', $category);
      
    }
}
