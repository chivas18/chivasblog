<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Admin Controller
 *
 *
 * @method \App\Model\Entity\Admin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        
    }
     public function beforeFilter(Event $event)
    {
        $this->viewBuilder()->setLayout('admin');
        return parent::beforeFilter($event);
    }
}
