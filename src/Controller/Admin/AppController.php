<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use Cake\Controller\Controller;
use cake\Event\EventInterface;


class AppController extends Controller
{
    
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent('Auth');

        $this->Auth->allow(['login']);

        $this->set('username', $this->Auth->user('username'));

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }
    // public function beforeFilter(EventInterface $event)
    // {        
    //     $this->viewBuilder()->setLayout('admin');
    // }
}
