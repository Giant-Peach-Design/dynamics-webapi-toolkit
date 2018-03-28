<?php

namespace AlexaCRM\WebAPI\OData;

abstract class Settings {

    /**
     * Dynamics 365 organization address.
     *
     * @var string
     */
    public $instanceURI;

    /**
     * Returns Web API endpoint URI.
     *
     * @return string
     */
    public abstract function getEndpointURI();

}
