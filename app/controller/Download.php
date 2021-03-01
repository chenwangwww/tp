<?php
namespace app\controller;

use app\BaseController;

class download extends BaseController
{
    public function down()
    {
        //--disable-fileinfo 
        //--enable-fileinfo: 编译安装的时候服务器内存必须要大于1G，如果内存不到1G,那么整个php都无法编译安装
        // $file = root_path() . 'public/uploads/' . 'zhunong.png';
        // return download($file, 'zhunong.png');
        return '--disable-fileinfo';
    }
}