<?php

namespace Viberbot\Messages;

class Sender
{
    /**
     * Unique Viber user id
     *
     * @var string
     */
    protected $id;

    /**
     * User’s Viber name
     *
     * @var string
     */
    protected $name;

    /**
     * URL of user’s avatar
     *
     * @var string
     */
    protected $avatar;

    /**
     * User’s 2 letter country code formatted ISO ALPHA-2 Code
     *
     * @var string
     */
    protected $country;

    /**
     * User’s phone language. Will be returned according to the device language formatted ISO 639-1
     *
     * @var string
     */
    protected $language;

    /**
     * User’s 2 letter country code formatted ISO ALPHA-2 Code
     *
     * @var string
     */
    protected $api_version;


    public function __construct($props)
    {
        foreach ($props as $prop => $value) {
            if (property_exists(get_class($this), $prop)) {
            $this->$prop = $value;
            }
        }
    }

    /**
     * Get unigue user id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Get user name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * GET user avatar URL
     *
     * Can return null
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * 2 letter country code
     *
     * Code formatted ISO ALPHA-2
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Get user phone language
     *
     * Will be returned according to the device language formatted ISO 639-1
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * Get version
     *
     * The maximal Viber version that is supported by all of the user’s devices
     */
    public function getApiVersion(): float
    {
        return $this->api_version;
    }
}
