<?php

namespace app;

require_once root_path() . 'app/php_python.php';

class PyCtr
{
    private static $instance = null;

    private function __construct(){}

    public static function getInstance()
    {
        if(self::$instance == null)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function test1()
    {
        $res= ppython("test::go2", 1, 3, 'chen');
        return $res;
    }

    public function test2()
    {
        $res = ppython("test::go");
        return $res;
    }

    public function geo($name)
    {
        $res = ppython("main::saveSeq", $name);
        return $res;
    }

    public function test4($info)
    {
        $res = ppython("main::info", $info->id, $info->sequence);
        return $res;
    }
}
