<?php

class TestQueueMonitor extends BaseController
{
    /**
     * 初始化
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 页面：默认
     * @return Response
     */
    public function getIndex()
    {
        return __FILE__;
    }
}
