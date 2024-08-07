<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappWidgetTemplateInstanceQueryMiniAppInstantiateAppOpenQuery {

    /**
        分页大小
     **/
    public $page_size;

    /**
        模版id
     **/
    public $template_id;

    /**
        分页
     **/
    public $page_num;


    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getTemplateId() : string{
        return $this->template_id;
    }

    public function setTemplateId(string $templateId){
        $this->template_id = $templateId;
    }

    public function getPageNum() : int{
        return $this->page_num;
    }

    public function setPageNum(int $pageNum){
        $this->page_num = $pageNum;
    }


}

