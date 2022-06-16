<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventInterface;
use Cake\Utility\Text;
use Cake\Http\Client;

class BlogsloginController extends AppController{
  public function beforeFilter(EventInterface $event){
    $this->viewBuilder()->setLayout('bloglogin');
    // debug($event);
    // exit;
  }

  public function home() {
    //$this->viewBuilder()->setLayout('blog');
    $this->loadModel('Articles');
    $articles = $this->Articles->find()
                      ->order(['Articles.id DESC']);

    //debug($articles);
    $this->set('articles', $this->paginate($articles, ['limit'=>'8']));
    
    
    $articleList = $this->Articles->find('list')->limit('5');
    $this->set('articleList', $articleList);



    $this->loadModel('Slides');
    $slides = $this->Slides->find('all')
                      ->order(['Slides.id DESC'])
                      ->limit(3);
    $this->set('slides', $slides);

  }

  public function about() {
    
  }

  public function contact() {

  }

  public function view($id = null) {
    $this->loadModel('Articles');
    $article = $this->Articles->get($id);
    // debug($article);
    // exit;
    $this->set('article', $article);
  }
}