<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappTemplateUpdateMiniAppEntityTemplateDto {

    /**
        应用描述
     **/
    public $app_description;

    /**
        应用icon
     **/
    public $app_icon;

    /**
        应用名称
     **/
    public $app_name;

    /**
        top appkey
     **/
    public $appkey;

    /**
        应用id
     **/
    public $id;

    /**
        线上码
     **/
    public $online_code;

    /**
        线上版本
     **/
    public $online_version;


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


}

