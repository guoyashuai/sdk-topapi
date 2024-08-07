<?php
namespace Topsdk\Topapi\Defaultability;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Defaultability\Request\AlitripPolicyProcessRequest;
use Topsdk\Topapi\Defaultability\Request\AlitripPolicyRuleUploadRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoKfcKeywordSearchRequest;
use Topsdk\Topapi\Defaultability\Request\AlitripPolicyNormalUploadRequest;
use Topsdk\Topapi\Defaultability\Request\AlitripPolicySpecialUploadRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserGetRequest;
use Topsdk\Topapi\Defaultability\Request\AlitripPolicyDomfareCompareRequest;
use Topsdk\Topapi\Defaultability\Request\AlitripPolicyDomfareFlowdataRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoShopcatsListGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercatsListGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoFuwuSaleLinkGenRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasSubscribeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasOrderSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasSubscSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoAppstoreSubscribeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoFuwuScoresGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoUserSellerGetRequest;

class Defaultability {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        获取前台展示的店铺类目
    **/
    public function taobaoShopcatsListGet(TaobaoShopcatsListGetRequest $request) {
        return $this->client->execute("taobao.shopcats.list.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取前台展示的店铺内卖家自定义商品类目
    **/
    public function taobaoSellercatsListGet(TaobaoSellercatsListGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercats.list.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务平台营销链接生成接口
    **/
    public function taobaoFuwuSaleLinkGen(TaobaoFuwuSaleLinkGenRequest $request) {
        return $this->client->execute("taobao.fuwu.sale.link.gen", $request->toMap(), $request->toFileParamMap());
    }
    /**
        订购关系查询
    **/
    public function taobaoVasSubscribeGet(TaobaoVasSubscribeGetRequest $request) {
        return $this->client->execute("taobao.vas.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        订单记录导出
    **/
    public function taobaoVasOrderSearch(TaobaoVasOrderSearchRequest $request) {
        return $this->client->execute("taobao.vas.order.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        订购记录导出
    **/
    public function taobaoVasSubscSearch(TaobaoVasSubscSearchRequest $request) {
        return $this->client->execute("taobao.vas.subsc.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        查询appstore应用订购关系
    **/
    public function taobaoAppstoreSubscribeGet(TaobaoAppstoreSubscribeGetRequest $request) {
        return $this->client->execute("taobao.appstore.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        服务平台评价查询接口
    **/
    public function taobaoFuwuScoresGet(TaobaoFuwuScoresGetRequest $request) {
        return $this->client->execute("taobao.fuwu.scores.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        查询卖家用户信息
    **/
    public function taobaoUserSellerGet(TaobaoUserSellerGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.user.seller.get", $request->toMap(), $request->toFileParamMap(), $session);
    }

    /**
    政策进度查询
     **/
    public function alitripPolicyProcess(AlitripPolicyProcessRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.policy.process", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    规则政策上传
     **/
    public function alitripPolicyRuleUpload(AlitripPolicyRuleUploadRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.policy.rule.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    关键词过滤匹配
     **/
    public function taobaoKfcKeywordSearch(TaobaoKfcKeywordSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.kfc.keyword.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    普通政策上传
     **/
    public function alitripPolicyNormalUpload(AlitripPolicyNormalUploadRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.policy.normal.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    比价工具
     **/
    public function alitripPolicyDomfareCompare(AlitripPolicyDomfareCompareRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.policy.domfare.compare", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    特殊政策上传
     **/
    public function alitripPolicySpecialUpload(AlitripPolicySpecialUploadRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.policy.special.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    获取用户已开通消息
     **/
    public function taobaoTmcUserGet(TaobaoTmcUserGetRequest $request) {
        return $this->client->execute("taobao.tmc.user.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
    比价工具流量详情
     **/
    public function alitripPolicyDomfareFlowdata(AlitripPolicyDomfareFlowdataRequest $request,string $session) {
        return $this->client->executeWithSession("alitrip.policy.domfare.flowdata", $request->toMap(), $request->toFileParamMap(), $session);
    }
}