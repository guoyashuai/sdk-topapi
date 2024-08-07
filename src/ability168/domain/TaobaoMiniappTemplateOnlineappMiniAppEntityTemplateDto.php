<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappTemplateOnlineappMiniAppEntityTemplateDto {

    /**
        小程序描述
     **/
    public $app_description;

    /**
        小程序名称
     **/
    public $app_name;

    /**
        appkey
     **/
    public $appkey;

    /**
        小程序app_id
     **/
    public $app_id;

    /**
        小程序icon
     **/
    public $app_icon;

    /**
        线上正式版本的链接，所有消费者可访问。
     **/
    public $online_url;


    public function getAppDescription() : string{
        return $this->app_description;
    }

    public function setAppDescription(string $appDescription){
        $this->app_description = $appDescription;
    }

    public function getAppName() : string{
        return $this->app_name;
    }

    public function setAppName(string $appName){
        $this->app_name = $appName;
    }

    public function getAppkey() : string{
        return $this->appkey;
    }

    public function setAppkey(string $appkey){
        $this->appkey = $appkey;
    }

    public function getAppId() : string{
        return $this->app_id;
    }

    public function setAppId(string $appId){
        $this->app_id = $appId;
    }

    public function getAppIcon() : string{
        return $this->app_icon;
    }

    public function setAppIcon(string $appIcon){
        $this->app_icon = $appIcon;
    }

    public function getOnlineUrl() : string{
        return $this->online_url;
    }

    public function setOnlineUrl(string $onlineUrl){
        $this->online_url = $onlineUrl;
    }


}

