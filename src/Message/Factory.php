<?php

namespace Viberbot\Messages\Message;

class Factory
{
    protected $tracking_data;

    public function __construct($props = [])
    {
        foreach ($props as $prop => $value) {

            if($prop === 'type'){
                switch($value->type){
                    case Type::TEXT:
                        return new Text($value);
                    case Type::URL:
                        return new Url($value);
                    case Type::PICTURE:
                        return new Picture($value);
                    case Type::CONTACT:
                        return new Contact($value);
                    case Type::VIDEO:
                        return new Video($value);
                    case Type::FILE:
                        return new File($value);
                    case Type::STICKER:
                        return new Sticker($value);
                    case Type::LOCATION:
                        return new Location($value);
                }
            }

            $this->$prop = $value;
        }
    }

    public function getType()
    {
        return $this->type;
    }

    public function getTrackingData()
    {
        return $this->tracking_data;
    }
}
