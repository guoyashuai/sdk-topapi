<?php
namespace Topsdk\Topapi\Ability168;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability168\Request\TaobaoMiniappTemplateUpdateRequest;
use Topsdk\Topapi\Ability168\Request\TaobaoMiniappTemplateOnlineappRequest;
use Topsdk\Topapi\Ability168\Request\TaobaoMiniappWidgetTemplateInstanceUpdateRequest;
use Topsdk\Topapi\Ability168\Request\TaobaoMiniappTemplateInstantiateRequest;
use Topsdk\Topapi\Ability168\Request\TaobaoMiniappWidgetTemplateInstanceQueryRequest;
use Topsdk\Topapi\Ability168\Request\TaobaoMiniappTemplateOfflineappRequest;
use Topsdk\Topapi\Ability168\Request\TaobaoMiniappWidgetTemplateInstantiateRequest;
use Topsdk\Topapi\Ability168\Request\TaobaoMiniappTemplateQueryappRequest;
use Topsdk\Topapi\Ability168\Request\TaobaoMiniappTemplateUpdateappRequest;
use Topsdk\Topapi\Ability168\Request\TaobaoMiniappTemplateRollbackRequest;
use Topsdk\Topapi\Ability168\Request\TaobaoMiniapppTemplateInstantiateRequest;

class Ability168 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        （已废弃）更新实例化应用
    **/
    public function taobaoMiniappTemplateUpdate(TaobaoMiniappTemplateUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.miniapp.template.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        上线实例化应用
    **/
    public function taobaoMiniappTemplateOnlineapp(TaobaoMiniappTemplateOnlineappRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.miniapp.template.onlineapp", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        小部件实例化版本更新
    **/
    public function taobaoMiniappWidgetTemplateInstanceUpdate(TaobaoMiniappWidgetTemplateInstanceUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.miniapp.widget.template.instance.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        构建实例化应用
    **/
    public function taobaoMiniappTemplateInstantiate(TaobaoMiniappTemplateInstantiateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.miniapp.template.instantiate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        小部件实例化版本查询
    **/
    public function taobaoMiniappWidgetTemplateInstanceQuery(TaobaoMiniappWidgetTemplateInstanceQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.miniapp.widget.template.instance.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        下线实例化应用
    **/
    public function taobaoMiniappTemplateOfflineapp(TaobaoMiniappTemplateOfflineappRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.miniapp.template.offlineapp", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        小部件实例化接口
    **/
    public function taobaoMiniappWidgetTemplateInstantiate(TaobaoMiniappWidgetTemplateInstantiateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.miniapp.widget.template.instantiate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询实例化应用版本
    **/
    public function taobaoMiniappTemplateQueryapp(TaobaoMiniappTemplateQueryappRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.miniapp.template.queryapp", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新实例化应用
    **/
    public function taobaoMiniappTemplateUpdateapp(TaobaoMiniappTemplateUpdateappRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.miniapp.template.updateapp", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        回滚实例化应用
    **/
    public function taobaoMiniappTemplateRollback(TaobaoMiniappTemplateRollbackRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.miniapp.template.rollback", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        （已废弃）构建实例化应用
    **/
    public function taobaoMiniapppTemplateInstantiate(TaobaoMiniapppTemplateInstantiateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.miniappp.template.instantiate", $request->toMap(), $request->toFileParamMap(), $session);
    }
}