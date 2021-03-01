<?php
namespace app\model;

use think\Model;

class Info extends Model
{
    protected $schema = [
        'id'    => 'int unsigned',
        'sequence' => 'blob',
    ];

    public static function infoQuery($id)
    {
        $id = (int)$id;
        $res = self::where('id', $id)->find();
        return $res;
    }

    public static function infoUpdate($info)
    {
        $id = (int)$info->id;
        $res = self::find($id);
        if ($res) {
            $res->sequence = $info->sequence;
            $res->save();
        }
    }

    public static function infoAdd($info)
    {
        Info::create([
            'id' => (int)$info->id,
            'sequence' => $info->sequence,
        ]);
    }

    public static function infoDel($id)
    {
        $id = (int)$id;
        $res = self::find($id);
        if($res) {
            $res->delete();
        }
    }
}