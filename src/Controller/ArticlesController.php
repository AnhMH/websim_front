<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class ArticlesController extends AppController {
    /**
     * People top page
     */
    public function index($url = '') {
        $param = array(
            'url' => $url
        );
        $data = Api::call(Configure::read('API.url_news_detail'), $param);
        $this->set('pagedata', $data);
        if (!empty($data['name'])) {
            $this->set('pageTitle', $data['name']);
        }
    }
}