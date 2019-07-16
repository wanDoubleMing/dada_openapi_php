<?php
header("Content-Type: text/html;charset=utf-8");
//参考文档 http://newopen.imdada.cn/#/development/file/shopAdd?_k=zumioz
define("BASE_DIR", dirname(__FILE__) . "/");
require_once BASE_DIR . 'api/shopAddApi.php';
require_once BASE_DIR . 'client/dadaRequestClient.php';
require_once BASE_DIR . 'client/dadaResponse.php';
require_once BASE_DIR . 'config/config.php';
require_once BASE_DIR . 'model/shopAddModel.php';


//*********************1.配置项*************************
$config = new Config(0, false);

//*********************2.实例化一个model*************************
$shopModel = new ShopAddModel();
$shopModel->setStationName('xxxxxxxxxxxxxx');		// 门店名称
$shopModel->setBusiness(1);
$shopModel->setCityName('xxxxxxxxxx');				// 根据实际情况填写
$shopModel->setAreaName('xxxxxxxxxx');
$shopModel->setStationAddress("xxxxxxxxxxxx");
$shopModel->setLat(0);
$shopModel->setLng(0);
$shopModel->setContactName('xxxxxxxxxxxxxx');
$shopModel->setPhone('xxxxxxxxxxxx');
$shopModel->setOriginShopId('xxxxxxxxxx');			// 第三方门店编号，发单时候使用
// 批量接口
$shopList = array($shopModel);
//*********************3.实例化一个api*************************
$shopAddApi = new AddShopApi(json_encode($shopList));

//***********************4.实例化客户端请求************************
$dada_client = new DadaRequestClient($config, $shopAddApi);
$resp = $dada_client->makeRequest();
echo json_encode($resp);
