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
        $param = $this->getParams();
        if (empty($param['limit'])) {
            $param['limit'] = 100;
        }
        if (empty($param['page'])) {
            $param['page'] = 1;
        }
        
        $result = Api::call(Configure::read('API.url_products_list'), $param);
        
        $data = !empty($result['data']) ? $result['data'] : array();
        $total = !empty($result['total']) ? $result['total'] : 0;
        $this->set('data', $data);
        $this->set('total', $total);
        $this->set('param', $param);
    }
}