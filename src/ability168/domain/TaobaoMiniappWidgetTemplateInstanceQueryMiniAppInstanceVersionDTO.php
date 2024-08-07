<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappWidgetTemplateInstanceQueryMiniAppInstanceVersionDTO {

    /**
        实例版本
     **/
    public $version;

    /**
        端
     **/
    public $client;

    /**
        小部件id
     **/
    public $app_id;

    /**
        版本状态
     **/
    public $status;

    /**
        模版id
     **/
    public $template_id;

    /**
        模版版本
     **/
    public $template_version;


    public function getVersion() : string{
        return $this->version;
    }

    public function setVersion(string $version){
        $this->version = $version;
    }

    public function getClient() : string{
        return $this->client;
    }

    public function setClient(string $client){
        $this->client = $client;
    }

    public function getAppId() : string{
        return $this->app_id;
    }

    public function setAppId(string $appId){
        $this->app_id = $appId;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getTemplateId() : string{
        return $this->template_id;
    }

    public function setTemplateId(string $templateId){
        $this->template_id = $templateId;
    }

    public function getTemplateVersion() : string{
        return $this->template_version;
    }

    public function setTemplateVersion(string $templateVersion){
        $this->template_version = $templateVersion;
    }


}

