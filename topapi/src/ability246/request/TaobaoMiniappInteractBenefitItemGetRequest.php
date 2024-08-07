<?php
namespace Topsdk\Topapi\Ability246\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability246\Domain\TaobaoMiniappInteractBenefitItemGetSellerStrategyBenefitItemBindOpenRequest;

class TaobaoMiniappInteractBenefitItemGetRequest {

    /**
        查询条件
     **/
    private $miniAppSellerStrategyBenefitItemBindRequest;


    public function getMiniAppSellerStrategyBenefitItemBindRequest() : TaobaoMiniappInteractBenefitItemGetSellerStrategyBenefitItemBindOpenRequest{
        return $this->miniAppSellerStrategyBenefitItemBindRequest;
    }

    public function setMiniAppSellerStrategyBenefitItemBindRequest(TaobaoMiniappInteractBenefitItemGetSellerStrategyBenefitItemBindOpenRequest $miniAppSellerStrategyBenefitItemBindRequest){
        $this->miniAppSellerStrategyBenefitItemBindRequest = $miniAppSellerStrategyBenefitItemBindRequest;
    }


    public function getApiName() : string {
        return "taobao.miniapp.interact.benefit.item.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->miniAppSellerStrategyBenefitItemBindRequest)) {
            $requestParam["mini_app_seller_strategy_benefit_item_bind_request"] = TopUtil::convertStruct($this->miniAppSellerStrategyBenefitItemBindRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

