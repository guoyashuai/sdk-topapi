<?php
namespace Topsdk\Topapi\Ability246;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability246\Request\AlibabaBeneiftDrawRequest;
use Topsdk\Topapi\Ability246\Request\AlibabaBenefitSendRequest;
use Topsdk\Topapi\Ability246\Request\TaobaoMiniappInteractBenefitItemGetRequest;
use Topsdk\Topapi\Ability246\Request\AlibabaBenefitQueryRequest;

class Ability246 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        抽奖接口
    **/
    public function alibabaBeneiftDraw(AlibabaBeneiftDrawRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.beneift.draw", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        发奖接口
    **/
    public function alibabaBenefitSend(AlibabaBenefitSendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.benefit.send", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        读取实物权益奖池对应绑定的专属下单商品
    **/
    public function taobaoMiniappInteractBenefitItemGet(TaobaoMiniappInteractBenefitItemGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.miniapp.interact.benefit.item.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        奖池奖品查询列表
    **/
    public function alibabaBenefitQuery(AlibabaBenefitQueryRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.benefit.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
}