<?php
header("Content-Type: text/html;charset=utf-8");

//参考文档 http://newopen.imdada.cn/#/development/file/add?_k=ff7mls

define("BASE_DIR", dirname(__FILE__) . "/");
require_once BASE_DIR . 'api/addOrderApi.php';
require_once BASE_DIR . 'client/dadaRequestClient.php';
require_once BASE_DIR . 'client/dadaResponse.php';
require_once BASE_DIR . 'config/config.php';
require_once BASE_DIR . 'model/orderModel.php';


//*********************1.配置项*************************
$config = new Config(0, false);

//*********************2.实例化一个model*************************
$orderModel = new OrderModel();
$orderModel->setShopNo('11047059');
$orderModel->setOriginId('2018091100000002');
$orderModel->setCityCode('021');
$orderModel->setCargoPrice(10);
$orderModel->setIsPrepay(0);
$orderModel->setReceiverName('测试达达');
$orderModel->setReceiverAddress('上海市崇明岛');
$orderModel->setReceiverLat(31.63);
$orderModel->setReceiverLng(121.41);
$orderModel->setReceiverPhone('18588888888');
$orderModel->setCallback('');

//*********************3.实例化一个api*************************
$addOrderApi = new AddOrderApi(json_encode($orderModel));

//***********************4.实例化客户端请求************************
$dada_client = new DadaRequestClient($config, $addOrderApi);
$resp = $dada_client->makeRequest();
echo json_encode($resp);
