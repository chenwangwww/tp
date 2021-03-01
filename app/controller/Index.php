<?php
namespace app\controller;

use app\BaseController;
use app\PyCtr;
use app\model\Info;

class Index extends BaseController
{
    public function index()
    {
        return 'index';
    }

    public function hello()
    {
        $a = $this->request->param('ID');
        return 'hello,' . $a;
    }

    public function postTest()
    {
        $data = $this->request->param();
        $id = $data['ID'];
        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
        $age['id'] = $id;
        // return $age;
        // return $this->request->method();
        // return $data;
        return root_path();
    }

    public function ppython()
    {
        $info = PyCtr::getInstance()->test1();
        $info = str_replace('\'','"',$info);
        $info = json_decode($info);
        Info::infoAdd($info);
        return 'success';
    }

    public function ppython2()
    {
        // $info = PyCtr::getInstance()->test2();
        // return $info;
        Info::infoDel(3);
    }

    public function pickletest($name)
    {
        $res = PyCtr::getInstance()->geo($name);
        // return $info;
        // $info = str_replace('\'','"',$info);
        // $info = json_decode($info);
        // return $info;
        // Info::infoAdd($info);
        // return $info->desc;

        // $arr = explode('&&&&&', $res);
        // $info = ['id'=>$arr[0], 'sequence'=>$arr[1]];
        // Info::infoAdd(json_decode(json_encode($info)));
        return $res;
    }

    public function pickletest2()
    {
        $info = Info::infoQuery(1);
        $res = PyCtr::getInstance()->test4($info);
        return $res;
    }
}
