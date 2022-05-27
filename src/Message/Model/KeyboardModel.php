<?php

namespace Viberbot\Messages\Message\Model;

use Viberbot\Messages\Enum\Keyboard\InputFieldState;
use Viberbot\Messages\Keyboard\Metadata;
use Viberbot\Messages\Trait\Expose;

class KeyboardModel
{

    use Expose;

    protected string $Type = 'keyboard';

    protected array $Buttons;

    protected string $BgColor;

    protected bool $DefaultHeight;

    protected int $CustomDefaultHeight;

    protected int $HeightScale;

    protected int $ButtonsGroupColumns;

    protected int $ButtonsGroupRows;

    protected string $InputFieldState;

    protected Metadata $FavoritesMetadata;

    /**
     * @param Button[] $button
     */
    public function setButtons(array $buttons): self
    {
        $this->Buttons = $buttons;
        return $this;
    }

    public function setBgColor(string $color): self
    {
        $this->BgColor = $color;
        return $this;
    }

    public function setDefaultHeight(bool $defaultHeight = false): self
    {
        $this->DefaultHeight = $defaultHeight;
        return $this;
    }

    public function setCustomDefaultHeight(int $height): self
    {
        $this->CustomDefaultHeight = $height;
        return $this;
    }

    public function setHeightScale(int $scale = 100): self
    {
        $this->HeightScale = $scale;
        return $this;
    }

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

    public function setInputFieldState(InputFieldState $state): self
    {
        $this->InputFieldState = $state->getValue();
        return $this;
    }

    public function setFavoritesMetadata(Metadata $metaData): self
    {
        $this->FavoritesMetadata = $metaData;
        return $this;
    }
}
