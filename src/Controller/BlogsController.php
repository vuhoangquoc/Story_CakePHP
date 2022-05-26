<?php

namespace App\Controller;
use Cake\Event\EventInterface;

class BlogsController extends AppController{
  public function beforeFilter(EventInterface $event){
    $this->viewBuilder()->setLayout('blog');
    // debug($event);
    // exit;
  }

  public function home() {
    //$this->viewBuilder()->setLayout('blog');
    $this->loadModel('Articles');
    $articles = $this->Articles->find()
                      ->order(['Articles.id DESC']);

    //debug($articles);

    $articleList = $this->Articles->find('list')->limit('80');
    $this->set('articles', $this->paginate($articles, ['limit'=>'3']));


    $this->set('articleList', $articleList);
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