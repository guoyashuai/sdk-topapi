<?php
namespace Topsdk\Topapi\Ability246\Domain;

class TaobaoMiniappInteractBenefitItemGetSellerStrategyBenefitItemBindOpenRequest {

    /**
        C小程序id
     **/
    public $app_id;

    /**
        策略中，实物权益对应的奖池id
     **/
    public $pool_id;


    public function getAppId() : int{
        return $this->app_id;
    }

    public function setAppId(int $appId){
        $this->app_id = $appId;
    }

    public function getPoolId() : int{
        return $this->pool_id;
    }

    public function setPoolId(int $poolId){
        $this->pool_id = $poolId;
    }


}

