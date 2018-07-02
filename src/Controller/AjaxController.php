<?php

/* 
 * Ajax controller
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class AjaxController extends AppController {
    
    public function initialize() {
        parent::initialize();
//        $this->autoRender = false;
    }
    
    /**
     * Product detail
     */
    public function productdetail() {
        $data = $this->request->data();
        $this->set('data', $data);
    }
    
    /**
     * Get address
     */
    public function getaddress() {
        $data = array();
        $param = $this->request->data();
        
        $data = Api::call(Configure::read('API.url_settings_getaddress'), $param);
        $this->set('pagedata', $data);
        $this->set('param', $param);
    }
}