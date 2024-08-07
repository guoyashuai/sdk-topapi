<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappWidgetTemplateInstanceQueryResult {

    /**
        错误码
     **/
    public $err_code;

    /**
        错误信息
     **/
    public $err_message;

    /**
        返回结果
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

    public function getModel() : array{
        return $this->model;
    }

    public function setModel(array $model){
        $this->model = $model;
    }

    public function getSuccess() : string{
        return $this->success;
    }

    public function setSuccess(string $success){
        $this->success = $success;
    }


}

