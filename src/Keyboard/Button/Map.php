<?php

namespace Viberbot\Messages\Keyboard\Button;

use Viberbot\Messages\Trait\Expose;

class Map
{
    
    use Expose;

    protected float $Latitude;

    protected float $Longitude;

    public function setLatitude(float $lat): self
    {
        $this->Latitude = $lat;
        return $this;
    }

    public function setLongitude(float $lon): self
    {
        $this->Longitude = $lon;
        return $this;
    }
}
