<?php

namespace App\Controller;

use App\Controller\AppController;
use cake\Event\EventInterface;
use Cake\Utility\Text;
use Cake\Http\Client;

class ChapterloginController extends AppController
{

    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('chapterlogin');
    }
    public function index($id = null)
    {
        $this->loadModel('Chapters');
        $chapter = $this->Chapters->get($id);

        // test
        // $chapters = $this->Chapters->find()->where(['article_id' => $id])->all();
        // $this->set('chapters', $chapters);
        //

        $this->set('chapter', $chapter);

        // $chapter = $this->paginate($this->Chapters->find('all'));
        // $this->set('chapters', $chapter);


        // test
        // $this->loadModel('Articles');
        // $articles = $this->Articles->find()
        //                 ->order(['Articles.id DESC']);
        //


        // bìa lúc đọc truyện
        // $this->loadModel('Articles');
        // $article = $this->Articles->get($id);
        // $articles = $this->Articles->get($id, [
        //     'contain' => ['Categories'],
        // ]);
        // $this->set('articles', $articles);
        // $this->set('article', $article);
    }
}
