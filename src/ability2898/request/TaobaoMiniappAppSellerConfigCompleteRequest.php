<?php
namespace Topsdk\Topapi\Ability2898\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoMiniappAppSellerConfigCompleteRequest {

    /**
        商家已完成配置的小部件/B端插件的appid
     **/
    private $appId;

    /**
        小部件必传，B端插件不用传。与app_id对应的已完成配置的版本号
     **/
    private $version;


    public function getAppId() : int{
        return $this->appId;
    }

    public function setAppId(int $appId){
        $this->appId = $appId;
    }

    public function getVersion() : string{
        return $this->version;
    }

    public function setVersion(string $version){
        $this->version = $version;
    }


    public function getApiName() : string {
        return "taobao.miniapp.app.seller.config.complete";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->appId)) {
            $requestParam["app_id"] = TopUtil::convertBasic($this->appId);
        }

        if (!TopUtil::checkEmpty($this->version)) {
            $requestParam["version"] = TopUtil::convertBasic($this->version);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

