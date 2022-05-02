<?php

namespace Viberbot\Messages\Trait;

trait Expose
{

    public function expose()
    {
        return array_map(function($v){
            if(is_object($v)){
                return $v->expose();
            }

            if(is_array($v)){
                return array_map(function($i){
                    return is_object($i) ? $i->expose() : $i;
                }, $v);
            }

            return $v;
        }, get_object_vars($this));
    }
}