# dada_openapi_php
达达开放平台接口php版demo ***[查看接口文档](http://newopen.imdada.cn/#/development/file/index?_k=isjh9o)***

## 使用说明（以新增订单为例）
### 1.配置相关信息(config文件)
<br>

```php
/**
 * 达达开发者app_key
 */
public $app_key = '';

/**
 * 达达开发者app_secret
 */
public $app_secret = '';

```
### 2.初始化一个配置文件

```php

define("BASE_DIR", dirname(__FILE__) . "/");
require_once BASE_DIR . 'api/addOrderApi.php';
require_once BASE_DIR . 'client/dadaRequestClient.php';
require_once BASE_DIR . 'client/dadaResponse.php';
require_once BASE_DIR . 'config/config.php';
require_once BASE_DIR . 'model/orderModel.php';

// isOnline 判断是否是测试环境，会有不同的域名等
$isOnline = false
$sourceId = 1000000
// 初始化一个config
$config = new Config($sourceId, $isOnline);
```

### 3.domain文件新建一个model,并初始化

```php
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
```

### 4.新建一个api，并初始化

```php
// api主要有2个参数，一个是url， 一个是业务参数
$addOrderApi = new AddOrderApi(json_encode($orderModel));
```

### 5.初始化客户端，并调用rpc

```php
$dada_client = new DadaRequestClient($config, $addOrderApi);
$resp = $dada_client->makeRequest();
echo json_encode($resp);
```
