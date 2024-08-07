<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappTemplateQueryappMiniappInstanceAppAllVersionsDto {

    /**
        数据可能延迟，查不到隔会儿再查。
     **/
    public $app_version_list;

    /**
        小程序信息
     **/
    public $app_info;


    public function getAppVersionList() : array{
        return $this->app_version_list;
    }

    public function setAppVersionList(array $appVersionList){
        $this->app_version_list = $appVersionList;
    }

    public function getAppInfo() : TaobaoMiniappTemplateQueryappMiniAppEntityTemplateDto{
        return $this->app_info;
    }

    public function setAppInfo(TaobaoMiniappTemplateQueryappMiniAppEntityTemplateDto $appInfo){
        $this->app_info = $appInfo;
    }


}

