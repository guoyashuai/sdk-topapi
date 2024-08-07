<?php
namespace Topsdk\Topapi\Ability168\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoMiniappTemplateOfflineappRequest {

    /**
        要下线的投放端,目前可投放： taobao(淘宝),tmall(天猫)
     **/
    private $clients;

    /**
        要下线的小程序app_id
     **/
    private $appId;

    /**
        要下线的小程序版本号
     **/
    private $appVersion;

    /**
        模板id
     **/
    private $templateId;


    public function getClients() : array{
        return $this->clients;
    }

    public function setClients(array $clients){
        $this->clients = $clients;
    }

    public function getAppId() : string{
        return $this->appId;
    }

    public function setAppId(string $appId){
        $this->appId = $appId;
    }

    public function getAppVersion() : string{
        return $this->appVersion;
    }

    public function setAppVersion(string $appVersion){
        $this->appVersion = $appVersion;
    }

    public function getTemplateId() : string{
        return $this->templateId;
    }

    public function setTemplateId(string $templateId){
        $this->templateId = $templateId;
    }


    public function getApiName() : string {
        return "taobao.miniapp.template.offlineapp";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->clients)) {
            $requestParam["clients"] = TopUtil::convertBasicList($this->clients);
        }

        if (!TopUtil::checkEmpty($this->appId)) {
            $requestParam["app_id"] = TopUtil::convertBasic($this->appId);
        }

        if (!TopUtil::checkEmpty($this->appVersion)) {
            $requestParam["app_version"] = TopUtil::convertBasic($this->appVersion);
        }

        if (!TopUtil::checkEmpty($this->templateId)) {
            $requestParam["template_id"] = TopUtil::convertBasic($this->templateId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

