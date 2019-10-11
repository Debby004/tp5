<?php
namespace app\index\controller;
use think\view;
class Index
{
    public function index()
    {
        $view = new view();
        return $view->fetch('index');
    }
}
