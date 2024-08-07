<?php
namespace Topsdk\Topapi\Ability168\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoMiniappTemplateOnlineappRequest {

    /**
        要更新的投放端,目前可投放： taobao(淘宝),tmall(天猫)
     **/
    private $clients;

    /**
        小程序app_id
     **/
    private $appId;

    /**
        模板id
     **/
    private $templateId;

    /**
        模板版本
     **/
    private $templateVersion;

    /**
        待上线的预览版本号
     **/
    private $appVersion;


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

    public function getTemplateId() : string{
        return $this->templateId;
    }

    public function setTemplateId(string $templateId){
        $this->templateId = $templateId;
    }

    public function getTemplateVersion() : string{
        return $this->templateVersion;
    }

    public function setTemplateVersion(string $templateVersion){
        $this->templateVersion = $templateVersion;
    }

    public function getAppVersion() : string{
        return $this->appVersion;
    }

    public function setAppVersion(string $appVersion){
        $this->appVersion = $appVersion;
    }


    public function getApiName() : string {
        return "taobao.miniapp.template.onlineapp";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->clients)) {
            $requestParam["clients"] = TopUtil::convertBasicList($this->clients);
        }

        if (!TopUtil::checkEmpty($this->appId)) {
            $requestParam["app_id"] = TopUtil::convertBasic($this->appId);
        }

        if (!TopUtil::checkEmpty($this->templateId)) {
            $requestParam["template_id"] = TopUtil::convertBasic($this->templateId);
        }

        if (!TopUtil::checkEmpty($this->templateVersion)) {
            $requestParam["template_version"] = TopUtil::convertBasic($this->templateVersion);
        }

        if (!TopUtil::checkEmpty($this->appVersion)) {
            $requestParam["app_version"] = TopUtil::convertBasic($this->appVersion);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

