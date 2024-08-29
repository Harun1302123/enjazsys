<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**

 * Users Controller

 *

 * @property \App\Model\Table\UsersTable $Users

 */

class UsersController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
    }

//var $components = array('Auth');

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Auth->allow(['login']);

        $this->Auth->setConfig('authenticate', [

            'Basic' => ['userModel' => 'Users'],

            'Form' => ['userModel' => 'Users'],

        ]);

    }

    /*

     * Function name     : Login

     * Description         : Login functionality using auth

     * Author             : Wepro

     * Created by         : Wepro 27-Dec-2016

     */

    public function login()
    {

        if ($this->Auth->user()) {
            return $this->redirect('/admin/Users/dashboard');
        }
        //$this->request->data['Username'] = 'admin';

        //$this->request->data['Password'] = 'ABC123';
        if ($this->request->getData()) {

            //echo '<pre>'; print_r($this->request->data); exit;

            $user = $this->Auth->identify();
            if ($user) {

                $userRolesTable = TableRegistry::get('UserRoles');

                $user['UserRoles'] = $userRolesTable->find('all')->where(['id' => $user['user_role_id']])->first()->toArray();

                $this->Auth->setUser($user);

                if ($this->request->is('ajax')) {
                    return $this->response->withStatus(204);
                }

                return $this->redirect('/admin/Users/dashboard');

                //print_r($this->request->data); exit;

            } else {

                /*$this->Flash->error(__('Username or password is incorrect'), [

                'key' => 'auth'

                ]);*/
                $data = $this->request->getData();
                $this->loadModel('Clients');
                $client_result = $this->Clients->identify_user($data);
                if ($client_result) {
                    $userRolesTable = TableRegistry::get('UserRoles');
                    //$client_result['UserRoles'] = $userRolesTable->find('all')->where(['id'=>$client_result['user_role_id']])->first()->toArray();
                    //echo '<pre>'; print_r($client_result); exit;
                    $this->Auth->setUser($client_result);
                    $this->redirect('/client/employees');
                } else {
                    return $this->response->withStatus(422);
                    $this->Flash->error(__('Username or password is incorrect'), [
                        'key' => 'auth',
                    ]);
                }
            }
        }
    }

    /*

     * Function name     : Dashboard

     * Description         : Redirect to Dashboard

     * Author             : Wepro

     * Created by         : Wepro 27-Dec-2016

     */

    public function dashboard()
    {

    }

    /*

     * Function name     : LogOut

     * Description         : Redirect to Login Page

     * Author             : Wepro

     * Created by         : Wepro 27-Dec-2016

     */

    public function logout()
    {
        if ($this->Auth->logout()) {
            return $this->redirect('/Users/login');
        }
    }
}
