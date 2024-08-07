<?php
namespace Topsdk\Topapi\Ability641;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability641\Request\TaobaoPromotionActivityGetRequest;
use Topsdk\Topapi\Ability641\Request\TaobaoPromotionCouponsGetRequest;
use Topsdk\Topapi\Ability641\Request\TaobaoPromotionMealGetRequest;

class Ability641 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        查询某个卖家的店铺优惠券领取活动
    **/
    public function taobaoPromotionActivityGet(TaobaoPromotionActivityGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.promotion.activity.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询卖家优惠券
    **/
    public function taobaoPromotionCouponsGet(TaobaoPromotionCouponsGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.promotion.coupons.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        搭配套餐查询
    **/
    public function taobaoPromotionMealGet(TaobaoPromotionMealGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.promotion.meal.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}