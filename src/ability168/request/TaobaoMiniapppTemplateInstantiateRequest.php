<?php
namespace Topsdk\Topapi\Ability168\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoMiniapppTemplateInstantiateRequest {

    /**
        投放端,目前可投放： taobao(淘宝),tmall(天猫)
     **/
    private $clients;

    /**
        描述长度(9~200)
     **/
    private $description;

    /**
        schemadata, json字符串
     **/
    private $extJson;

    /**
        小程序icon
     **/
    private $icon;

    /**
        小程序名称
     **/
    private $name;

    /**
        模板id
     **/
    private $templateId;

    /**
        模板版本
     **/
    private $templateVersion;


    public function getClients() : array{
        return $this->clients;
    }

    public function setClients(array $clients){
        $this->clients = $clients;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getExtJson() : string{
        return $this->extJson;
    }

    public function setExtJson(string $extJson){
        $this->extJson = $extJson;
    }

    public function getIcon() : string{
        return $this->icon;
    }

    public function setIcon(string $icon){
        $this->icon = $icon;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
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


    public function getApiName() : string {
        return "taobao.miniappp.template.instantiate";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->clients)) {
            $requestParam["clients"] = TopUtil::convertBasicList($this->clients);
        }

        if (!TopUtil::checkEmpty($this->description)) {
            $requestParam["description"] = TopUtil::convertBasic($this->description);
        }

        if (!TopUtil::checkEmpty($this->extJson)) {
            $requestParam["ext_json"] = TopUtil::convertBasic($this->extJson);
        }

        if (!TopUtil::checkEmpty($this->icon)) {
            $requestParam["icon"] = TopUtil::convertBasic($this->icon);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->templateId)) {
            $requestParam["template_id"] = TopUtil::convertBasic($this->templateId);
        }

        if (!TopUtil::checkEmpty($this->templateVersion)) {
            $requestParam["template_version"] = TopUtil::convertBasic($this->templateVersion);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

