<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappTemplateQueryappMiniAppInstanceVersionDto {

    /**
        小程序版本号
     **/
    public $app_version;

    /**
        发布端
     **/
    public $client;

    /**
        小程序app_id
     **/
    public $app_id;

    /**
        版本状态
     **/
    public $status;

    /**
        模板id
     **/
    public $template_id;

    /**
        模板版本
     **/
    public $template_version;

    /**
        扩展信息
     **/
    public $ext_json;

    /**
        版本链接。上线状态为线上地址，预览状态为预览地址，下线状态为空。
     **/
    public $app_url;


    public function getAppVersion() : string{
        return $this->app_version;
    }

    public function setAppVersion(string $appVersion){
        $this->app_version = $appVersion;
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

    public function getExtJson() : string{
        return $this->ext_json;
    }

    public function setExtJson(string $extJson){
        $this->ext_json = $extJson;
    }

    public function getAppUrl() : string{
        return $this->app_url;
    }

    public function setAppUrl(string $appUrl){
        $this->app_url = $appUrl;
    }


}

