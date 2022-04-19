<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
* Author: https://roytuts.com
*/
$type = 'dev';
if($type == 'dev'){
    class Site extends BaseConfig {
        public $defaultTitle = 'game';
        public $defaultSuccessMsg = 'Success';
        public $defaultErrorMsg = 'Error';
        public $displayMsg = 1;
        public $authRequired = false;
        public $url_api = 'http://localhost:9876/';
        public $app_key = '3dsr+y/pv3hlHKuJP7QkQ9RlRDSX3V7/fHOQFcQNhCs=';
        public $app_id = '4EFXlb7LTbPYIej/RyTCU7LJxtU0GxIg1QuDPdnqkbo=';
    }
}else{
    class Site extends BaseConfig {
        public $defaultTitle = 'qameqo';
        public $defaultSuccessMsg = 'Success';
        public $defaultErrorMsg = 'Error';
        public $displayMsg = 1;
        public $authRequired = false;
        public $url_api = 'http://localhost:9876/';
        public $app_key = '3dsr+y/pv3hlHKuJP7QkQ9RlRDSX3V7/fHOQFcQNhCs=';
        public $app_id = '4EFXlb7LTbPYIej/RyTCU7LJxtU0GxIg1QuDPdnqkbo=';
    }
}
