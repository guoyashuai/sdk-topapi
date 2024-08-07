<?php
namespace Topsdk\Topapi\Ability2898;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability2898\Request\TaobaoMiniappAppSellerConfigCompleteRequest;

class Ability2898 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        商家完成小程序相关配置
    **/
    public function taobaoMiniappAppSellerConfigComplete(TaobaoMiniappAppSellerConfigCompleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.miniapp.app.seller.config.complete", $request->toMap(), $request->toFileParamMap(), $session);
    }
}