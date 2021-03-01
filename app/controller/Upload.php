<?php
namespace app\controller;

use app\BaseController;

class Upload extends BaseController
{
    public function up()
    {
        $file = $this->request->file('file');
        if(empty($file)){
            return '请选择上传文件';
        }
        
        $info = $file->move(root_path() . 'public/uploads', $file->getOriginalName());
        if($info){
            return '文件上传成功：' . $info->getRealPath();
        }else{
            return '文件上传：failed';
        }
    }
}