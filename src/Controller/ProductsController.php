<?php

/* 
 * Products page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class ProductsController extends AppController {
    /**
     * List products
     */
    public function index($id = '') {
        $param = array(
            'id' => $id
        );
        $data = Api::call(Configure::read('API.url_products_detail'), $param);
        $this->set('pagedata', $data);
        if (!empty($data['name'])) {
            $this->set('pageTitle', $data['name']);
        }
    }
}