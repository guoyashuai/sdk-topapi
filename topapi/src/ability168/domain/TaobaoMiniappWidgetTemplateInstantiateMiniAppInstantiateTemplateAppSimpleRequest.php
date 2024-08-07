<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappWidgetTemplateInstantiateMiniAppInstantiateTemplateAppSimpleRequest {

    /**
        描述
     **/
    public $description;

    /**
        小部件模版id
     **/
    public $template_id;

    /**
        小部件模版版本
     **/
    public $template_version;


    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
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

