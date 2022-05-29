<?php

namespace Viberbot\Messages\Keyboard;

use Viberbot\Messages\Enum\Button\ActionBody;
use Viberbot\Messages\Enum\Button\ActionType;
use Viberbot\Messages\Enum\Button\BgMediaScaleType;
use Viberbot\Messages\Enum\Button\BgMediaType;
use Viberbot\Messages\Enum\Button\ImageScaleType;
use Viberbot\Messages\Enum\Button\OpenURLMediaType;
use Viberbot\Messages\Enum\Button\OpenURLType;
use Viberbot\Messages\Enum\Button\TextHAlign;
use Viberbot\Messages\Enum\Button\TextSize;
use Viberbot\Messages\Enum\Button\TextVAlign;
use Viberbot\Messages\Keyboard\Button\Frame;
use Viberbot\Messages\Keyboard\Button\InternalBrowser;
use Viberbot\Messages\Keyboard\Button\Map;
use Viberbot\Messages\Keyboard\Button\MediaPlayer;
use Viberbot\Messages\Trait\Expose;

class Button
{

    use Expose;

    protected int $Columns;

    protected int $Rows;

    protected string $BgColor;

    protected bool $Silent;

    protected string $BgMediaType;

    protected string $BgMedia;

    protected string $BgMediaScaleType;

    protected string $ImageScaleType;

    protected bool $BgLoop;

    protected string $ActionType;

    protected string $ActionBody;

    protected string $Image;

    protected string $Text;

    protected string $TextVAlign;

    protected string $TextHAlign;

    protected array $TextPaddings;

    protected int $TextOpacity;

    protected string $TextSize;

    protected string $OpenURLType;

    protected string $OpenURLMediaType;

    protected string $TextBgGradientColor;

    protected bool $TextShouldFit;

    protected InternalBrowser $InternalBrowser;

    protected Map $Map;

    protected Frame $Frame;

    protected MediaPlayer $MediaPlayer;

    public function setColumns(int $columns = 6): self
    {
        $this->Columns = $columns;
        return $this;
    }

    public function setRows(int $rows = 1): self
    {
        $this->Rows = $rows;
        return $this;
    }

    public function setBgColor(string $color): self
    {
        $this->BgColor = $color;
        return $this;
    }

    public function setSilent(bool $silen = false): self
    {
        $this->Silent = $silen;
        return $this;
    }

    public function setBgMediaType(BgMediaType $type): self
    {
        $this->BgMediaType = $type->getValue();
        return $this;
    }

    public function setBgMedia(string $src): self
    {
        $this->BgMedia = $src;
        return $this;
    }

    public function setBgMediaScaleType(BgMediaScaleType $type): self
    {
        $this->BgMediaScaleType = $type->getValue();
        return $this;
    }

    public function setImageScaleType(ImageScaleType $type): self
    {
        $this->ImageScaleType = $type->getValue();
        return $this;
    }

    public function setBgLoop(bool $loop = true): self
    {
        $this->BgLoop = $loop;
        return $this;
    }

    public function setActionType(ActionType $type): self
    {
        $this->ActionType = $type->getValue();
        return $this;
    }

    public function setActionBody(ActionBody|string $action): self
    {
        $this->ActionBody = gettype($action) === 'string' ? $action : $action->getValue();
        return $this;
    }

    public function setImage(string $src): self
    {
        $this->Image = $src;
        return $this;
    }

    public function setText(string $text): self
    {
        $this->Text = $text;
        return $this;
    }

    public function setTextVAlign(TextVAlign $VAlign): self
    {
        $this->TextVAlign = $VAlign->getValue();
        return $this;
    }

    public function setTextHAlign(TextHAlign $HAlign): self
    {
        $this->TextHAlign = $HAlign->getValue();
        return $this;
    }

    public function setTextPaddings(int $top = 12, int $left = 12, int $bottom = 12, int $right = 12): self
    {
        $this->TextPaddings = [$top, $left, $bottom, $right];
        return $this;
    }

    public function setTextOpacity(int $opacity = 100): self
    {
        $this->TextOpacity = $opacity;
        return $this;
    }

    public function setTextSize(TextSize $size): self
    {
        $this->TextSize = $size->getValue();
        return $this;
    }

    public function setOpenURLType(OpenURLType $type): self
    {
        $this->OpenURLType = $type->getValue();
        return $this;
    }

    public function setOpenURLMediaType(OpenURLMediaType $type): self
    {
        $this->OpenURLMediaType = $type->getValue();
        return $this;
    }

    public function setTextBgGradientColor(string $color): self
    {
        $this->TextBgGradientColor = $color;
        return $this;
    }

    public function setTextShouldFit(bool $fit = false): self
    {
        $this->TextShouldFit = $fit;
        return $this;
    }

    public function setInternalBrowser(InternalBrowser $internalBrowser): self
    {
        $this->InternalBrowser = $internalBrowser;
        return $this;
    }

    public function setMap(Map $map): self
    {
        $this->Map = $map;
        return $this;
    }

    public function setFrame(Frame $frame): self
    {
        $this->Frame = $frame;
        return $this;
    }

    public function setMediaPlayer(MediaPlayer $mediaPlayer): self
    {
        $this->MediaPlayer = $mediaPlayer;
        return $this;
    }
}
