<?php
namespace Topsdk\Topapi\Ability168\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability168\Domain\TaobaoMiniappWidgetTemplateInstanceUpdateMiniAppInstantiateTemplateAppUpdateRequest;

class TaobaoMiniappWidgetTemplateInstanceUpdateRequest {

    /**
        参数信息
     **/
    private $paramMiniAppInstantiateTemplateAppUpdateRequest;


    public function getParamMiniAppInstantiateTemplateAppUpdateRequest() : TaobaoMiniappWidgetTemplateInstanceUpdateMiniAppInstantiateTemplateAppUpdateRequest{
        return $this->paramMiniAppInstantiateTemplateAppUpdateRequest;
    }

    public function setParamMiniAppInstantiateTemplateAppUpdateRequest(TaobaoMiniappWidgetTemplateInstanceUpdateMiniAppInstantiateTemplateAppUpdateRequest $paramMiniAppInstantiateTemplateAppUpdateRequest){
        $this->paramMiniAppInstantiateTemplateAppUpdateRequest = $paramMiniAppInstantiateTemplateAppUpdateRequest;
    }


    public function getApiName() : string {
        return "taobao.miniapp.widget.template.instance.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramMiniAppInstantiateTemplateAppUpdateRequest)) {
            $requestParam["param_mini_app_instantiate_template_app_update_request"] = TopUtil::convertStruct($this->paramMiniAppInstantiateTemplateAppUpdateRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

