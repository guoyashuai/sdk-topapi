<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappWidgetTemplateInstanceQueryMiniAppEntityTemplateDTO {

    /**
        实例id
     **/
    public $id;

    /**
        小部件appkey
     **/
    public $appkey;

    /**
        小部件名称
     **/
    public $app_name;


    public function getId() : string{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
    }

    public function getAppkey() : string{
        return $this->appkey;
    }

    public function setAppkey(string $appkey){
        $this->appkey = $appkey;
    }

    public function getAppName() : string{
        return $this->app_name;
    }

    public function setAppName(string $appName){
        $this->app_name = $appName;
    }


}

