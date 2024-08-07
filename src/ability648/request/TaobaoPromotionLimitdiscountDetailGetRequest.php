<?php
namespace Topsdk\Topapi\Ability648\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoPromotionLimitdiscountDetailGetRequest {

    /**
        限时打折ID。这个针对查询唯一限时打折情况。
     **/
    private $limitDiscountId;


    public function getLimitDiscountId() : int{
        return $this->limitDiscountId;
    }

    public function setLimitDiscountId(int $limitDiscountId){
        $this->limitDiscountId = $limitDiscountId;
    }


    public function getApiName() : string {
        return "taobao.promotion.limitdiscount.detail.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->limitDiscountId)) {
            $requestParam["limit_discount_id"] = TopUtil::convertBasic($this->limitDiscountId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

