<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappWidgetTemplateInstantiateResult {

    /**
        错误码
     **/
    public $err_code;

    /**
        错误信息
     **/
    public $err_message;

    /**
        返回实体信息
     **/
    public $model;

    /**
        是否成功
     **/
    public $success;


    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }

    public function getErrMessage() : string{
        return $this->err_message;
    }

    public function setErrMessage(string $errMessage){
        $this->err_message = $errMessage;
    }

    public function getModel() : TaobaoMiniappWidgetTemplateInstantiateMiniAppEntityTemplateDTO{
        return $this->model;
    }

    public function setModel(TaobaoMiniappWidgetTemplateInstantiateMiniAppEntityTemplateDTO $model){
        $this->model = $model;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

