<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoPromotionLimitdiscountDetailGetLimitDiscountDetail {

    /**
        限时打折名称
     **/
    public $limit_discount_name;

    /**
        限时打折开始时间。
     **/
    public $start_time;

    /**
        限时打折结束时间。
     **/
    public $end_time;

    /**
        商品的id(数字类型)
     **/
    public $item_id;

    /**
        该商品限时折扣
     **/
    public $item_discount;

    /**
        每人限购数量，1、2、5、10000(不限)。
     **/
    public $limit_num;


    public function getLimitDiscountName() : string{
        return $this->limit_discount_name;
    }

    public function setLimitDiscountName(string $limitDiscountName){
        $this->limit_discount_name = $limitDiscountName;
    }

    public function getStartTime() : string{
        return $this->start_time;
    }

    public function setStartTime(string $startTime){
        $this->start_time = $startTime;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }

    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getItemDiscount() : string{
        return $this->item_discount;
    }

    public function setItemDiscount(string $itemDiscount){
        $this->item_discount = $itemDiscount;
    }

    public function getLimitNum() : int{
        return $this->limit_num;
    }

    public function setLimitNum(int $limitNum){
        $this->limit_num = $limitNum;
    }


}

