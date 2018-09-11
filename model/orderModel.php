<?php
/**
 * http://newopen.imdada.cn/#/development/file/add?_k=5f4vjj
 *
 */
class OrderModel{
    
    public $shop_no;
    
    public $origin_id;

    public $city_code;

    public $cargo_price;

    public $is_prepay;

    public $receiver_name;

    public $receiver_address;

    public $receiver_lat;

    public $receiver_lng;

    public $receiver_phone;

    public $callback;


    public function setShopNo($shopNo)
    {
        !empty($shopNo) ? $this->shop_no = $shopNo : trigger_error('shop_no不能为空', E_USER_ERROR);
    }

    public function getShopNo()
    {
        return $this->shop_no;
    }

    public function setOriginId($originId)
    {
        !empty($originId) ? $this->origin_id = $originId : trigger_error('origin_id不能为空', E_USER_ERROR);
    }

    public function getOriginId()
    {
        return $this->origin_id;
    }

    public function setCityCode($cityCode)
    {
        !empty($cityCode) ? $this->city_code = $cityCode : trigger_error('city_code不能为空', E_USER_ERROR);
    }

    public function getCityCode()
    {
        return $this->city_code;
    }

    public function setCargoPrice($cargoPrice)
    {
        isset($cargoPrice) ? $this->cargo_price = $cargoPrice : trigger_error('cargo_price不能为空', E_USER_ERROR);
    }

    public function getCargoPrice()
    {
        return $this->cargo_price;
    }

    public function setIsPrepay($isPrepay)
    {
        isset($isPrepay) ? $this->is_prepay = $isPrepay : trigger_error('is_prepay不能为空', E_USER_ERROR);
    }

    public function getIsPrepay()
    {
        return $this->is_prepay;
    }

    public function setReceiverName($receiverName)
    {
        !empty($receiverName) ? $this->receiver_name = $receiverName : trigger_error('receiver_name不能为空', E_USER_ERROR);
    }

    public function getReceiverName()
    {
        return $this->receiver_name;
    }

    public function setReceiverAddress($receiverAddress)
    {
        !empty($receiverAddress) ? $this->receiver_address = $receiverAddress : trigger_error('receiver_address不能为空', E_USER_ERROR);
    }

    public function getReceiverAddress()
    {
        return $this->receiver_address;
    }

    public function setReceiverLat($receiverLat)
    {
        isset($receiverLat) ? $this->receiver_lat = $receiverLat : trigger_error('receiver_lat不能为空', E_USER_ERROR);
    }

    public function getReceiverLat()
    {
        return $this->receiver_lat;
    }

    public function setReceiverLng($receiverLng)
    {
        isset($receiverLng) ? $this->receiver_lng = $receiverLng : trigger_error('receiver_lng不能为空', E_USER_ERROR);
    }

    public function getReceiverLng()
    {
        return $this->receiver_lng;
    }

    public function setReceiverPhone($receiverPhone)
    {
        !empty($receiverPhone) ? $this->receiver_phone = $receiverPhone : trigger_error('receiver_phone不能为空', E_USER_ERROR);
    }

    public function getReceiverPhone()
    {
        return $this->receiver_phone;
    }

    public function setCallback($callback)
    {
        !empty($callback) ? $this->callback = $callback : trigger_error('callback不能为空', E_USER_ERROR);
    }

    public function getCallback()
    {
        return $this->callback;
    }

}
