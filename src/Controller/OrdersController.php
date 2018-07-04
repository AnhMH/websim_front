<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class OrdersController extends AppController {
    /**
     * People top page
     */
    public function complete() {
        $param = $this->request->data();
        $this->set('param', $param);
    }
}