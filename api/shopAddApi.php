<?php
/**
 * 添加门店api
 */
define("BASE_DIR", dirname(__FILE__) . "/");
require_once BASE_DIR . 'api/baseApi.php';
require_once BASE_DIR . 'config/urlConfig.php';

class AddShopApi extends BaseApi{
    
    public function __construct($params) {
        parent::__construct(UrlConfig::SHOP_ADD_URL, $params);
    }
}
