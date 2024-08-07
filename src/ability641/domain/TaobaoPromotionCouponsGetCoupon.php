<?php
namespace Topsdk\Topapi\Ability641\Domain;

class TaobaoPromotionCouponsGetCoupon {

    /**
        优惠券ID
     **/
    public $coupon_id;

    /**
        优惠券的面值，返回的是“分”，不是“元”，500代表500分相当于5元
     **/
    public $denominations;

    /**
        优惠券创建时间
     **/
    public $creat_time;

    /**
        优惠券的截止日期
     **/
    public $end_time;

    /**
        订单满多少分才能用这个优惠券，501就是满501分能使用。注意：返回的是“分”，不是“元”
     **/
    public $condition;

    /**
        优惠券的创建渠道，自己创建/他人创建
     **/
    public $create_channel;


    public function getCouponId() : int{
        return $this->coupon_id;
    }

    public function setCouponId(int $couponId){
        $this->coupon_id = $couponId;
    }

    public function getDenominations() : int{
        return $this->denominations;
    }

    public function setDenominations(int $denominations){
        $this->denominations = $denominations;
    }

    public function getCreatTime() : string{
        return $this->creat_time;
    }

    public function setCreatTime(string $creatTime){
        $this->creat_time = $creatTime;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }

    public function getCondition() : int{
        return $this->condition;
    }

    public function setCondition(int $condition){
        $this->condition = $condition;
    }

    public function getCreateChannel() : string{
        return $this->create_channel;
    }

    public function setCreateChannel(string $createChannel){
        $this->create_channel = $createChannel;
    }


}

