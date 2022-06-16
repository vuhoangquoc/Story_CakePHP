<?php

namespace App\Controller;

use App\Controller\AppController;
use cake\Event\EventInterface;
use Cake\Utility\Text;
use Cake\Http\Client;

class ArticleloginController extends AppController
{

    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('articlelogin');
    }

    public function index($id = null)
    {
        $this->loadModel('Articles');
        $article = $this->Articles->get($id);

        $articles = $this->Articles->get($id, [
            'contain' => ['Categories'],
        ]);

        $this->set('articles', $articles);

        // $articles = $this->Articles->find()
        //                             ->order(['Articles.id DESC']);
        // $this->set('articles', $articles);
        $this->set('article', $article);


        $this->loadModel('Chapters');
        $chapters = $this->Chapters->find()->where(['article_id' => $id])->all();
        $this->set('chapters', $chapters);
    
    }
}
