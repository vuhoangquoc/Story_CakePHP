<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use cake\Event\EventInterface;
use App\Controller\Admin\AppController;

class AdminController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('admin');
    }
    public function index()
    {

    }
}
