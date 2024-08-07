<?php
namespace Topsdk\Topapi\Ability168\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability168\Domain\TaobaoMiniappWidgetTemplateInstanceQueryMiniAppInstantiateAppOpenQuery;

class TaobaoMiniappWidgetTemplateInstanceQueryRequest {

    /**
        入参
     **/
    private $param0;


    public function getParam0() : TaobaoMiniappWidgetTemplateInstanceQueryMiniAppInstantiateAppOpenQuery{
        return $this->param0;
    }

    public function setParam0(TaobaoMiniappWidgetTemplateInstanceQueryMiniAppInstantiateAppOpenQuery $param0){
        $this->param0 = $param0;
    }


    public function getApiName() : string {
        return "taobao.miniapp.widget.template.instance.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param0)) {
            $requestParam["param0"] = TopUtil::convertStruct($this->param0);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

