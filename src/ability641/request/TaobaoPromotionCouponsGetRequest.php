<?php
namespace Topsdk\Topapi\Ability641\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoPromotionCouponsGetRequest {

    /**
        优惠券的id，唯一标识这个优惠券
     **/
    private $couponId;

    /**
        优惠券的截止日期
     **/
    private $endTime;

    /**
        优惠券的面额，必须是3，5，10，20，50,100
     **/
    private $denominations;

    /**
        查询的页号，结果集是分页返回的，每页20条
     **/
    private $pageNo;

    /**
        每页条数
     **/
    private $pageSize;


    public function getCouponId() : int{
        return $this->couponId;
    }

    public function setCouponId(int $couponId){
        $this->couponId = $couponId;
    }

    public function getEndTime() : string{
        return $this->endTime;
    }

    public function setEndTime(string $endTime){
        $this->endTime = $endTime;
    }

    public function getDenominations() : int{
        return $this->denominations;
    }

    public function setDenominations(int $denominations){
        $this->denominations = $denominations;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }


    public function getApiName() : string {
        return "taobao.promotion.coupons.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->couponId)) {
            $requestParam["coupon_id"] = TopUtil::convertBasic($this->couponId);
        }

        if (!TopUtil::checkEmpty($this->endTime)) {
            $requestParam["end_time"] = TopUtil::convertBasic($this->endTime);
        }

        if (!TopUtil::checkEmpty($this->denominations)) {
            $requestParam["denominations"] = TopUtil::convertBasic($this->denominations);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

