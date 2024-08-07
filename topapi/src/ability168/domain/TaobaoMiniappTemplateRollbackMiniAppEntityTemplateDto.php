<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappTemplateRollbackMiniAppEntityTemplateDto {

    /**
        小程序app_id
     **/
    public $app_id;

    /**
        线上正式版本的链接
     **/
    public $online_url;


    public function getAppId() : string{
        return $this->app_id;
    }

    public function setAppId(string $appId){
        $this->app_id = $appId;
    }

    public function getOnlineUrl() : string{
        return $this->online_url;
    }

    public function setOnlineUrl(string $onlineUrl){
        $this->online_url = $onlineUrl;
    }


}

