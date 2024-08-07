<?php
namespace Topsdk\Topapi\Ability168\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoMiniappTemplateUpdateappRequest {

    /**
        要更新的投放端,目前可投放： taobao(淘宝),tmall(天猫)
     **/
    private $clients;

    /**
        应用id，如果应用在对应端上已有的最新版本所使用的模板id,模板version和extjson，与本次入参一致，则认为不需要更新，返回已有的版本。
     **/
    private $appId;

    /**
        扩展信息。线上版本使用的template_id与传入的template_id一致时，可不填。
     **/
    private $extJson;

    /**
        模板id
     **/
    private $templateId;

    /**
        模板版本
     **/
    private $templateVersion;

    /**
        Logo更新，1月5次
     **/
    private $icon;

    /**
        描述更新，1年5次
     **/
    private $desc;

    /**
        简称更新，1年5次
     **/
    private $alias;


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

    public function getExtJson() : string{
        return $this->extJson;
    }

    public function setExtJson(string $extJson){
        $this->extJson = $extJson;
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

    public function getIcon() : string{
        return $this->icon;
    }

    public function setIcon(string $icon){
        $this->icon = $icon;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getAlias() : string{
        return $this->alias;
    }

    public function setAlias(string $alias){
        $this->alias = $alias;
    }


    public function getApiName() : string {
        return "taobao.miniapp.template.updateapp";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->clients)) {
            $requestParam["clients"] = TopUtil::convertBasicList($this->clients);
        }

        if (!TopUtil::checkEmpty($this->appId)) {
            $requestParam["app_id"] = TopUtil::convertBasic($this->appId);
        }

        if (!TopUtil::checkEmpty($this->extJson)) {
            $requestParam["ext_json"] = TopUtil::convertBasic($this->extJson);
        }

        if (!TopUtil::checkEmpty($this->templateId)) {
            $requestParam["template_id"] = TopUtil::convertBasic($this->templateId);
        }

        if (!TopUtil::checkEmpty($this->templateVersion)) {
            $requestParam["template_version"] = TopUtil::convertBasic($this->templateVersion);
        }

        if (!TopUtil::checkEmpty($this->icon)) {
            $requestParam["icon"] = TopUtil::convertBasic($this->icon);
        }

        if (!TopUtil::checkEmpty($this->desc)) {
            $requestParam["desc"] = TopUtil::convertBasic($this->desc);
        }

        if (!TopUtil::checkEmpty($this->alias)) {
            $requestParam["alias"] = TopUtil::convertBasic($this->alias);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

