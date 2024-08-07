<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappWidgetTemplateInstanceUpdateResult {

    /**
        错误码
     **/
    public $err_code;

    /**
        错误信息
     **/
    public $err_message;

    /**
        实体信息
     **/
    public $model;

    /**
        返回结果
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

    public function getModel() : TaobaoMiniappWidgetTemplateInstanceUpdateMiniAppEntityTemplateDTO{
        return $this->model;
    }

    public function setModel(TaobaoMiniappWidgetTemplateInstanceUpdateMiniAppEntityTemplateDTO $model){
        $this->model = $model;
    }

    public function getSuccess() : string{
        return $this->success;
    }

    public function setSuccess(string $success){
        $this->success = $success;
    }


}

