<?php
namespace Topsdk\Topapi\Ability168\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoMiniappTemplateQueryappRequest {

    /**
        分页大小，最大50，按照小程序Id倒序
     **/
    private $pageSize;

    /**
        模板id
     **/
    private $templateId;

    /**
        分页号,>=1
     **/
    private $pageNum;


    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getTemplateId() : string{
        return $this->templateId;
    }

    public function setTemplateId(string $templateId){
        $this->templateId = $templateId;
    }

    public function getPageNum() : int{
        return $this->pageNum;
    }

    public function setPageNum(int $pageNum){
        $this->pageNum = $pageNum;
    }


    public function getApiName() : string {
        return "taobao.miniapp.template.queryapp";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->templateId)) {
            $requestParam["template_id"] = TopUtil::convertBasic($this->templateId);
        }

        if (!TopUtil::checkEmpty($this->pageNum)) {
            $requestParam["page_num"] = TopUtil::convertBasic($this->pageNum);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

