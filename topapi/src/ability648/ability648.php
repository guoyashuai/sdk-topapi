<?php
namespace Topsdk\Topapi\Ability648;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability648\Request\TaobaoPromotionLimitdiscountDetailGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoMarketingPromotionKfcRequest;

class Ability648 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        限时打折详情查询
    **/
    public function taobaoPromotionLimitdiscountDetailGet(TaobaoPromotionLimitdiscountDetailGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.promotion.limitdiscount.detail.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        定向优惠活动名称与描述违禁词检查
    **/
    public function taobaoMarketingPromotionKfc(TaobaoMarketingPromotionKfcRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.marketing.promotion.kfc", $request->toMap(), $request->toFileParamMap(), $session);
    }
}