<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 60);
Configure::write('API.secretKey', 'maishop');
Configure::write('API.rewriteUrl', array());

Configure::write('API.url_settings_general', 'settings/general');

Configure::write('API.url_products_list', 'products/list');
Configure::write('API.url_products_detail', 'products/detail');

Configure::write('API.url_pages_detail', 'pages/detail');

Configure::write('API.url_news_detail', 'news/detail');