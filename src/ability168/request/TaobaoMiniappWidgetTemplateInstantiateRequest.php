<?php
namespace Topsdk\Topapi\Ability168\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability168\Domain\TaobaoMiniappWidgetTemplateInstantiateMiniAppInstantiateTemplateAppSimpleRequest;

class TaobaoMiniappWidgetTemplateInstantiateRequest {

    /**
        实例化数据
     **/
    private $paramMiniAppInstantiateTemplateAppSimpleRequest;


    public function getParamMiniAppInstantiateTemplateAppSimpleRequest() : TaobaoMiniappWidgetTemplateInstantiateMiniAppInstantiateTemplateAppSimpleRequest{
        return $this->paramMiniAppInstantiateTemplateAppSimpleRequest;
    }

    public function setParamMiniAppInstantiateTemplateAppSimpleRequest(TaobaoMiniappWidgetTemplateInstantiateMiniAppInstantiateTemplateAppSimpleRequest $paramMiniAppInstantiateTemplateAppSimpleRequest){
        $this->paramMiniAppInstantiateTemplateAppSimpleRequest = $paramMiniAppInstantiateTemplateAppSimpleRequest;
    }


    public function getApiName() : string {
        return "taobao.miniapp.widget.template.instantiate";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramMiniAppInstantiateTemplateAppSimpleRequest)) {
            $requestParam["param_mini_app_instantiate_template_app_simple_request"] = TopUtil::convertStruct($this->paramMiniAppInstantiateTemplateAppSimpleRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

