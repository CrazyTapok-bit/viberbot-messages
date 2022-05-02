<?php

namespace Viberbot\Messages\Keyboard\Button;

use Viberbot\Messages\Trait\Expose;

class Frame
{

    use Expose;

    protected int $BorderWidth;

    protected string $BorderColor;

    protected int $CornerRadius;

    public function setBorderWidth(int $width = 1): self
    {
        $this->BorderWidth = $width;
        return $this;
    }

    public function setBorderColor(string $color = "#000000"): self
    {
        $this->BorderColor = $color;
        return $this;
    }

    public function setCornerRadius(int $radius = 0): self
    {
        $this->CornerRadius = $radius;
        return $this;
    }
}
