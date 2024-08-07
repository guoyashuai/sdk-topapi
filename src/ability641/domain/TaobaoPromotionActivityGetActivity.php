<?php
namespace Topsdk\Topapi\Ability641\Domain;

class TaobaoPromotionActivityGetActivity {

    /**
        活动id
     **/
    public $activity_id;

    /**
        活动对应的优惠券ID
     **/
    public $coupon_id;

    /**
        卖家设置优惠券领取的总领用量
     **/
    public $total_count;

    /**
        已经领取的优惠券的数量
     **/
    public $applied_count;

    /**
        每个买家限领取优惠券的数量，1～5张
     **/
    public $person_limit_count;

    /**
        enabled代表有效，invalid代表失效。other代表空值
     **/
    public $status;

    /**
        领用优惠券的链接
     **/
    public $activity_url;

    /**
        self代表自己创建，other他人创建
     **/
    public $create_user;


    public function getActivityId() : int{
        return $this->activity_id;
    }

    public function setActivityId(int $activityId){
        $this->activity_id = $activityId;
    }

    public function getCouponId() : int{
        return $this->coupon_id;
    }

    public function setCouponId(int $couponId){
        $this->coupon_id = $couponId;
    }

    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }

    public function getAppliedCount() : int{
        return $this->applied_count;
    }

    public function setAppliedCount(int $appliedCount){
        $this->applied_count = $appliedCount;
    }

    public function getPersonLimitCount() : int{
        return $this->person_limit_count;
    }

    public function setPersonLimitCount(int $personLimitCount){
        $this->person_limit_count = $personLimitCount;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getActivityUrl() : string{
        return $this->activity_url;
    }

    public function setActivityUrl(string $activityUrl){
        $this->activity_url = $activityUrl;
    }

    public function getCreateUser() : string{
        return $this->create_user;
    }

    public function setCreateUser(string $createUser){
        $this->create_user = $createUser;
    }


}

