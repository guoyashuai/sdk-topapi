<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoMarketingPromotionKfcRequest {

    /**
        活动名称
     **/
    private $promotionTitle;

    /**
        活动描述
     **/
    private $promotionDesc;


    public function getPromotionTitle() : string{
        return $this->promotionTitle;
    }

    public function setPromotionTitle(string $promotionTitle){
        $this->promotionTitle = $promotionTitle;
    }

    public function getPromotionDesc() : string{
        return $this->promotionDesc;
    }

    public function setPromotionDesc(string $promotionDesc){
        $this->promotionDesc = $promotionDesc;
    }


    public function getApiName() : string {
        return "taobao.marketing.promotion.kfc";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->promotionTitle)) {
            $requestParam["promotion_title"] = TopUtil::convertBasic($this->promotionTitle);
        }

        if (!TopUtil::checkEmpty($this->promotionDesc)) {
            $requestParam["promotion_desc"] = TopUtil::convertBasic($this->promotionDesc);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

