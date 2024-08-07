<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappWidgetTemplateInstantiateMiniAppEntityTemplateDTO {

    /**
        小部件别名
     **/
    public $app_alias;

    /**
        小部件描述
     **/
    public $app_description;

    /**
        小部件icon
     **/
    public $app_icon;

    /**
        小部件名称
     **/
    public $app_name;

    /**
        小部件appkey
     **/
    public $appkey;

    /**
        小部件id
     **/
    public $id;

    /**
        小部件版本
     **/
    public $new_version;

    /**
        onlineCode
     **/
    public $online_code;

    /**
        小部件上线版本
     **/
    public $online_version;

    /**
        预览url
     **/
    public $pre_view_url;


    public function getAppAlias() : string{
        return $this->app_alias;
    }

    public function setAppAlias(string $appAlias){
        $this->app_alias = $appAlias;
    }

    public function getAppDescription() : string{
        return $this->app_description;
    }

    public function setAppDescription(string $appDescription){
        $this->app_description = $appDescription;
    }

    public function getAppIcon() : string{
        return $this->app_icon;
    }

    public function setAppIcon(string $appIcon){
        $this->app_icon = $appIcon;
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

    public function getId() : string{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
    }

    public function getNewVersion() : string{
        return $this->new_version;
    }

    public function setNewVersion(string $newVersion){
        $this->new_version = $newVersion;
    }

    public function getOnlineCode() : string{
        return $this->online_code;
    }

    public function setOnlineCode(string $onlineCode){
        $this->online_code = $onlineCode;
    }

    public function getOnlineVersion() : string{
        return $this->online_version;
    }

    public function setOnlineVersion(string $onlineVersion){
        $this->online_version = $onlineVersion;
    }

    public function getPreViewUrl() : string{
        return $this->pre_view_url;
    }

    public function setPreViewUrl(string $preViewUrl){
        $this->pre_view_url = $preViewUrl;
    }


}

