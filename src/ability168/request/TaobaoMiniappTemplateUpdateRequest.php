<?php
namespace Topsdk\Topapi\Ability168\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoMiniappTemplateUpdateRequest {

    /**
        要更新的投放端,目前可投放： taobao(淘宝),tmall(天猫)
     **/
    private $clients;

    /**
        应用id
     **/
    private $id;

    /**
        schema信息，不填且 应用线上版本使用的templateId与传入的templateId不一致，则会报错; 一致，则复用线上版本的schema。
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


    public function getClients() : array{
        return $this->clients;
    }

    public function setClients(array $clients){
        $this->clients = $clients;
    }

    public function getId() : string{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
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


    public function getApiName() : string {
        return "taobao.miniapp.template.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->clients)) {
            $requestParam["clients"] = TopUtil::convertBasicList($this->clients);
        }

        if (!TopUtil::checkEmpty($this->id)) {
            $requestParam["id"] = TopUtil::convertBasic($this->id);
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

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

