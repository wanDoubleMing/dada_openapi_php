<?php
header("Content-Type: text/html;charset=utf-8");

//参考文档 http://newopen.imdada.cn/#/development/file/cityList?_k=qbcp8l

define("BASE_DIR", dirname(__FILE__) . "/");
require_once BASE_DIR . 'api/cityCodeApi.php';
require_once BASE_DIR . 'client/dadaRequestClient.php';
require_once BASE_DIR . 'client/dadaResponse.php';
require_once BASE_DIR . 'config/config.php';


//*********************1.配置项*************************
$config = new Config(0, false);

//*********************2.实例化一个model*************************
// city_code 业务参数为""
$cityCodeModel = "";

//*********************3.实例化一个api*************************
$cityCodeApi = new CityCodeApi(cityCodeModel);

//***********************4.实例化客户端请求************************
$dada_client = new DadaRequestClient($config, $cityCodeApi);
$resp = $dada_client->makeRequest();
echo json_encode($resp);
