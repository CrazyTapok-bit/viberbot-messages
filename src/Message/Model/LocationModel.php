<?php

namespace Viberbot\Messages\Message\Model;

use Viberbot\Messages\Trait\Expose;

class LocationModel
{
    
    use Expose;

    protected string $lat;

    protected string $lon;

    public function setLat(float $lat): self
    {
        $this->lat = $lat;
        return $this;
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLon(float $lon): self
    {
        $this->lon = $lon;
        return $this;
    }

    public function getLon(): ?float
    {
        return $this->lon;
    }
}
