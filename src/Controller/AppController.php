<?php
declare (strict_types = 1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Routing\Router;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent('Paginator');

        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'dashboard',
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login',
                'home',
            ], 'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'Username', 'password' => 'Password'],
                ],
            ],
        ]);

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }

    /***************** before filter of app controller **************************/
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        //print_r($this->request->params); exit;
        if ($this->request->getParam('prefix') == 'admin' && $this->Auth->user()) {
            if ($this->Auth->user('user_role_id') == 0) {
                if ($this->Auth->logout()) {
                    return $this->redirect('/client/users/login');
                }
            }
        }

        if ($this->Auth->user() && $this->isClient()) {
            //echo '<pre>'; print_r($this->Auth->user()); exit;
            //return $this->redirect('client/users/login');
        } /**/

        // $this->set('current_controller', $this->request->params['controller']);
        // $this->set('current_action', $this->request->params['action']);

        $this->set('current_controller', $this->request->getParam('controller'));
        $this->set('current_action', $this->request->getParam('action'));

        $this->session = $this->request->getSession();

        // $referer = Router::url($this->url, true);
        $referer = Router::url($this->request->getParam('url'), true);
        $this->Auth->loginAction = array('controller' => 'Users', 'action' => 'login', '?' => ['referer' => $referer]);

        /*if($this->request->params['action'] == 'login'){

    }*/

    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(\Cake\Event\EventInterface $event)
    {
        if (!array_key_exists('_serialize', $this->viewBuilder()->getVars()) &&
            in_array($this->response->getType(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    public function isSupAdmin()
    {

        if ($this->Auth->user('user_role_id') == 1) {
            return true;
        } else {
            return false;
        }

    }

    public function isClient()
    {
        if ($this->Auth->user('user_role_id') == 0) {
            return true;
        } else {
            return false;
        }
    }
}
