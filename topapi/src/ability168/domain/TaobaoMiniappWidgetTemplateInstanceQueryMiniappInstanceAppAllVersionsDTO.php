<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappWidgetTemplateInstanceQueryMiniappInstanceAppAllVersionsDTO {

    /**
        实体信息
     **/
    public $mini_app_entity_template_dto;

    /**
        版本信息
     **/
    public $app_version_list;


    public function getMiniAppEntityTemplateDto() : TaobaoMiniappWidgetTemplateInstanceQueryMiniAppEntityTemplateDTO{
        return $this->mini_app_entity_template_dto;
    }

    public function setMiniAppEntityTemplateDto(TaobaoMiniappWidgetTemplateInstanceQueryMiniAppEntityTemplateDTO $miniAppEntityTemplateDto){
        $this->mini_app_entity_template_dto = $miniAppEntityTemplateDto;
    }

    public function getAppVersionList() : array{
        return $this->app_version_list;
    }

    public function setAppVersionList(array $appVersionList){
        $this->app_version_list = $appVersionList;
    }


}

