<?php
/**
 * http://newopen.imdada.cn/#/development/file/shopAdd?_k=6bpoo0
 *
 */
class ShopAddModel{
    
    public $station_name;
    
    public $business;

    public $city_name;

    public $area_name;

    public $station_address;

    public $lng;

    public $lat;

    public $contact_name;

    public $phone;

    public $origin_shop_id;

    public $id_card;

    public function setStationName($stationName)
    {
        $this->station_name = $stationName;
    }

    public function getStationName()
    {
        return $this->station_name;
    }

    public function setBusiness($business)
    {
        $this->business = $business;
    }

    public function getBusiness()
    {
        return $this->business;
    }

    public function setCityName($cityName)
    {
        $this->city_name = $cityName;
    }

    public function getCityName()
    {
        return $this->city_name;
    }

    public function setAreaName($areaName)
    {
        $this->area_name = $areaName;
    }

    public function getAreaName()
    {
        return $this->area_name;
    }

    public function setStationAddress($stationAddress)
    {
        $this->station_address = $stationAddress;
    }

    public function getStationAddress()
    {
        return $this->station_address;
    }

    public function setLng($lng)
    {
        $this->lng = $lng;
    }

    public function getLng()
    {
        return $this->lng;
    }

    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    public function getLat()
    {
        return $this->lat;
    }

    public function setContactName($contactName)
    {
        $this->contact_name = $contactName;
    }

    public function getContactName()
    {
        return $this->contact_name;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setOriginShopId($originShopId)
    {
        $this->origin_shop_id = $originShopId;
    }

    public function getOriginShopId()
    {
        return $this->origin_shop_id;
    }

    public function setIdCard($idCard)
    {
        $this->id_card = $idCard;
    }

    public function getIdCard()
    {
        return $this->id_card;
    }

}
