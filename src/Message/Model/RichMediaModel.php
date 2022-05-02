<?php

namespace Viberbot\Messages\Message\Model;

use Viberbot\Messages\Keyboard\Button;
use Viberbot\Messages\Message\Type;
use Viberbot\Messages\Trait\Expose;

class RichMediaModel
{

    use Expose;

    protected string $Type = Type::RICH_MEDIA;

    protected int $ButtonsGroupColumns = 6;

    protected int $ButtonsGroupRows = 7;

    protected string $BgColor;

    protected array $Buttons;

    public function setButtonsGroupColumns(int $columns = 6): self
    {
        $this->ButtonsGroupColumns = $columns;
        return $this;
    }

    public function setButtonsGroupRows(int $rows = 7): self
    {
        $this->ButtonsGroupRows = $rows;
        return $this;
    }

    public function setBgColor(string $color): self
    {
        $this->BgColor = $color;
        return $this;
    }

    /**
     * @param Button[] $button
     */
    public function setButtons(array $buttons): self
    {
        $this->Buttons =$buttons;
        return $this;
    }
}
