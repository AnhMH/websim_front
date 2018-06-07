<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class HomeController extends AppController {
    /**
     * People top page
     */
    public function index() {
        $param = array();
        
        $result = Api::call(Configure::read('API.url_products_list'), $param);
        
        $data = !empty($result['data']) ? $result['data'] : array();
        $total = !empty($result['total']) ? $result['total'] : 0;
        $this->set('data', $data);
    }
}