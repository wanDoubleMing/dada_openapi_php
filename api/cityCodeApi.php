<?php
/**
 * 发单api
 */
define("BASE_DIR", dirname(__FILE__) . "/");
require_once BASE_DIR . 'api/baseApi.php';
require_once BASE_DIR . 'config/urlConfig.php';

class CityCodeApi extends BaseApi{
    
    public function __construct($params) {
        parent::__construct(UrlConfig::CITY_ORDER_URL, $params);
    }
}
