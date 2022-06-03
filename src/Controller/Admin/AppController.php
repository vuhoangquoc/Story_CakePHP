<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use Cake\Controller\Controller;
// use cake\Event\EventInterface;


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

        // $this->loadComponent('Auth', [
        //     'authenticate' => [
        //         'Form' => [
        //             'fields' => [
        //                 'username' => 'email',
        //                 'password' => 'password'
        //             ]
        //         ]
        //     ],
        //     'loginAction' => [
        //         'controller' => 'Users',
        //         'action' => 'login'
        //     ]
        // ]);
        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }
    // public function beforeRender(EventInterface $event)
    // {


    //     // Login Check
    //     if ($this->request->getSession()->read('Auth.User')) {
    //         $this->set('loggedIn', true);
    //     } else {
    //         $this->set('loggedIn', false);
    //     }
    // }
}
