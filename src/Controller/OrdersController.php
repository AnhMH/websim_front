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
        $param['products'] = !empty($param['sim']) ? json_encode($param['sim']) : '';
        $data = Api::call(Configure::read('API.url_orders_addupdate'), $param);
        $this->set('param', $param);
    }
}